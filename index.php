
<!-- PHP (write in index.php the verification of sign in and uploading of data to database)--> <!-- 3 -->

<!-- 4 -->
<!-- Password confirm function -->
<!-- Show password function -->
<!-- Password validation as in the comment -->

<!DOCTYPE html>
<html>
    <head>
        <link rel='icon' type='image/svg' href='media/favicon.svg'>
        <?php require './required-files/head.php'; ?>
        <title>YouTube - clone</title>
    </head>
    <body class='home-page'>
        <div id='overlay' style='display: none'></div>
        <?php require './required-files/header.php'; ?>
            <section id='video-section' class='video-section'>
                <article class='video-categories'>
                    <div class='category active'>
                        <p>All</p>
                    </div>
                    <div class='category'>
                        <p>Live</p>
                    </div>
                    <div class='category'>
                        <p>Music</p>
                    </div>
                    <div class='category'>
                        <p>Amber Heard</p>
                    </div>
                    <div class='category'>
                        <p>Gaming</p>
                    </div>
                    <div class='category'>
                        <p>Bossa Nova</p>
                    </div>
                    <div class='category'>
                        <p>Deep House</p>
                    </div>
                    <div class='category'>
                        <p>Gadgets</p>
                    </div>
                    <div class='category'>
                        <p>Laughter</p>
                    </div>
                    <div class='category'>
                        <p>Trailers</p>
                    </div>
                    <div class='category'>
                        <p>Tourist destinations</p>
                    </div>
                    <div class='category'>
                        <p>Disc Golf</p>
                    </div>
                    <div class='category'>
                        <p>Formula 1</p>
                    </div>
                    <div class='category'>
                        <p>Scene</p>
                    </div>
                    <div class='category'>
                        <p>Classical Music</p>
                    </div>
                    <div class='category'>
                        <p>History</p>
                    </div>
                </article>
                <article class='videos'>
                    <div class='video'>
                        <div class='thumbnail'>
                            <img src='media/thumbnail-placeholder.png' alt='placeholder thumbnail'>
                            <p class='time'>0:18</p>
                        </div>
                        <div class='information'>
                            <img src='media/thumbnail-placeholder.png' alt='placeholder channel icon'>
                            <p class='title'>Placeholder title</p>
                            <p class='channel'>Placeholder channel</p>
                            <p class='stats'>13M views - 2 months ago</p>
                        </div>
                    </div>
                    <div class='video'>
                        <div class='thumbnail'>
                            <img src='media/thumbnail-placeholder.png' alt='placeholder thumbnail'>
                            <p class='time'>0:18</p>
                        </div>
                        <div class='information'>
                            <img src='media/thumbnail-placeholder.png' alt='placeholder channel icon'>
                            <p class='title'>Placeholder title</p>
                            <p class='channel'>Placeholder channel</p>
                            <p class='stats'>13M views - 2 months ago</p>
                        </div>
                    </div>
                    <div class='video'>
                        <div class='thumbnail'>
                            <img src='media/thumbnail-placeholder.png' alt='placeholder thumbnail'>
                            <p class='time'>0:18</p>
                        </div>
                        <div class='information'>
                            <img src='media/thumbnail-placeholder.png' alt='placeholder channel icon'>
                            <p class='title'>Placeholder title</p>
                            <p class='channel'>Placeholder channel</p>
                            <p class='stats'>13M views - 2 months ago</p>
                        </div>
                    </div>
                    <div class='video'>
                        <div class='thumbnail'>
                            <img src='media/thumbnail-placeholder.png' alt='placeholder thumbnail'>
                            <p class='time'>0:18</p>
                        </div>
                        <div class='information'>
                            <img src='media/thumbnail-placeholder.png' alt='placeholder channel icon'>
                            <p class='title'>Placeholder title</p>
                            <p class='channel'>Placeholder channel</p>
                            <p class='stats'>13M views - 2 months ago</p>
                        </div>
                    </div>
                </article>
            </section>
            
        <?php require './required-files/footer.php'; ?>
    </body>
</html>