<!DOCTYPE html>
<html>
    <head>
        <link rel='icon' type='image/svg' href='media/favicon.svg'>
        <?php require './required-files/head.php'; ?>
        <title>Channel content - YouTube Studio clone</title>
    </head>
    <body class='create-page'>
        <section class='create-section'>
            <article class='create-box'>
                <div class='top'>
                    <h1 id='video-title'>Upload videos</h1>

                    <!-- IN REVERSE ORDER BECAUSE OF FLOAT RIGHT -->
                    <a href='index.php' title='Close' class='btn'>
                        <i class='fa-solid fa-xmark'></i>
                    </a>
                    <a href='#' title='Send Feedback' class='btn'>
                        <i class='fa-solid fa-circle-exclamation'></i>
                    </a>
                </div>
                    <?php
                        session_start();

                        require "required-files/random-string.php";

                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["video"])) {
                            if (!isset($_COOKIE['alreadySaved'])) {
                                // Save video to files and video path to session
                                if (isset($_COOKIE['alreadyLoggedInCookie'])) {
                                    setcookie('alreadySaved', TRUE, time() + (60*60), "/");
                                    $cookie = $_COOKIE['alreadyLoggedInCookie'];
                                    if ($alreadySaved == false) {
                                        if (!file_exists("media/videos/".$cookie)) {
                                            $folder = mkdir("media/videos/".$cookie);
                                        }
                                        $videoExt = pathinfo($_FILES["video"]["name"], PATHINFO_EXTENSION);
                                        $videoPath = "media/videos/".$cookie."/".date("Y").date("m").date("d").getRandomString(5).".".$videoExt;
                                        
                                        if (move_uploaded_file($_FILES["video"]["tmp_name"], $videoPath)) {
                                            $_SESSION["videoPath"] = $videoPath;
                                        } else {
                                            print_r($_FILES);
                                        }
                                    }
                                } else {
                                    echo "<script>
                                        alert('Please sign back in to upload video.');
                                        window.location.href = 'index.php';
                                    </script>";
                                }
                                otherStages($_SESSION["videoPath"]);
                            } else {
                                setcookie('alreadySaved', TRUE, time(), "/");
                                otherStages($_SESSION["videoPath"]);
                            }
                        } else {
                            uploadStage();
                        }
                    ?>
            </article>
        </section>
    </body>
</html>
<?php
    function uploadStage() {
        echo "
            <div class='mid'>
                <!-- UPLOAD STAGE -->
                <div id='upload-stage' class='stage' style='display: block;'>
                <form action='create-video.php' method='POST' enctype='multipart/form-data' id='video-form'>
                    <input type='file' name='video' accept='video/mp4,video/x-m4v,video/*' class='upload-input' id='upload' onchange='checkValue();' required>
                </form>
                    <div class='info'>
                        <p id='error'></p>
                        <h2>Drag and drop video files to upload (not available, please click the icon)</h2>
                        <p>Your videos will be private untill you publish them.</p>
                    </div>
                    <div class='legal'>
                        <p>By submitting your videos to YouTube, you acknowledge that you agree to YouTube's <a href='#'>Terms of Service</a> and <a href='#'>Community Guidelines.</a></p>
                        <p>Please be sure not to violate others' copyright or privacy rights. <a href='#'>Learn more</a></p>
                    </div>
                </div>
            </div>
        ";
    }
    function otherStages($videoPath) {
        echo "
        <div class='timeline' id='timeline' style='display: block;'>
            <div class='lines'>
                <div class='line active' id='details-line'></div>
                <div class='line' id='elements-line'></div>
                <div class='line' id='checks-line'></div>
                <div class='line' id='visibility-line'></div>
            </div>
            <a href='#' class='active' id='details-link' onclick='showNextStage(\"details\")'>Details</a>
            <a href='#' id='elements-link' onclick='showNextStage(\"elements\")'>Video elements</a>
            <a href='#' id='checks-link' onclick='showNextStage(\"checks\")'>Checks</a>
            <a href='#' id='visibility-link' onclick='showNextStage(\"visibility\")'>Visibility</a>
        </div>
        <div class='mid'>
            <form action='upload-video.php' method='POST' enctype='multipart/form-data'>
                <!-- DETAILS STAGE -->
                <div id='details-stage' class='stage' style='display: block;'>
                    <div class='details'>
                        <div class='video-info'>
                            <div class='title'>
                                <h1>Details</h1>
                                <a href='#' id='reuse'>REUSE DETAILS</a>
                            </div>
                            <div class='input'>
                                <i class='fa-solid fa-circle-question'></i>
                                <textarea name='title' maxlength='100' onfocus='showCounter(this);' oninput='updateCounter(this);' required placeholder='Add a title that describes your video (type @ to mention a channel)' id='title-input'></textarea>
                                <label for='title'>Title (required)</label>
                                <p style='display: none;' class='counter'>0/100</p>
                            </div>
                            <div class='input' id='desc'>
                                <i class='fa-solid fa-circle-question'></i>
                                <textarea name='desc' maxlength='5000' onfocus='showCounter(this);' oninput='updateCounter(this);' required placeholder='Tell viewers about your video (type @ to mention a channel)'></textarea>
                                <label for='desc'>Description</label>
                                <p style='display: none;'  class='counter'>0/5000</p>
                            </div>
                            <div class='thumbnail'>
                                <h2>Thumbnail</h2>
                                <p>Select or upload a picture that shows what's in your video. A good thumbnail stands out and draws viewers' attention. <a href='#'>Learn more</a></p>
                                <i class='fa-solid fa-image img-icon'></i>
                                <input type='file' name='thumbnail' accept='image/png,image/jpeg,image/*' class='thumbnail-input'>
                            </div>
                            <div class='playlists'>
                                <h2>Playlists (not available)</h2>
                                <p>Add your video to one or more playlists. Playlists can help viewers discover your content faster. <a href='#'>Learn more</a></p>
                                <select name='playlist'>
                                    <option value='' selected disabled hidden>Select</option>
                                    <option value='p-1'>Playlist 1</option>
                                    <option value='p-2'>Playlist 2</option>
                                    <option value='p-3'>Playlist 3</option>
                                </select>
                            </div>
                            <div class='audience'>
                                <h2>Audience (not available)</h2>
                                <div class='choice'>
                                    <p>This video is set to not made for kids</p><p>Set by you</p>
                                </div>
                                <p>Regardless of your location, you're legally required to comply with the Children's Online Privacy Protection Act (COPPA) and/or other laws. You're required to tell us whether your videos are made for kids.<a href='#'>What's content made for kids?</a></p>
                                <div class='radio-buttons'>
                                    <input type='radio' name='for_kids' value='yes'id='yes'><label for='yes'>Yes, it's made for kids</label><br>
                                    <input type='radio' name='for_kids' value='no' id='no'><label for='no'>No, it's not made for kids</label>
                                </div>
                                <div class='restriction'>
                                    <i class='fa-solid fa-angle-down'></i>
                                    <p>Age restriction (advanced)</p>
                                </div>
                            </div>
                            <a href='#' class='more'>SHOW MORE</a>
                            <p style='margin-bottom: 50px;'>Paid promotion, tags, subtitles, and more</p>
                        </div>
                        <div class='video-player'>
                            <div class='player'>
                                <video controls id='video-player' src='$videoPath'></video>
                                <div class='left'>
                                    <p>Video link</p>
                                    <a href='#'>https://notactuallyalink</a>
                                    <p>Filename</p>
                                    <p></p>
                                </div>
                                <i class='fa-solid fa-copy' title='Copy video link'></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ELEMENTS STAGE -->
                <div id='elements-stage' class='stage' style='display: none;'>
                    <div class='elements'>
                        <div class='title'>
                            <h1>Video elements (not available)</h1>
                            <p>Use cards and an end screen to show viewers related videos, websites, and calls to action. <a href='#'>Learn more</a></p>
                        </div>
                        <div class='option'>
                            <div class='icon'>
                                <i class='fa-solid fa-closed-captioning'></i>
                            </div>
                            <div class='btn'>
                                <a href='#'>ADD</a>
                            </div>
                            <h2>Add subtitles</h2>
                            <p>Reach a broader audience by adding subtitles to your video</p>
                        </div>
                        <div class='option'>
                            <div class='icon'>
                                <i class='fa-solid fa-display'></i>
                            </div>
                            <div class='btn'>
                                <a href='#'>ADD</a>
                            </div>
                            <div class='btn wide'>
                                <a href='#'>IMPORT FROM VIDEO</a>
                            </div>
                            <h2>Add an end screen</h2>
                            <p>Promote related content at the end of your video</p>
                        </div>
                        <div class='option'>
                            <div class='icon'>
                                <i class='fa-solid fa-circle-exclamation'></i>
                            </div>
                            <div class='btn'>
                                <a href='#'>ADD</a>
                            </div>
                            <h2>Add cards</h2>
                            <p>Promote related content during your video</p>
                        </div>
                    </div>
                </div>
                <!-- CHECKS STAGE -->
                <div id='checks-stage' class='stage' style='display: none;'>
                    <div class='checks'>
                        <div class='title'>
                            <h1>Checks</h1>
                            <p>We'll check your video for issues that may restrict its visibility and then you will have the opportunity to fix issues before publishing your video. <a href='#'>Learn more</a></p>
                        </div>
                        <div class='copyright'>
                            <div class='icon'>
                                <i class='fa-solid fa-check'></i>
                            </div>
                            <h2>Copyright</h2>
                            <p>No issues found</p>
                        </div>
                        <p>Remember: These check results aren't final. Issues may come up in the future that impact your video. <a href='#'>Learn more</a></p>
                        <a href='#' class='feedback'>Send feedback</a>
                    </div>
                </div>
                <!-- VISIBILITY STAGE -->
                <div id='visibility-stage' class='stage' style='display: none'>
                    <div class='visibility'>
                        <div class='video-info'>
                            <div class='title'>
                                <h1>Visibility</h1>
                                <p>Choose when to publish and who can see your video</p>
                            </div>
                            <div class='options active'>
                                <input type='radio' id='publish' value='publish' checked><label for='publish'>Save or publish</label>
                                <p>Make your video <b>public, unlisted,</b> or <b>private</b></p>
                                <input type='radio' id='private' value='private' name='video_visibility' checked><label for='private'>Private</label>
                                <p>Only you and people you choose can watch your video</p>
                                <div class='share'>
                                    <i class='fa-solid fa-user-plus'></i>
                                    <a href='#'>SHARE PRIVATELY</a>
                                </div>
                                <input type='radio' id='unlisted' value='unlisted' name='video_visibility'><label for='unlisted'>Unlisted</label>
                                <p>Anyone with the video link can watch your video</p>
                                <input type='radio' id='public' value='public' name='video_visibility'><label for='public'>Public</label>
                                <p>Everyone can watch your video</p>
                                <input type='checkbox' id='premiere' value='premiere' disabled><label for='premiere' id='premiere-label'>Set as instant Premiere</label>
                                <i class='fa-solid fa-circle-question' id='premiere-icon'></i>
                            </div>
                            <div class='options'>
                                <input type='radio' id='schedule' value='schedule' disabled><label for='schedule'>Schedule (not available)</label>
                                <p>Select a date to make your video <b>public</b></p>
                            </div>
                            <div class='disclaimer'>
                                <h2>Before you publish, check the following:</h2>
                                <p>Do kids appear in this video?</p>
                                <p>Make sure you follow our policies to protect minors from harm, exploitation, bullying, and violations of labor law. <a href='#'>Learn more</a></p>
                                <p>Looking for overall content guidance?</p>
                                <p>Our Community Guidelines can help you avoid trouble and ensure that YouTube remains a safe and vibrant community. <a href='#'>Learn more</a></p>
                            </div>
                        </div>
                        <div class='video-player'>
                            <div class='player'>
                                <video controls id='video-player' src='$videoPath'></video>
                                <div class='left'>
                                    <p id='video-name'></p>
                                    <br>
                                    <p>Video link</p>
                                    <a href='#'>https://notactuallyalink</a>
                                </div>
                                <i class='fa-solid fa-copy' title='Copy video link'></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='bottom' id='nav' style='display: block;'>
                    <div class='left'>
                        <i class='fa-solid fa-arrow-up-from-bracket' title='Video upload complete'></i>
                        <i class='fa-solid fa-hard-drive' title='Video processing'></i>
                        <i class='fa-solid fa-square-check' title='Copyright check complete'></i>
                        <p>Checks complete. No issues found.</p>
                    </div>
                    <div class='right'>
                        <!-- IN REVERSE ORDER BECAUSE OF FLOAT RIGHT -->
                        <a href='#' onclick='showNextStage(\"\", false)' class='btn back' id='back-btn' style='display: none'>BACK</a>
                        <a href='#' onclick='showNextStage(\"\", true)' class='btn' id='next-btn' style='display: inline-block;'>NEXT</a>
                        <input type='submit' name='create-video' value='SAVE' class='btn' id='submit-btn' style='display: none;'>
                    </div>
                </div>
            </form>
        </div>
        ";
    }
?>