<!doctype html>
<html>

<head>
    <title><?= !empty($site_content['page_title']) ? $site_content['page_title'] . ' - ' : 'Sign up - ' ?><?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main common logon>


        <section id="signup">
            <div class="contain">
                <div class="logBlk">
                    <form action="" method="post" id="frmSignup" class="frmAjax">
                        <div class="alertMsg" style="display:none"></div>
                        <!-- <h3><?= $site_content['heading'] ?></h3> -->
                        <h3>Become a Model</h3>
                        <p><?= $site_content['short_desc'] ?></p>
                        <div class="formRow row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                <div class="txtGrp">
                                    <div class="upLoadDp">
                                        <div class="ico">
                                            <img src="<?= base_url() ?>assets/images/users/1.jpg" alt="">
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="webBtn smBtn uploadImg" data-upload="dp_image" data-text="Upload Photo"></button>
                                            <input type="file" name="" id="" class="uploadFile" data-upload="dp_image">
                                        </div>
                                        <div class="noHats text-center">(Please upload your photo)</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                <div class="txtGrp">
                                    <label for="">First Name</label>
                                    <input type="text" name="fname" id="first_name" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                <div class="txtGrp">
                                    <label for="">Last Name</label>
                                    <input type="text" name="lname" id="last_name" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                <div class="txtGrp">
                                    <label for="">Phone Number</label>
                                    <input type="text" name="phone" id="phone" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                <div class="txtGrp">
                                    <label for="">Email Address</label>
                                    <input type="text" name="email" id="email" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                <div class="txtGrp pasDv">
                                    <label for="">Password</label>
                                    <input type="password" name="password" id="password" class="txtBox">
                                    <i class="icon-eye" id="eye"></i>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                <div class="txtGrp pasDv">
                                    <label for="">Confirm Password</label>
                                    <input type="password" name="cpassword" id="cpassword" class="txtBox">
                                    <i class="icon-eye" id="eye"></i>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                <div class="txtGrp">
                                    <label for="" class="move">Gallery Images</label>
                                    <button type="button" class="txtBox uploadImg" data-upload="gallery_files" data-text="Upload File"></button>
                                    <input type="file" name="" id="" class="uploadFile" data-upload="gallery_files">
                                </div>
                                <div class="upLoadBlk txtBox">
                                    <ul class="imgLst flex">
                                        <li>
                                            <div class="icon">
                                                <img src="<?= base_url() ?>assets/images/home-slide-02.jpg" alt="">
                                                <div class="crosBtn"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="<?= base_url() ?>assets/images/3.jpg" alt="">
                                                <div class="crosBtn"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="<?= base_url() ?>assets/images/portfolio-06.jpg" alt="">
                                                <div class="crosBtn"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="<?= base_url() ?>assets/images/iteach-texas-mobile-header.jpg" alt="">
                                                <div class="crosBtn"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="<?= base_url() ?>assets/images/portfolio-01.jpg" alt="">
                                                <div class="crosBtn"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                <div class="txtGrp">
                                    <label for="">Profile Bio</label>
                                    <textarea name="bio" id="bio" class="txtBox"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
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
                            </div>
                        </div>
                        <div class="bTn formBtn text-center">
                            <button type="submit" class="webBtn icoBtn"><img src="<?= base_url() ?>assets/images/icon-pencil.svg" alt=""> Sign up</button>
                        </div>
                    </form>
                    <div class="haveAccount text-center">
                        <span>Already have an account?</span>
                        <a href="<?= base_url() ?>signin">Sign in</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- signup -->


        <script type="text/javascript" src="<?= base_url('assets/js/custom-validations.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/js/main.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/js/custom.js') ?>"></script>
        <script type="text/javascript">
            $(function() {
                $('.imgLst').sortable();
                // $('#sortable').disableSelection();
            });
        </script>
    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>