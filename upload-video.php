<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["create-video"])) {
        require "required-files/connection.php";
        $sql = "SELECT id, sessionhash FROM users";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) >= 0) {
            for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                $row = mysqli_fetch_assoc($result);
                if (isset($_COOKIE['alreadyLoggedInCookie'])) {
                    if ($_COOKIE['alreadyLoggedInCookie'] == $row['sessionhash']) {
                        $userID = $row['id'];
                    }
                } else {
                    echo "
                        <script>
                            alert('Please sign in and try again.');
                            window.location.href = 'index.php';
                        </script>
                    ";
                }
            }
        } else {
            echo "
                <script>
                    alert('Something went wrong with retriving user data, try again.');
                    window.location.href = 'create-video.php';
                </script>
            ";
        }
        mysqli_close($conn);

        session_start();
        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $thumbnail = $_POST['thumbnail']; /* MAKE THUMBNAIL CODE ACTUALLY WORK */

        // SAVE THUMBNAIL TO THE SERVER
        $cookie = $_COOKIE['alreadyLoggedInCookie'];
        $folder = "media/videos/".$cookie;
        if (isset($_FILES["thumbnail"])) {
            $thumbExt = pathinfo($_FILES["thumbnail"]["name"], PATHINFO_EXTENSION);
            $thumbPath = substr($_SESSION['videoPath'], 0, strpos($_SESSION['videoPath'], ".")).".".$thumbExt;
            if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $thumbPath)) {

            } else {
                echo "
                    <script>
                        alert('Failed to upload thumbnail, try again.');
                        windows.location.href = 'create-video.php';
                    </script>
                ";
            }
        } else {
            // SAVE PATH TO A DEFAULT THUMBNAIL
        }

        $visibility = $_POST['video_visibility'];
        $video = $_SESSION['videoPath'];
        require 'required-files/connection.php';
        $sql = "INSERT INTO videos (title, description, thumbnail, visibility, video, users_id)
                VALUES ('$title', '$desc', '$thumbPath', '$visibility', '$video', '$userID')";
        
        setcookie('alreadySaved', false, time() + 0, "/");

        // Redirect to video page eventually
        if (mysqli_query($conn, $sql)) {
            echo "
                <script>
                    window.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Something went wrong with uploading the data, try again.');
                    window.location.href = 'create-video.php';
                </script>
            "
        }
        mysqli_close($conn);
    } else {
        echo "
            <script>
                window.location.href = 'index.php';
            </script>
        ";
    }
?>