<?php
    setcookie('alreadyLoggedInCookie', $session, time() + 0, "/");

    header("Location: index.php");
?>