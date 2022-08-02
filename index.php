<!-- 6 -->
<!-- Upload video function -->
    <!-- Finish timeline -->
        <!-- BUG: when on other stage than details and refresh it will think it's still on that stage -->

    <!-- add title up and on visibility page --> <!-- 1 -->

    <!-- thumbnail upload visual side -->

    <!-- video player function --> <!-- 2 -->
    
    <!-- Redirect to video page after upload -->

    <!-- Validate title & desc according to MariaDB policy (for example. no ' in them) -->

    <!-- Remove 'alreadySaved' cookie if create video section is closed -->

    <!-- Change desc & title input to textarea -->

<!-- 7 -->
<!-- The place where you can watch the video -->

<!-- 8 -->
<!-- HOW TO USE TUTORIAL TO GITHUB REPO -->
    <!-- change upload_max_filesize from php.ini so that program can work -->

<!DOCTYPE html>
<html>
    <head>
        <link rel='icon' type='image/svg' href='media/favicon.svg'>
        <?php require './required-files/head.php'; ?>
        <title>YouTube - clone</title>
    </head>
    <body class='home-page'>
        <?php
            require './required-files/random-string.php';

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["sign-up"])) {
                require './required-files/connection.php';
                $sql = "SELECT email FROM users";
                $result = mysqli_query($conn, $sql);
                $email = $_POST['email'];
                $alreadyInDb = false;
                if (mysqli_num_rows($result) >= 0) {
                    for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                        $row = mysqli_fetch_assoc($result);
                        
                        if ($email == $row['email']) {
                            $alreadyInDb = true;
                            echo "<script>
                                alert('The e-mail is already in use.');
                                window.location.href = 'signup.php';
                                </script>";
                        }
                    }
                } else {
                    echo "<script>
                            alert('Something went wrong, try again.');
                            window.location.href = 'signup.php';
                            </script>";
                }
                if ($alreadyInDb == false) {
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $email = $_POST['email'];
                    $pw = $_POST['pw'];
                    $pw = getRandomString(5).password_hash($pw, PASSWORD_DEFAULT);
                    $session = getRandomString(25);

                    $sql = "INSERT INTO users (fname, lname, email, pw, sessionhash)
                            VALUES ('$fname', '$lname', '$email', '$pw', '$session')";

                    mysqli_query($conn, $sql);

                    $cookieTime = 60 * 60;
                    setcookie('alreadyLoggedInCookie', $session, time() + ($cookieTime), "/");

                    header("Location: index.php");
                }
                mysqli_close($conn);
            } else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["sign-in"])) {
                require 'required-files/connection.php';
                $sql = "SELECT id, email, pw FROM users";
                $result = mysqli_query($conn, $sql);
                $amountOfWrongPws = 0;
                session_start();
                $email = $_SESSION['email'];
                $pw = $_POST['password'];

                if (mysqli_num_rows($result) >= 0) {
                    for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                        $row = mysqli_fetch_assoc($result);
                        $dbPw = substr($row['pw'], 5);
                        if ($email == $row['email'] && password_verify($pw, $dbPw) == 1) {
                            $session = getRandomString(25);
                            $cookieTime = 60 * 60;
                            setcookie('alreadyLoggedInCookie', $session, time() + ($cookieTime), "/");
                            $userID = $row['id'];
                            $sql_2 = "UPDATE users SET sessionhash = '$session' WHERE id = '$userID'";
                            mysqli_query($conn, $sql_2);
                            showWebsite($session);
                        } else {
                            echo "<script>
                            alert('E-mail or password is wrong.');
                            window.location.href = 'signin.php';
                            </script>";
                        }
                    }
                }
                mysqli_close($conn);
            } else if (isset($_COOKIE['alreadyLoggedInCookie'])) {
                showWebsite($_COOKIE['alreadyLoggedInCookie']);
            } else {
                showNotLoggedInWebsite();
            }
        ?>
        <?php require './required-files/footer.php'; ?>
    </body>
</html>
<?php
    function showWebsite($session) {
        require 'required-files/connection.php';
        $sql = "SELECT fname, lname, sessionhash FROM users";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) >= 0) {
            for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                $row = mysqli_fetch_assoc($result);
                if ($session == $row['sessionhash']) {
                    require './required-files/header-signed-in.php';
                    echo "
                        <div id='overlay' style='display: none'></div>
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
                    ";
                }
            }
        }
        mysqli_close($conn);
    }
    function showNotLoggedInWebsite() {
        require './required-files/header.php';
        echo "
            <div id='overlay' style='display: none'></div>
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
        ";
    }
?>