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
                    <form action="" method="post" id="frmModelSignup" class="frmAjax">
                        <div class="alertMsg" style="display:none"></div>
                        <h3><?= $site_content['heading'] ?></h3>
                        <p><?= $site_content['short_desc'] ?></p>
                        <div class="formRow row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                <div class="txtGrp">
                                    <div class="upLoadDp">
                                        <div class="ico">
                                            <img src="<?=  get_site_image_src("members", 'user.png', ''); ?>" id="uploadDpPreview">
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="webBtn smBtn uploadImg" data-upload="dp_image" data-text="Upload Photo"></button>
                                            <input type="file" name="dp_image" id="dp_image" class="uploadFile" data-upload="dp_image" onchange="PreviewImage();" >
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
                                    <input type="file" name="gallery_images[]" id="gallery_images" class="uploadFile" data-upload="gallery_files" multiple>
                                </div>
                                <div class="upLoadBlk txtBox">
                                    <ul class="imgLst flex">
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
        <script type="text/javascript" src="<?= base_url('assets/js/custom.js') ?>"></script>
        <script type="text/javascript">
            $(function() {
                $('.imgLst').sortable();
                // $('#sortable').disableSelection();
            });

            function PreviewImage() {
                var oFReader = new FileReader();
                oFReader.readAsDataURL(document.getElementById("dp_image").files[0]);

                oFReader.onload = function (oFREvent) {
                    document.getElementById("uploadDpPreview").src = oFREvent.target.result;
                };
            };

    $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) 
            {
                let html = '';
                var reader = new FileReader();

                reader.onload = function(event) 
                {
                    html =  `<li class="previewImage">
                                    <div class="icon">
                                        <img src="${event.target.result}" alt="">
                                        <div class="crosBtn"></div>
                                    </div>
                                </li>`;
                    $(placeToInsertImagePreview).append(html);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#gallery_images').on('change', function() {
        imagesPreview(this, 'ul.imgLst');
        });
    });

        $(document).on("click", ".crosBtn", function() 
        {
            $(this).parent().remove();
            $('.imgLst').sortable();
        });

        </script>
    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>