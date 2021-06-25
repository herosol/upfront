<!doctype html>
<html>

<head>
    <title>Forgot Password — Upfront Worldwide Talent Agency</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main common logon>


        <section id="logon">
            <div class="contain">
                <div class="logBlk">
                    <form action="" method="post" autocomplete="off" class="frmAjax" id="frmForgot">
                        <div class="alertMsg" style="display:none"></div>
                        <h3>Reset your password here!</h3>
                        <p>Don’t worry. Just enter the email address you registered with and we’ll email you instructions to reset your password.</p>
                        <div class="txtGrp">
                            <label for="">Email Address</label>
                            <input type="email" name="email" id="email" class="txtBox">
                        </div>
                        <div class="bTn text-center">
                            <button type="submit" class="webBtn blockBtn icoBtn"><img src="<?= base_url() ?>assets/images/icon-pencil.svg" alt=""> Reset Password</button>
                        </div>
                    </form>
                    <div class="haveAccount text-center">
                        <span>Don’t have an account?</span>
                        <a href="<?= base_url() ?>signup">Sign up</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- logon -->
        <script type="text/javascript" src="<?= base_url('assets/js/custom-validations.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/js/custom.js') ?>"></script>

    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>