<!doctype html>
<html>

<head>
    <title>Reset Password — Upfront Worldwide Talent Agency</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main common logon>


        <section id="logon">
            <div class="contain">
                <div class="logBlk">
                    <form action="" method="post" autocomplete="off" class="frmAjax" id="frmReset">
                    <div class="alertMsg" style="display:none"></div>
                        <h3>Reset password</h3>
                        <p>Enter a new password for your account.</p>
                        <div class="txtGrp pasDv">
                            <label for="">Password</label>
                            <input type="password" name="pswd" id="pswd" class="txtBox">
                            <i class="icon-eye" id="eye"></i>
                        </div>
                        <div class="txtGrp pasDv">
                            <label for="">Confirm Password</label>
                            <input type="password" name="cpswd" id="cpswd" class="txtBox">
                            <i class="icon-eye" id="eye"></i>
                        </div>
                        <div class="bTn text-center">
                            <button type="submit" class="webBtn blockBtn icoBtn"><img src="<?= base_url() ?>assets/images/icon-pencil.svg" alt=""> Change my Password</button>
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