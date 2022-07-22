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
                    <h1 id='title'>Upload videos</h1>

                    <!-- IN REVERSE ORDER BECAUSE OF FLOAT RIGHT -->
                    <a href='index.php' title='Close' class='btn'>
                        <i class='fa-solid fa-xmark'></i>
                    </a>
                    <a href='#' title='Send Feedback' class='btn'>
                        <i class='fa-solid fa-circle-exclamation'></i>
                    </a>
                </div>
                <div class='mid'>
                    <form action='' method='POST' enctype='multipart/form-data'>
                        <!-- UPLOAD STAGE -->
                        <div id='upload-stage' style='display: none;'>
                            <input type='file' name='video' accept='video/mp4,video/x-m4v,video/*' class='upload-input' id='upload' onchange='checkValue();'>
                            <div class='info'>
                                <p id='error'></p>
                                <h2>Drag and drop video files to upload (not available, please click the icon)</h2>
                                <p>Your videos will be private untill you publish them.</p>
                            </div>
                        </div>
                        <!-- DETAILS STAGE -->
                        <div id='details-stage' style='display: block;'>
                            <div class='timeline'>

                            </div>
                            <div class='details'>
                                <div class='info'>
                                    <h1>Details</h1>
                                    <a href='#'>REUSE DETAILS</a>
                                    <div class='input'>
                                        <label for='title'>Title (required)</label>
                                        <i class='fa-solid fa-circle-question'></i>
                                        <input type='text' name='title' required placeholder='Add a title that describes your video (type @ to mention a channel)'>
                                        <p>0/100</p>
                                    </div>
                                    <div class='input'>
                                        <label for='desc'>Description</label>
                                        <i class='fa-solid fa-circle-question'></i>
                                        <input type='text' name='desc' placeholder='Tell viewers about your video (type @ to mention a channel)'>
                                        <p>0/5000</p>
                                    </div>
                                    <div class='thumbnail'>
                                        <h2>Thumbnail</h2>
                                        <p>Select or upload a picture that shows what's in your video. A good thumbnail stands out and draws viewers' attention. <a href='#'>Learn more</a></p>
                                        <input type='file' name='thumbnail' accept='image/png,image/jpeg,image/*'>
                                    </div>
                                    <div class='playlists'>
                                        <h2>Playlists (not available)</h2>
                                        <p>Add your video to one or more playlists. Playlists can help viewers discover your content faster. <a href='#'>Learn more</a></p>
                                        <select name='playlist'>
                                            <option value='p-1'>Playlist 1</option>
                                            <option value='p-2'>Playlist 2</option>
                                            <option value='p-3'>Playlist 3</option>
                                        </select>
                                    </div>
                                    <div class='audience'>
                                        <h2>Audience (not available)</h2>
                                        <p>This video is set to not made for kids</p><p>Set by you</p>
                                        <p>Regardless of your location, you're legally required to comply with the Children's Online Privacy Protection Act (COPPA) and/or other laws. You're required to tell us whether your videos are made for kids.<a href='#'>What's content made for kids?</a></p>
                                        <input type='radio' name='for_kids' value='yes'id='yes'><label for='yes'>Yes, it's made for kids</label>
                                        <input type='radio' name='for_kids' value='no' id='no'><label for='no'>No, it's not made for kids</label>
                                        <div class='restriction'>
                                            <i class='fa-solid fa-angle-down'></i>
                                            <p>Age restriction (advanced)</p>
                                        </div>
                                    </div>
                                    <a href='#'>SHOW MORE</a>
                                    <p>Paid promotion, tags, subtitles, and more</p>
                                </div>
                                <div class='video-player'>
                                    <div class='player'>
                                        <video controls></video>
                                        <div class='left'>
                                            <p>Video link</p>
                                            <a href='#'>https://notactuallyalink</a>
                                            <p>Filename</p>
                                            <p></p>
                                        </div>
                                        <i class='fa-solid fa-copy'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='bottom' id='nav' style='display: block;'>
                            <!-- IN REVERSE ORDER BECAUSE OF FLOAT RIGHT -->
                            <i class=''></i>
                            <i class=''></i>
                            <i class=''></i>
                            <p>Processing HD (not really ;))</p>
                            <a href='#' onclick='' class='btn'>NEXT</a>
                        </div>
                    </form>
                </div>
            </article>
        </section>
    </body>
</html>