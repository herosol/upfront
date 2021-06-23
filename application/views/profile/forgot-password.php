<!doctype html>
<html>

<head>
    <title>Forgot Password — Upfront Worldwide Talent Agency</title>
    <?php require_once('includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('includes/header.php'); ?>
    <main common logon>


        <section id="logon">
            <div class="contain">
                <div class="logBlk">
                    <form action="" method="post">
                        <h3>Reset your password here!</h3>
                        <p>Don’t worry. Just enter the email address you registered with and we’ll email you instructions to reset your password.</p>
                        <div class="txtGrp">
                            <label for="">Email Address</label>
                            <input type="text" name="" id="" class="txtBox">
                        </div>
                        <div class="bTn text-center">
                            <button type="submit" class="webBtn blockBtn icoBtn"><img src="<?= $base_url ?>images/icon-pencil.svg" alt=""> Reset Password</button>
                        </div>
                    </form>
                    <div class="haveAccount text-center">
                        <span>Don’t have an account?</span>
                        <a href="<?= $base_url ?>signup.php">Sign up</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- logon -->


    </main>
    <?php require_once('includes/footer.php'); ?>
</body>

</html>