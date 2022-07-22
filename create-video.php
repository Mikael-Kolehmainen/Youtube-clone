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
                    <h1>Upload videos</h1>

                    <!-- IN REVERSE ORDER BECAUSE OF FLOAT RIGHT -->
                    <a href='index.php' title='Close' class='btn'>
                        <i class='fa-solid fa-xmark'></i>
                    </a>
                    <a href='#' title='Send Feedback' class='btn'>
                        <i class='fa-solid fa-circle-exclamation'></i>
                    </a>
                </div>
                <div class='mid'>
                    <input type='file' name='video' accept='video/mp4,video/x-m4v,video/*' class='upload-input' id='upload' onchange='checkValue();'>
                    <div class='info'>
                        <h2>Drag and drop video files to upload (not available, please click the icon)</h2>
                        <p>Your videos will be private untill you publish them.</p>
                    </div>
                </div>
            </article>
        </section>
    </body>
</html>