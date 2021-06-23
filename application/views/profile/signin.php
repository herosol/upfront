<!doctype html>
<html>

<head>
    <title>Sign in — Upfront Worldwide Talent Agency</title>
    <?php require_once('includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('includes/header.php'); ?>
    <main common logon>


        <section id="logon">
            <div class="contain">
                <div class="logBlk">
                    <form action="<?= $base_url ?>employer/dashboard.php" method="post">
                        <h3>Sign in</h3>
                        <p>Enter your details below</p>
                        <div class="txtGrp">
                            <label for="">Email Address</label>
                            <input type="text" name="" id="" class="txtBox">
                        </div>
                        <div class="txtGrp pasDv">
                            <label for="">Password</label>
                            <input type="password" name="" id="" class="txtBox">
                            <i class="icon-eye" id="eye"></i>
                        </div>
                        <div class="txtGrp flex">
                            <div class="lblBtn">
                                <input type="checkbox" name="" id="remember" checked="">
                                <label for="remember">Remember me</label>
                            </div>
                            <a href="forgot-password.php" id="pass">Forgot Password?</a>
                        </div>
                        <div class="bTn text-center">
                            <button type="submit" class="webBtn blockBtn icoBtn"><img src="<?= $base_url ?>images/icon-pencil.svg" alt=""> Sign in</button>
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