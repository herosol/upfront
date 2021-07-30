<!doctype html>
<html>

<head>
    <title><?= !empty($site_content['page_title']) ? $site_content['page_title'] . ' - ' : 'Sign up - ' ?><?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main common logon>


        <section id="logon">
            <div class="contain">
                <div class="logBlk">
                    <form action="" method="post" id="frmSignup" class="frmAjax" autocomplete="off">
                        <div class="alertMsg" style="display:none"></div>
                        <h3><?= $site_content['heading'] ?></h3>
                        <p><?= $site_content['short_desc'] ?></p>
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
                                    <a target="_balnk" href="<?= base_url() ?>terms-and-conditions">Terms & Conditions</a>
                                    and
                                    <a target="_balnk" href="<?= base_url() ?>privacy-policy">Privacy Policy.</a>
                                </label>
                            </div>
                        </div>
                        <div class="bTn text-center">
                            <button type="submit" class="webBtn blockBtn icoBtn"><img src="<?= base_url() ?>assets/images/icon-pencil.svg" alt=""> Sign up</button>
                        </div>
                    </form>
                    <div class="haveAccount text-center">
                        <span>Already have an account?</span>
                        <a href="<?= base_url() ?>signin">Sign in</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- logon -->
    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>