<!DOCTYPE html>
<html>
    <head>
        <link rel='icon' type='image/svg' href='media/favicon.svg'>
        <?php require './required-files/head.php'; ?>
        <title>The video title - YouTube clone</title>
    </head>
    <body class='video-page'>
        <?php
            if (isset($_COOKIE['alreadyLoggedInCookie'])) {
                showHeader($_COOKIE['alreadyLoggedInCookie']);
            } else {
                showNotLoggedInHeader();
            }
        ?>
        <section class='video-section' id='video-section'>
            <article class='video-player'>
                <video class='player' controls src=''></video>
                <h1>VIDEO TITLE</h1>
            </article>
        </section>
    </body>
</html>
<?php
    function showHeader($session) {
        require 'required-files/connection.php';
        $sql = "SELECT fname, lname, sessionhash FROM users";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) >= 0) {
            for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                $row = mysqli_fetch_assoc($result);
                if ($session == $row['sessionhash']) {
                    require './required-files/header-signed-in.php';
                }
            }
        }
        mysqli_close($conn);
    }
    function showNotLoggedInHeader() {
        require './required-files/header.php';
    }
?>