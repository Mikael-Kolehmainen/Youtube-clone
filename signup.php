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
            <article class='sign-box sign-up'>
                <div class='logo'>
                    <img src='./media/logo-g.png'>
                </div>
                <h2>Create your Google Account</h2>
                <p>to continue to YouTube</p>
                <form action='index.php' method='POST'>
                    <div class='inline'>
                        <input type='text' name='fname' placeholder='First name' required>
                        <input type='text' name='lname' placeholder='Last name' required>
                    </div>
                    <input class='long' type='email' name='email' placeholder='Your email address' required>
                    <p class='comment'>You'll need to confirm that this email belongs to you. (not here ;) )</p>
                    <a href='#'>Create a new Gmail address instead</a>
                    <div class='inline margin'>
                        <input type='password' name='pw' id='pw' placeholder='Password' required onchange='checkPasswords();'>
                        <input type='password' name='repeat' id='repeat' placeholder='Confirm' required onchange='checkPasswords();'>
                    </div>
                    <p class='comment' id='pwCheck'>Use 8 or more characters with a mix of letters, numbers & symbols</p>
                    <input type='checkbox' name='show' id='show' onchange='showPassword();'><label for='show'>Show password</label>
                    <div class='options'>
                        <a href='signin.php'>Sign in instead</a>
                        <input type='submit' name='sign-up' value='Create' id='sign-up'>
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
        <?php require './required-files/footer.php'; ?>
    </body>
</html>