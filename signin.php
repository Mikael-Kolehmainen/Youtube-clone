<!DOCTYPE html>
<html>
    <head>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='icon' type='image/png' href='media/favicon-g.png'>
        <?php require './required-files/head.php'; ?>
        <title>YouTube - clone</title>
    </head>
    <body>
        <section class='sign-section'>
            <article class='sign-box'>
                <div class='logo'>
                    <img src='./media/logo-g.png'>
                </div>
                <?php
                    if ($_SERVER["REQUEST_METHOD"] != "POST") {
                        echo "
                        <h2>Sign in</h2>
                        <p>to continue to YouTube</p>
                        <form action='signin.php' method='POST'>
                            <input type='email' name='email' placeholder='Email' required>
                            <a href='#'>Forgot email?</a>
                            <p>Not your computer? Use Guest mode to sign in privately.<a href='#'>Learn more</a></p>
                            <div class='options'>
                                <a href='signup.php'>Create account</a>
                                <input type='submit' name='stage-1' value='Next'>
                            </div>
                        </form>
                        ";
                    } else {
                        session_start();
                        $_SESSION['email'] = $_POST['email'];
                        echo "
                        <h2 style='margin-bottom: 100px;'>Welcome</h2>
                        <p class='useremail'>$_SESSION[email]</p>
                        <form action='index.php' method='POST'>
                            <input type='password' name='password' placeholder='Enter your password' required><br>
                            <input type='checkbox' name='show' id='show' onchange=''><label for='show'>Show password</label>
                            <div class='options'>
                                <a href='#'>Forgot password?</a>
                                <input type='submit' name='sign-in' value='Next'>
                            </div>
                        </form>
                        ";
                    }
                ?>
                <div class='outside'>
                    <select>
                        <option value='English-US'>English (United States)</option>
                    </select>
                    <div class='right'>
                        <a href='#'>Help</a>
                        <a href='#'>Privacy</a>
                        <a href='#'>Terms</a>
                    </div>
                </div>
            </article>
        </section>
        <?php require './required-files/footer.php'; ?>
    </body>
</html>