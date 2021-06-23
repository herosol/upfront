<!doctype html>
<html>

<head>
    <title>Reset Password — Upfront Worldwide Talent Agency</title>
    <?php require_once('includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('includes/header.php'); ?>
    <main common logon>


        <section id="logon">
            <div class="contain">
                <div class="logBlk">
                    <form action="" method="post">
                        <h3>Reset password</h3>
                        <p>Enter a new password for your account.</p>
                        <div class="txtGrp pasDv">
                            <label for="">Password</label>
                            <input type="password" name="" id="" class="txtBox">
                            <i class="icon-eye" id="eye"></i>
                        </div>
                        <div class="txtGrp pasDv">
                            <label for="">Confirm Password</label>
                            <input type="password" name="" id="" class="txtBox">
                            <i class="icon-eye" id="eye"></i>
                        </div>
                        <div class="bTn text-center">
                            <button type="submit" class="webBtn blockBtn icoBtn"><img src="<?= $base_url ?>images/icon-pencil.svg" alt=""> Change my Password</button>
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