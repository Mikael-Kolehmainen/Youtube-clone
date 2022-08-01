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

        session_start();
        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $thumbnail = $_POST['thumbnail']; /* MAKE THUMBNAIL CODE ACTUALLY WORK */
        $visibility = $_POST['video_visibility'];
        $video = $_SESSION['videoPath'];

        $sql = "INSERT INTO videos (title, description, thumbnail, visibility, video, users_id)
                VALUES ('$title', '$desc', '$thumbnail', '$visibility', '$video', '$userID')";
        
        // Redirect to video page eventually
        if (mysqli_query($conn, $sql)) {
            echo "
                <script>
                    window.location.href = 'index.php';
                </script>
            ";
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