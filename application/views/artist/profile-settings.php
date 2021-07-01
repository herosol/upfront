<!doctype html>
<html>

<head>
    <title>Profile Settings — Upfront Worldwide Talent Agency</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-artist'); ?>
    <main formal dash>
        <?php $this->load->view('includes/sidebar-artist'); ?>


        <section id="setting">
            <div class="contain-fluid">
            <div class="alertMsg" style="display:none"></div>
                <form aaction="" method="post" id="frmModelProfileSettings" class="frmAjax">
                    <div class="blk">
                        <div class="upLoadCover" id="cover_preview" style="background-image: url('');">
                            <div class="text-center">
                                <button type="button" class="webBtn smBtn uploadImg" data-upload="cover_image" data-text="Change Cover"></button>
                                <input type="file" name="cover_photo" id="cover_photo" class="uploadFile" data-upload="cover_image">
                            </div>
                        </div>
                        <div class="upLoadDp">
                            <div class="ico">
                                <img src="<?= get_site_image_src("members", $mem_data->mem_image, ''); ?>" alt="" id="uploadDpPreview">
                            </div>
                            <div class="text-center">
                                <button type="button" class="webBtn smBtn uploadImg" data-upload="dp_image" data-text="Change Photo"></button>
                                <input type="file" name="dp_image" id="dp_image" class="uploadFile" data-upload="dp_image" onchange="PreviewImage();">
                            </div>
                            <div class="noHats text-center">(Please upload your photo)</div>
                        </div>
                        <hr>
                        <h5>Personal Information</h5>
                        <div class="row formRow">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="">First Name</label>
                                    <input type="text" name="user_fname" id="user_fname" value="<?= $mem_data->user_fname ?>" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="">Last Name</label>
                                    <input type="text" name="user_lname" id="user_lname" value="<?= $mem_data->user_lname ?>" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="">Phone Number</label>
                                    <input type="text" name="mem_phone" id="mem_phone" value="<?= $mem_data->mem_phone ?>" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="">Email Address</label>
                                    <input type="text" id="user_email" name="user_email" value="<?= $mem_data->user_email ?>" class="txtBox" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="">Date of birth</label>
                                    <input type="text" name="mem_dob" id="mem_dob" class="txtBox datepicker">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="mem_sex" class="move">Gender</label>
                                    <select name="mem_sex" id="mem_sex" class="txtBox">
                                        <option value="">Select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>Address Information</h5>
                        <div class="row formRow">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="mem_country" class="move">Country</label>
                                    <select name="mem_country" id="mem_country" class="txtBox">
                                            <option value="">Select</option>
                                            <?php foreach($countries as $country): ?>
                                                <option value="<?=$country->id?>"><?=$country->name?></option>
                                            <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="mem_state" class="move">State</label>
                                    <select name="mem_state" id="mem_state" class="txtBox">
                                        <option value="">Select</option>
                                        <option value="AL">Alabama - AL</option>
                                        <option value="AK">Alaska - AK</option>
                                        <option value="AS">American Samoa - AS</option>
                                        <option value="AZ">Arizona - AZ</option>
                                        <option value="AR">Arkansas - AR</option>
                                        <option value="CA">California - CA</option>
                                        <option value="CO">Colorado - CO</option>
                                        <option value="CT">Connecticut - CT</option>
                                        <option value="DE">Delaware - DE</option>
                                        <option value="DC">District of Columbia - DC</option>
                                        <option value="FM">Federated States of Micronesia - FM</option>
                                        <option value="FL">Florida - FL</option>
                                        <option value="GA">Georgia - GA</option>
                                        <option value="GU">Guam - GU</option>
                                        <option value="HI">Hawaii - HI</option>
                                        <option value="ID">Idaho - ID</option>
                                        <option value="IL">Illinois - IL</option>
                                        <option value="IN">Indiana - IN</option>
                                        <option value="IA">Iowa - IA</option>
                                        <option value="KS">Kansas - KS</option>
                                        <option value="KY">Kentucky - KY</option>
                                        <option value="LA">Louisiana - LA</option>
                                        <option value="ME">Maine - ME</option>
                                        <option value="MH">Marshall Islands - MH</option>
                                        <option value="MD">Maryland - MD</option>
                                        <option value="MA">Massachusetts - MA</option>
                                        <option value="MI">Michigan - MI</option>
                                        <option value="MN">Minnesota - MN</option>
                                        <option value="MS">Mississippi - MS</option>
                                        <option value="MO">Missouri - MO</option>
                                        <option value="MT">Montana - MT</option>
                                        <option value="NE">Nebraska - NE</option>
                                        <option value="NV">Nevada - NV</option>
                                        <option value="NH">New Hampshire - NH</option>
                                        <option value="NJ">New Jersey - NJ</option>
                                        <option value="NM">New Mexico - NM</option>
                                        <option value="NY">New York - NY</option>
                                        <option value="NC">North Carolina - NC</option>
                                        <option value="ND">North Dakota - ND</option>
                                        <option value="MP">Northern Mariana Islands - MP</option>
                                        <option value="OH">Ohio - OH</option>
                                        <option value="OK">Oklahoma - OK</option>
                                        <option value="OR">Oregon - OR</option>
                                        <option value="PW">Palau - PW</option>
                                        <option value="PA">Pennsylvania - PA</option>
                                        <option value="PR">Puerto Rico - PR</option>
                                        <option value="RI">Rhode Island - RI</option>
                                        <option value="SC">South Carolina - SC</option>
                                        <option value="SD">South Dakota - SD</option>
                                        <option value="TN">Tennessee - TN</option>
                                        <option value="TX">Texas - TX</option>
                                        <option value="UT">Utah - UT</option>
                                        <option value="VT">Vermont - VT</option>
                                        <option value="VI">Virgin Islands - VI</option>
                                        <option value="VA">Virginia - VA</option>
                                        <option value="WA">Washington - WA</option>
                                        <option value="WV">West Virginia - WV</option>
                                        <option value="WI">Wisconsin - WI</option>
                                        <option value="WY">Wyoming - WY</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="mem_city">City</label>
                                    <input type="text" name="mem_city" id="mem_city" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="mem_zip">Zip Code</label>
                                    <input type="text" id="mem_zip" name="mem_zip" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xx-8">
                                <div class="txtGrp">
                                    <label for="mem_address1">Address</label>
                                    <input type="text" id="mem_address1" name="mem_address1" class="txtBox">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>Profile Bio</h5>
                        <div class="row formRow">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                <div class="txtGrp">
                                    <label for="mem_about">Description</label>
                                    <textarea name="mem_about" id="mem_about" class="txtBox"><?= $mem_data->mem_about ?></textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>Rate</h5>
                        <div class="row formRow">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                <div class="txtGrp">
                                    <label for="mem_rate">Per Hour Rate</label>
                                    <input type="text" id="mem_rate" name="mem_rate" class="txtBox">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blk">
                        <h5>Skills</h5>
                        <div class="txtGrp">
                            <link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/tagify.css') ?>">
                            <script type="text/javascript" src="<?= base_url('assets/js/tagify.js') ?>"></script>
                            <script type="text/javascript">
                                $(function() {
                                    $('[name="skills"]').tagify({
                                        // focusableskills: false,
                                    });
                                });
                            </script>
                            <input name="skills" id="skills" class="txtBox" placeholder="Type something here">
                        </div>
                        <hr>
                        <h5>Speaks</h5>
                        <div class="row formRow">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                <div class="row formRow">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xx-8">
                                        <div class="txtGrp">
                                            <label for="" class="move">Choose Language</label>
                                            <select name="" id="" class="txtBox">
                                                <option value="">Select</option>
                                                <option value="">English</option>
                                                <option value="">Italian</option>
                                                <option value="">Spanish</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                        <div class="txtGrp">
                                            <label for="" class="move">Level</label>
                                            <select name="" id="" class="txtBox">
                                                <option value="">Select</option>
                                                <option value="">Fluent</option>
                                                <option value="">Native</option>
                                                <option value="">Bilingual</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bTn formBtn">
                            <button type="button" class="webBtn labelBtn"><i class="fi-plus fi-2x"></i> Add New</button>
                        </div>
                    </div>
                    <div class="blk">
                        <h5>Intro Video</h5>
                        <div class="row formRow">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                <div class="txtGrp">
                                    <label for="" class="move">Intro Video</label>
                                    <button type="button" class="txtBox uploadImg" data-upload="intro_thumbnail" data-text="Intro Thumbnail"></button>
                                    <input type="file" name="" id="" class="uploadFile" data-upload="intro_thumbnail">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>Gallery Images</h5>
                        <div class="row formRow">
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
                        </div>
                    </div>
                    <div class="blk">
                        <h5>Appearance</h5>
                        <div class="row formRow">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="eye_color" class="move">Eye Color</label>
                                    <select name="eye_color" id="eye_color" class="txtBox">
                                        <option value="">Select</option>
                                        <option value="">Green</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="skin_color" class="move">Skin Color</label>
                                    <select name="skin_color" id="skin_color" class="txtBox">
                                        <option value="">Select</option>
                                        <option value="">White</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="hair_color" class="move">Hair Color</label>
                                    <select name="hair_color" id="hair_color" class="txtBox">
                                        <option value="">Select</option>
                                        <option value="">Brown</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="hair_length">Hair Length</label>
                                    <input type="text" id="hair_length" name="hair_length" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="shoe_size" class="move">Shoe Size</label>
                                    <select name="shoe_size" id="shoe_size" class="txtBox">
                                        <option value="">Select</option>
                                        <option value="">9.5</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="height">Height</label>
                                    <input type="text" id="height" name="height" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="weight">Weight</label>
                                    <input type="text" id="weight" name="weight" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="chest_bust" class="move">Chest/Bust</label>
                                    <select name="chest_bust" id="chest_bust" class="txtBox">
                                        <option value="">Select</option>
                                        <option value="">35</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="cup" class="move">Cup</label>
                                    <select name="cup" id="cup" class="txtBox">
                                        <option value="">Select</option>
                                        <option value="">B</option>
                                        <option value="">C</option>
                                        <option value="">D</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="waist">Waist</label>
                                    <input type="text" id="waist" name="waist" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="hip_inseam">Hip/Inseam</label>
                                    <input type="text" id="hip_inseam" name="hip_inseam" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="ethnicity" class="move">Ethnicity</label>
                                    <select name="ethnicity" id="ethnicity" class="txtBox">
                                        <option value="">Select</option>
                                        <option value="">English</option>
                                        <option value="">Italian</option>
                                        <option value="">Spanish</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bTn formBtn text-center">
                        <button type="submit" class="webBtn">Save</button>
                    </div>
                </form>
                <div class="br"></div>
                <div class="blk">
                    <div class="_header">
                        <h4>Change Password</h4>
                        <div class="info">
                            <strong><em>Strong Password</em></strong>
                            <div class="infoIn ckEditor">
                                <p>Your password must contain the following:</p>
                                <ol>
                                    <li>At least 8 characters in length (a strong password has at least 14 characters)</li>
                                    <li>At least 1 letter and at least 1 number or symbol</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <form action="" method="post">
                        <div class="row formRow">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp pasDv">
                                    <label for="">Current password</label>
                                    <input type="password" name="" id="" class="txtBox">
                                    <i class="icon-eye" id="eye"></i>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp pasDv">
                                    <label for="">New password</label>
                                    <input type="password" name="" id="" class="txtBox">
                                    <i class="icon-eye" id="eye"></i>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp pasDv">
                                    <label for="">Confirm new password</label>
                                    <input type="password" name="" id="" class="txtBox">
                                    <i class="icon-eye" id="eye"></i>
                                </div>
                            </div>
                        </div>
                        <div class="bTn formBtn text-center">
                            <button type="submit" class="webBtn">Change</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- setting -->
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

                oFReader.onload = function(oFREvent) {
                    document.getElementById("uploadDpPreview").src = oFREvent.target.result;
                };
            };

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#cover_preview').attr('style', `background-image: url('${e.target.result}');`);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#cover_photo").change(function() {
                readURL(this);
            });
        </script>
    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>