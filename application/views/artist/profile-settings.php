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
                <form action="" method="post" id="frmModelProfileSettings" class="frmAjax">
                    <div class="alertMsg" style="display:none"></div>
                    <div class="blk">
                        <?php if ($this->session->user_type == 'model') : ?>
                            <div class="upLoadCover" id="cover_preview" style="background-image: url('<?= get_site_image_src("members", $mem_data->mem_cover_image, ''); ?>');">
                                <div class="text-center">
                                    <button type="button" class="webBtn smBtn uploadImg" data-upload="cover_image" data-text="Change Cover"></button>
                                    <input type="file" name="cover_photo" id="cover_photo" class="uploadFile" data-upload="cover_image">
                                </div>
                            </div>
                        <?php endif; ?>
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
                            <?php if ($this->session->user_type == 'model') : ?>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="">Phone Number</label>
                                        <input type="text" name="mem_phone" id="mem_phone" value="<?= $mem_data->mem_phone ?>" class="txtBox">
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="">Email Address</label>
                                    <input type="text" id="user_email" name="user_email" value="<?= $mem_data->user_email ?>" class="txtBox" readonly>
                                </div>
                            </div>
                            <?php if ($this->session->user_type == 'model') : ?>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="">Date of birth</label>
                                        <input type="text" name="mem_dob" id="mem_dob" value="<?= dp_format_date($mem_data->mem_dob) ?>" class="txtBox datepicker">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="mem_sex" class="move">Gender</label>
                                        <select name="mem_sex" id="mem_sex" class="txtBox">
                                            <option value="">Select</option>
                                            <?php foreach (genders() as $gender) : ?>
                                                <option value="<?= $gender ?>" <?= $mem_data->mem_sex == $gender ? 'selected' : '' ?>><?= $gender ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <hr>
                        <?php if ($this->session->user_type == 'model') { ?>
                            <h5>Address Information</h5>
                            <div class="row formRow">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="mem_country" class="move">Country</label>
                                        <select name="mem_country" id="mem_country" class="txtBox" onchange="fetchStates(this.value)">
                                            <option value="">Select</option>
                                            <?php foreach ($countries as $country) : ?>
                                                <option value="<?= $country->id ?>" <?= $mem_data->mem_country_id == $country->id ? 'selected' : '' ?>><?= $country->name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="mem_state" class="move">State</label>
                                        <select name="mem_state" id="mem_state" class="txtBox">
                                            <option value="">Select</option>
                                            <?php foreach (states_by_country($mem_data->mem_country_id) as $state) : ?>
                                                <option value="<?= $state->id ?>" <?= $mem_data->mem_state == $state->id ? 'selected' : '' ?>><?= $state->name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="mem_city">City</label>
                                        <input type="text" name="mem_city" id="mem_city" value="<?= $mem_data->mem_city ?>" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="mem_zip">Zip Code</label>
                                        <input type="text" id="mem_zip" name="mem_zip" value="<?= $mem_data->mem_zip ?>" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xx-8">
                                    <div class="txtGrp">
                                        <label for="mem_address1">Address</label>
                                        <input type="text" id="mem_address1" name="mem_address1" value="<?= $mem_data->mem_address1 ?>" class="txtBox">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h5>Profile Bio</h5>
                            <div class="row formRow">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                    <div class="txtGrp">
                                        <!-- <label for="mem_about">Description</label> -->
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
                                        <input type="text" id="mem_rate" name="mem_rate" value="<?= $mem_data->mem_rate ?>" class="txtBox">
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="blk">
                        <h5>Skills</h5>
                        <div class="txtGrp">
                            <label for="" class="move">Type Some Tags</label>
                            <input type="text" name="skills" id="skills" class="txtBox" value="<?= $mem_data->mem_skills ?>">
                        </div>
                        <hr>
                        <h5>Speaks</h5>
                        <div class="row formRow" id="languages_box">
                            <?php
                            if (count($mem_languages) > 0) :
                                foreach ($mem_languages as $key => $value) :
                            ?>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6" id="row_no_<?= $key ?>">
                                        <div class="flexBlk">
                                            <div class="row formRow">
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xx-8">
                                                    <div class="txtGrp">
                                                        <label for="languages" class="move">Choose Language</label>
                                                        <select name="languages[<?= $key ?>]" id="languages" class="txtBox">
                                                            <option value="">Select</option>
                                                            <?php foreach ($languages as $language) : ?>
                                                                <option value="<?= $language->id ?>" <?= $value['language_id'] == $language->id ? 'selected' : '' ?>><?= $language->name ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                                    <div class="txtGrp">
                                                        <label for="language_level" class="move">Level</label>
                                                        <select name="language_level[<?= $key ?>]" id="language_level" class="txtBox">
                                                            <option value="">Select</option>
                                                            <?php foreach (language_level() as $level) : ?>
                                                                <option value="<?= $level ?>" <?= $value['language_level'] == $level ? 'selected' : '' ?>><?= $level ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if ($key != '0') : ?>
                                                <button type="button" class="rmvBtn" data-row-no="<?= $key ?>" onclick="delete_language_row(this)"></button>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php
                                endforeach;
                            else :
                                ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="row formRow">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xx-8">
                                            <div class="txtGrp">
                                                <label for="languages" class="move">Choose Language</label>
                                                <select name="languages[0]" id="languages" class="txtBox">
                                                    <option value="">Select</option>
                                                    <?php foreach ($languages as $language) : ?>
                                                        <option value="<?= $language->id ?>"><?= $language->name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                            <div class="txtGrp">
                                                <label for="language_level" class="move">Level</label>
                                                <select name="language_level[0]" id="language_level" class="txtBox">
                                                    <option value="">Select</option>
                                                    <option value="Fluent">Fluent</option>
                                                    <option value="Native">Native</option>
                                                    <option value="Bilingual">Bilingual</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="bTn formBtn">
                            <button type="button" class="webBtn labelBtn" onclick="addLanguageNewRow()"><i class="fi-plus fi-2x"></i> Add New</button>
                        </div>
                    </div>
                    <div class="blk">
                        <h5>Intro Video</h5>
                        <div class="row formRow">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                <div class="txtGrp">
                                    <label for="" class="move">Intro Video</label>
                                    <button type="button" class="txtBox uploadImg" data-upload="intro_thumbnail" data-text="Intro Video"></button>
                                    <input type="file" name="intro_video" id="intro_video" class="uploadFile" data-upload="intro_thumbnail">
                                </div>
                                <?php if (!empty($mem_data->mem_video)) : ?>
                                    <div class="vidBlk">
                                        <video controls="">
                                            <source src="<?= get_site_image_src("members", $mem_data->mem_video, ''); ?>" alt="" type="video/mp4">
                                        </video>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <hr>
                        <h5>Gallery Images</h5>
                        <input type="hidden" name="deleted_images" id="deleted_images">
                        <div class="row formRow">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                <div class="txtGrp">
                                    <label for="" class="move">Gallery Images</label>
                                    <button type="button" class="txtBox uploadImg" data-upload="gallery_files" data-text="Upload File"></button>
                                    <input type="file" name="gallery_images[]" id="gallery_images" class="uploadFile" data-upload="gallery_files" multiple>
                                </div>
                                <div class="upLoadBlk txtBox">
                                    <ul class="imgLst flex">
                                        <?php foreach ($gallery_images as $image) : ?>
                                            <li>
                                                <div class="icon">
                                                    <img src="<?= get_site_image_src("members", $image->image, ''); ?>" alt="">
                                                    <div class="crosBtn" data-id="<?= $image->id ?>" onclick="deleteGalleryImage(this)"></div>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
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
                                    <label for="body_type" class="move">Body Type</label>
                                    <select name="body_type" id="body_type" class="txtBox">
                                        <option value="">Select</option>
                                        <?php foreach (body_types() as $color) : ?>
                                            <option value="<?= $color ?>" <?= $appearence->body_type == $color ? 'selected' : '' ?>><?= $color ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="eye_color" class="move">Eye Color</label>
                                    <select name="eye_color" id="eye_color" class="txtBox">
                                        <option value="">Select</option>
                                        <?php foreach (eye_colors() as $color) : ?>
                                            <option value="<?= $color ?>" <?= $appearence->eye_color == $color ? 'selected' : '' ?>><?= $color ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="skin_color" class="move">Skin Color</label>
                                    <select name="skin_color" id="skin_color" class="txtBox">
                                        <option value="">Select</option>
                                        <?php foreach (skin_colors() as $color) : ?>
                                            <option value="<?= $color ?>" <?= $appearence->skin_color == $color ? 'selected' : '' ?>><?= $color ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="hair_color" class="move">Hair Color</label>
                                    <select name="hair_color" id="hair_color" class="txtBox">
                                        <option value="">Select</option>
                                        <?php foreach (hair_colors() as $color) : ?>
                                            <option value="<?= $color ?>" <?= $appearence->hair_color == $color ? 'selected' : '' ?>><?= $color ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="hair_length">Hair Length</label>
                                    <input type="text" id="hair_length" name="hair_length" value="<?= $appearence->hair_length ?>" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="shoe_size" class="move">Shoe Size</label>
                                    <select name="shoe_size" id="shoe_size" class="txtBox">
                                        <option value="">Select</option>
                                        <?php foreach (show_size() as $color) : ?>
                                            <option value="<?= $color ?>" <?= $appearence->shoe_size == $color ? 'selected' : '' ?>><?= $color ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="height">Height</label>
                                    <input type="text" id="height" name="height" value="<?= $appearence->height ?>" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="weight">Weight</label>
                                    <input type="text" id="weight" name="weight" value="<?= $appearence->weight ?>" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="chest_bust" class="move">Chest/Bust</label>
                                    <select name="chest_bust" id="chest_bust" class="txtBox">
                                        <option value="">Select</option>
                                        <?php foreach (chest_bust() as $color) : ?>
                                            <option value="<?= $color ?>" <?= $appearence->chest_bust == $color ? 'selected' : '' ?>><?= $color ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="cup" class="move">Cup</label>
                                    <select name="cup" id="cup" class="txtBox">
                                        <option value="">Select</option>
                                        <?php foreach (cup() as $color) : ?>
                                            <option value="<?= $color ?>" <?= $appearence->cup == $color ? 'selected' : '' ?>><?= $color ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="waist">Waist</label>
                                    <input type="text" id="waist" name="waist" value="<?= $appearence->waist ?>" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="hip_inseam">Hip/Inseam</label>
                                    <input type="text" id="hip_inseam" name="hip_inseam" value="<?= $appearence->hip_inseam ?>" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="ethnicity" class="move">Ethnicity</label>
                                    <select name="ethnicity" id="ethnicity" class="txtBox">
                                        <option value="">Select</option>
                                        <?php foreach (ethnicity() as $color) : ?>
                                            <option value="<?= $color ?>" <?= $appearence->ethnicity == $color ? 'selected' : '' ?>><?= $color ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="jacket_size">Jacket Size</label>
                                    <input type="text" id="jacket_size" name="jacket_size" value="<?= $appearence->jacket_size ?>" class="txtBox">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
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

                    <form action="<?= base_url() ?>account/change_pswd" method="post" autocomplete="off" class="frmAjax" id="chnagePasswordForm">
                        <div class="alertMsg" style="display:none"></div>
                        <div class="row formRow">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp pasDv">
                                    <label for="pswd">Current password</label>
                                    <input type="password" name="pswd" id="pswd" class="txtBox">
                                    <i class="icon-eye" id="eye"></i>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp pasDv">
                                    <label for="npswd">New password</label>
                                    <input type="password" name="npswd" id="password" class="txtBox">
                                    <i class="icon-eye" id="eye"></i>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp pasDv">
                                    <label for="cpswd">Confirm new password</label>
                                    <input type="password" name="cpswd" id="cpassword" class="txtBox">
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


        <!-- tagify -->
        <link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/tagify.min.css') ?>">
        <script type="text/javascript" src="<?= base_url('assets/js/tagify.min.js') ?>"></script>
        <script type="text/javascript">
            $(function() {
                var input = document.querySelector('input[name=skills]');
                new Tagify(input)
            });
        </script>
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

            $(function() {
                // Multiple images preview in browser
                var imagesPreview = function(input, placeToInsertImagePreview) {

                    if (input.files) {
                        var filesAmount = input.files.length;

                        for (i = 0; i < filesAmount; i++) {
                            let html = '';
                            var reader = new FileReader();

                            reader.onload = function(event) {
                                html = `<li class="previewImage">
                                            <div class="icon">
                                                <img src="${event.target.result}" alt="">
                                                <div class="crosBtn"></div>
                                            </div>
                                        </li>`;
                                $(placeToInsertImagePreview).prepend(html);
                            }

                            reader.readAsDataURL(input.files[i]);
                        }
                    }

                };

                $('#gallery_images').on('change', function() {
                    imagesPreview(this, 'ul.imgLst');
                });
            });

            const fetchStates = country_id => {
                $.ajax({
                    url: base_url + 'account/fetch_states',
                    data: {
                        'country_id': country_id
                    },
                    dataType: 'JSON',
                    method: 'POST',
                    success: function(rs) {
                        $('#mem_state').html(rs.html);
                    },
                    complete: function() {

                    }
                })
            }

            var number = '<?= count($mem_languages) == '0' ? '1' : count($mem_languages); ?>';
            const addLanguageNewRow = () => {
                $.ajax({
                    url: base_url + 'account/new_langugae_row',
                    data: {
                        'number': number
                    },
                    dataType: 'JSON',
                    method: 'POST',
                    success: function(rs) {
                        number++;
                        $('#languages_box').append(rs.html);
                    },
                    complete: function() {

                    }
                })
            }

            const deleteGalleryImage = btn => {
                let image_id = $(btn).data('id');
                let deleted_images = $('#deleted_images').val();

                if (deleted_images != '') {
                    $('#deleted_images').val(deleted_images + ',' + image_id);
                } else {
                    $('#deleted_images').val(image_id);
                }

                $(btn).parent().parent().remove();
            }

            const delete_language_row = btn => {
                let row_no = $(btn).data('row-no');
                $('#row_no_' + row_no).remove();
            }
        </script>
        <script type="text/javascript">
            ClassicEditor
                .create(document.querySelector('#mem_about'), {
                    toolbar: {
                        items: [
                            'bold',
                            'italic',
                            'link',
                            'bulletedList',
                            'numberedList'
                        ]
                    }
                })
                .then(editor => {
                    console.log('Editor was initialized', editor);
                })
                .catch(err => {
                    // console.error(err.stack);
                });
        </script>
    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>