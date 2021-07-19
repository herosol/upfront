<!doctype html>
<html>

<head>
    <title><?= !empty($site_content['page_title']) ? $site_content['page_title'] . ' - ' : 'Sign In - ' ?><?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main common logon>


        <section id="logon">
            <div class="contain">
                <div class="logBlk">
                    <form action="" method="post" autocomplete="off" class="frmAjax" id="frmLogin">
                        <div class="alertMsg" style="display:none"></div>
                        <h3><?= $site_content['heading'] ?></h3>
                        <p><?= $site_content['short_desc'] ?></p>
                        <div class="txtGrp">
                            <label for="">Email Address</label>
                            <input type="email" name="email" id="email" class="txtBox">
                        </div>
                        <div class="txtGrp pasDv">
                            <label for="">Password</label>
                            <input type="password" name="password" id="password" class="txtBox">
                            <i class="icon-eye" id="eye"></i>
                        </div>
                        <div class="txtGrp flex">
                            <div class="lblBtn">
                                <input type="checkbox" name="remeberMe" id="remember" checked="">
                                <label for="remember">Remember me</label>
                            </div>
                            <a href="<?= base_url() ?>forgot-password" id="pass">Forgot Password?</a>
                        </div>
                        <div class="bTn text-center">
                            <button type="submit" class="webBtn blockBtn icoBtn"><img src="<?= base_url() ?>assets/images/icon-pencil.svg" alt=""> Sign in</button>
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
    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>