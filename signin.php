<!DOCTYPE html>
<html>
    <head>
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
                <h2>Sign in</h2>
                <p>to continue to YouTube</p>
                <form action='' method='POST'>
                    <input type='email' name='email' placeholder='Email'>
                    <a href='#'>Forgot email?</a>
                    <p>Not your computer? Use Guest mode to sign in privately.<a href='#'>Learn more</a></p>
                    <div class='options'>
                        <a href='signup.php'>Create account</a>
                        <p onclick=''>Next</p>
                    </div>
                </form>
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
    </body>
</html>