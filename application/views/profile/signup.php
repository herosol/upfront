<!doctype html>
<html>

<head>
    <title>Sign up — Upfront Worldwide Talent Agency</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main common logon>


        <section id="logon">
            <div class="contain">
                <div class="logBlk">
                    <form action="" method="post" id="frmSignup" class="frmAjax">
                    <div class="alertMsg" style="display:none"></div>
                        <h3>Sign up</h3>
                        <p>Work Better, Live Better.</p>
                        <div class="txtGrp">
                            <label for="">First Name</label>
                            <input type="text" name="fname" id="first_name" class="txtBox">
                        </div>
                        <div class="txtGrp">
                            <label for="">Last Name</label>
                            <input type="text" name="lname" id="last_name" class="txtBox">
                        </div>
                        <div class="txtGrp">
                            <label for="">Email Address</label>
                            <input type="text" name="email" id="email" class="txtBox">
                        </div>
                        <div class="txtGrp pasDv">
                            <label for="">Password</label>
                            <input type="password" name="password" id="password" class="txtBox">
                            <i class="icon-eye" id="eye"></i>
                        </div>
                        <div class="txtGrp pasDv">
                            <label for="">Confirm Password</label>
                            <input type="password" name="cpassword" id="cpassword" class="txtBox">
                            <i class="icon-eye" id="eye"></i>
                        </div>
                        <div class="txtGrp flex">
                            <div class="lblBtn">
                                <input type="checkbox" name="confirm" id="confirm">
                                <label for="confirm">By signing up, I agree to Upfront Worldwide Talent Agency
                                    <a href="<?= $base_url ?>terms-and-conditions.php">Terms & Conditions</a>
                                    and
                                    <a href="<?= $base_url ?>privacy-policy.php">Privacy Policy.</a>
                                </label>
                            </div>
                        </div>
                        <div class="bTn text-center">
                            <button type="submit" class="webBtn blockBtn icoBtn"><img src="<?= base_url() ?>assets/images/icon-pencil.svg" alt=""> Sign up</button>
                        </div>
                    </form>
                    <div class="haveAccount text-center">
                        <span>Already have an account?</span>
                        <a href="<?= $base_url ?>signin.php">Sign in</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- logon -->
    <script type="text/javascript" src="<?= base_url('assets/js/custom-validations.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/main.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/custom.js') ?>"></script>

    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>