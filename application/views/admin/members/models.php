<?php if ($this->uri->segment(3) == 'manage_model'): ?>
    <?= showMsg(); ?>
    <?= getBredcrum(ADMIN, array('#' => 'Add/Update Model')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-users"></i> Add/Update <strong>Model</strong></h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="<?= site_url(ADMIN . '/members/models'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>
        </div>
    </div>
    <div>
        <hr>
        <div class="row col-md-12">
            <form action=""  role="form" class="form-horizontal" method="post" enctype="multipart/form-data">

                <div class="col-md-6">
                    <h3><i class="fa fa-bars"></i> Profile Detail</h3>
                    <hr class="hr-short">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> First Name <span class="symbol required">*</span></label>
                            <input type="text" name="user_fname" value="<?php if (isset($row->user_fname)) echo $row->user_fname; ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Last Name <span class="symbol required">*</span></label>
                            <input type="text" name="user_lname" value="<?php if (isset($row->user_lname)) echo $row->user_lname; ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Phone Number <span class="symbol required">*</span></label>
                            <input type="text" name="mem_phone" value="<?php if (isset($row->mem_phone)) echo $row->mem_phone; ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Date Of Birth <span class="symbol required">*</span></label>
                            <input type="text" name="mem_dob" value="<?php if (isset($row->mem_dob)) echo $row->mem_dob; ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                        <label class="control-label"> Gender <span class="symbol required">*</span></label>
                            <select name="mem_sex" id="mem_sex" class="form-control">
                                <option value="">Select</option>
                                <?php foreach (genders() as $gender) : ?>
                                    <option value="<?= $gender ?>" <?= $row->mem_sex == $gender ? 'selected' : '' ?>><?= $gender ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <h3><i class="fa fa-bars"></i> Address Information</h3>
                    <hr class="hr-short">
                    <div class="form-group">
                        <div class="col-md-12">
                        <label class="control-label"> Country <span class="symbol required">*</span></label>
                            <select name="mem_country" id="mem_country" class="form-control">
                                <option value="">Select</option>
                                <?php foreach (countries() as $country) : ?>
                                    <option value="<?= $country->id ?>" <?= $row->mem_country_id == $country->id ? 'selected' : '' ?>><?= $country->name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                        <label class="control-label"> State <span class="symbol required">*</span></label>
                            <select name="mem_state" id="mem_state" class="form-control">
                                <option value="">Select</option>
                                <?php foreach (states_by_country($row->mem_country_id) as $state) : ?>
                                    <option value="<?= $state->id ?>" <?= $mem_data->mem_state == $state->id ? 'selected' : '' ?>><?= $state->name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> City <span class="symbol required">*</span></label>
                            <input type="text" name="mem_city" value="<?php if (isset($row->mem_city)) echo $row->mem_city; ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Zip <span class="symbol required">*</span></label>
                            <input type="text" name="mem_zip" value="<?php if (isset($row->mem_zip)) echo $row->mem_zip; ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Address <span class="symbol required">*</span></label>
                            <input type="text" name="mem_address1" value="<?php if (isset($row->mem_address1)) echo $row->mem_address1; ?>" class="form-control" required>
                        </div>
                    </div>
                    <h3><i class="fa fa-bars"></i> Profile Bio</h3>
                    <hr class="hr-short">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> About <span class="symbol required">*</span></label>
                            <textarea  name="mem_about" id="mem_about" rows="8" class="form-control ckeditor" required><?php if (isset($row->mem_about)) echo $row->mem_about; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Rate <span class="symbol required">*</span></label>
                            <input type="text" name="mem_rate" value="<?php if (isset($row->mem_rate)) echo $row->mem_rate; ?>" class="form-control" required>
                        </div>
                    </div>
                    <h3><i class="fa fa-bars"></i> Skills</h3>
                    <hr class="hr-short">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input name="skills" id="skills" class="form-control" value="<?= $row->mem_skills ?>" placeholder="Type something here">
                        </div>
                    </div>
                    <h3><i class="fa fa-bars"></i> Appearence</h3>
                    <hr class="hr-short">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Body Type <span class="symbol required">*</span></label>
                            <select name="body_type" id="body_type" class="form-control">
                                <option value="">Select</option>
                                <?php foreach (body_types() as $color) : ?>
                                    <option value="<?= $color ?>" <?= $appearence->body_type == $color ? 'selected' : '' ?>><?= $color ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Eye Color <span class="symbol required">*</span></label>
                            <select name="eye_color" id="eye_color" class="form-control">
                                <option value="">Select</option>
                                <?php foreach (eye_colors() as $color) : ?>
                                    <option value="<?= $color ?>" <?= $appearence->eye_color == $color ? 'selected' : '' ?>><?= $color ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Skin Color <span class="symbol required">*</span></label>
                            <select name="skin_color" id="skin_color" class="form-control">
                                <option value="">Select</option>
                                <?php foreach (skin_colors() as $color) : ?>
                                    <option value="<?= $color ?>" <?= $appearence->skin_color == $color ? 'selected' : '' ?>><?= $color ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Hair Color <span class="symbol required">*</span></label>
                            <select name="hair_color" id="hair_color" class="form-control">
                                <option value="">Select</option>
                                <?php foreach (hair_colors() as $color) : ?>
                                    <option value="<?= $color ?>" <?= $appearence->hair_color == $color ? 'selected' : '' ?>><?= $color ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Hair Length <span class="symbol required">*</span></label>
                            <input type="text" id="hair_length" name="hair_length" value="<?= $appearence->hair_length ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Shoe Size <span class="symbol required">*</span></label>
                            <select name="shoe_size" id="shoe_size" class="form-control">
                                <option value="">Select</option>
                                <?php foreach (show_size() as $color) : ?>
                                    <option value="<?= $color ?>" <?= $appearence->shoe_size == $color ? 'selected' : '' ?>><?= $color ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Height <span class="symbol required">*</span></label>
                            <input type="text" id="height" name="height" value="<?= $appearence->height ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Weight <span class="symbol required">*</span></label>
                            <input type="text" id="weight" name="weight" value="<?= $appearence->weight ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> About <span class="symbol required">*</span></label>
                            <select name="chest_bust" id="chest_bust" class="form-control">
                                <option value="">Select</option>
                                <?php foreach (chest_bust() as $color) : ?>
                                    <option value="<?= $color ?>" <?= $appearence->chest_bust == $color ? 'selected' : '' ?>><?= $color ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Cup <span class="symbol required">*</span></label>
                            <select name="cup" id="cup" class="form-control">
                                <option value="">Select</option>
                                <?php foreach (cup() as $color) : ?>
                                    <option value="<?= $color ?>" <?= $appearence->cup == $color ? 'selected' : '' ?>><?= $color ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Waist <span class="symbol required">*</span></label>
                            <input type="text" id="waist" name="waist" value="<?= $appearence->waist ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Hip/Inseam <span class="symbol required">*</span></label>
                            <input type="text" id="hip_inseam" name="hip_inseam" value="<?= $appearence->hip_inseam ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Ethnicity <span class="symbol required">*</span></label>
                            <select name="ethnicity" id="ethnicity" class="form-control">
                                <option value="">Select</option>
                                <?php foreach (ethnicity() as $color) : ?>
                                    <option value="<?= $color ?>" <?= $appearence->ethnicity == $color ? 'selected' : '' ?>><?= $color ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Jacket Size <span class="symbol required">*</span></label>
                            <input type="text" id="jacket_size" name="jacket_size" value="<?= $appearence->jacket_size ?>" class="form-control">
                        </div>
                    </div>
                </div>    

                <div class="col-md-6">
                    <div class="col-md-12">
                        <h3><i class="fa fa-bars"></i> Account Detail</h3>
                        <hr class="hr-short">
                        <?php if (isset($row->user_fname)):?>
                            <div style="font-size: 13px"><b>Member Since:</b> <small> <?= format_date($row->mem_date); ?></small></div>
                            <div style="font-size: 13px"><b>Last Login:</b> <small> <?= format_date($row->user_last_login,'M d Y h:i:s A'); ?></small></div>
                        <?php endif?>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label"> Status</label>
                                <select name="user_status" id="user_status" class="form-control">
                                    <option value="0" <?php
                                    if (isset($row->user_status) && '0' == $row->user_status) {
                                        echo 'selected';
                                    }
                                    ?>>InActive</option>
                                    <option value="1" <?php
                                    if (isset($row->user_status) && '1' == $row->user_status) {
                                        echo 'selected';
                                    }
                                    ?>>Active</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label"> Verified</label>
                                <select name="mem_verified" id="mem_verified" class="form-control">
                                    <option value="0" <?php
                                    if (isset($row->mem_verified) && '0' == $row->mem_verified) {
                                        echo 'selected';
                                    }
                                    ?>>No</option>
                                    <option value="1" <?php
                                    if (isset($row->mem_verified) && '1' == $row->mem_verified) {
                                        echo 'selected';
                                    }
                                    ?>>Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h3><i class="fa fa-lock"></i> Login Credentials</h3>
                        <hr class="hr-short">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label class="control-label">Email <span class="symbol required">*</span></label>
                                <input type="text" name="user_email" value="<?php if (isset($row->user_email)) echo $row->user_email; ?>"  class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label class="control-label">Password </label>
                                <input type="text"  name="user_pswd" value="<?php  if (isset($row->user_pswd)) echo doDecode($row->user_pswd);  ?>" class="form-control" autocomplete="off" placeholder="password" <?php  if (!empty($row->mem_pswd)) echo 'required';  ?> >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h3><i class="fa fa-bars"></i> Picture And Gallery Images</h3>
                        <hr class="hr-short">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="panel panel-primary" data-collapsed="0">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            Profile Image
                                        </div>
                                        <div class="panel-options">
                                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                <img src="<?= get_site_image_src("members", $row->mem_image, ''); ?>" alt="--">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="dp_image" accept="image/*" <?php if(empty($row->mem_image)){echo 'required=""';}?>>
                                                </span>
                                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="panel panel-primary" data-collapsed="0">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            Cover Image
                                        </div>
                                        <div class="panel-options">
                                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                <img src="<?= get_site_image_src("members", $row->mem_cover_image, ''); ?>" alt="--">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="cover_photo" accept="image/*" <?php if(empty($row->mem_image)){echo 'required=""';}?>>
                                                </span>
                                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <h3><i class="fa fa-lock"></i> Intro Video</h3>
                        <hr class="hr-short">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label class="control-label">Intro Video <span class="symbol required">*</span></label>
                                <input type="file" name="intro_video" id="intro_video">
                            </div>
                            <br>
                            <div class="col-md-12">
                                <div class="vidBlk">
                                    <video controls="">
                                        <source src="<?= get_site_image_src("members", $mem_data->mem_video, ''); ?>" alt="" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h3><i class="fa fa-lock"></i> Gallery Images</h3>
                        <hr class="hr-short">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="file" name="gallery_images[]" id="intro_video" multiple>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <div class="upLoadBlk txtBox">
                                    <ul class="imgLst flex">
                                        <?php foreach ($gallery_images as $image) : ?>
                                            <li>
                                                <div class="icon">
                                                    <img src="<?= get_site_image_src("members", $image->image, ''); ?>" alt="" style="height: 200px">
                                                    <div class="crosBtn" data-id="<?= $image->id ?>" onclick="deleteGalleryImage(this)"></div>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <h3><i class="fa fa-lock"></i> Languages</h3>
                        <hr class="hr-short">
                        <?php
                        if (count($mem_languages) > 0) :
                            foreach ($mem_languages as $key => $value) :
                        ?>
                            <div class="form-group" id="languages_box">
                                <div class="col-md-<?=$key == '0' ? '6' : '5';?>">
                                <label class="control-label">Langauge</label>
                                <select name="languages[<?= $key ?>]" id="languages<?= $key ?>" class="form-control">
                                    <option value="">Select</option>
                                    <?php foreach (languages() as $language) : ?>
                                        <option value="<?= $language->id ?>" <?= $value->language_id == $language->id ? 'selected' : '' ?>><?= $language->name ?></option>
                                    <?php endforeach; ?>
                                </select>
                                </div>
                                <div class="col-md-<?=$key == '0' ? '6' : '5';?>">
                                    <label class="control-label">Langauge Level</label>
                                    <select name="language_level[<?= $key ?>]" id="language_level<?= $key ?>" class="form-control">
                                        <option value="">Select</option>
                                        <?php foreach (language_level() as $level) : ?>
                                            <option value="<?= $level ?>" <?= $value->language_level == $level ? 'selected' : '' ?>><?= $level ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <?php if($key != '0'): ?>
                                    <button type="button" class="rmvBtn" data-row-no="<?=$key?>" onclick="delete_language_row(this)">Delete</button>
                                <?php endif; ?>
                            </div>
                    <?php
                        endforeach;
                    else:
                    ?>
                        <div class="form-group" id="languages_box">
                            <div class="col-md-6">
                                <label class="control-label">Langauge</label>
                                <select name="languages[0]" id="languages0" class="form-control">
                                    <option value="">Select</option>
                                    <?php foreach (languages() as $language) : ?>
                                        <option value="<?= $language->id ?>"><?= $language->name ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                 <label class="control-label">Langauge Level</label>
                                <select name="language_level[0]" id="language_level0" class="form-control">
                                    <option value="">Select</option>
                                    <?php foreach (language_level() as $level) : ?>
                                        <option value="<?= $level ?>"><?= $level ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    <?php
                    endif;
                    ?>
                        <div class="bTn formBtn">
                            <button type="button" class="webBtn labelBtn" onclick="addLanguageNewRow()"><i class="fi-plus fi-2x"></i> Add New</button>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-md-12">                
                        <hr class="hr-short">
                        <div class="form-group text-right">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-save"></i> Save</button>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
            <input type="file" id="uploadFile" name="uploadFile" accept="image/*" class="uploadFile" data-file="">
            <div class="clearfix"></div>
        </div>
        <?php else: ?>
            <?= showMsg(); ?>
            <?= getBredcrum(ADMIN, array('#' => 'Manage Models')); ?>
            <div class="row margin-bottom-10">
                <div class="col-md-6">
                    <h2 class="no-margin"><i class="entypo-users"></i> Manage <strong>Models</strong></h2>
                </div>
                <div class="col-md-6 text-right">
                    <a href="<?= site_url(ADMIN . '/members/manage_model'); ?>" class="btn btn-lg btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
                </div>
            </div>
            <table class="table table-bordered datatable" id="table-1">
                <thead>
                    <tr>
                        <th width="5%" class="text-center">Sr#</th>
                        <th width="60px">Photo</th>
                        <th width="20%">Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Last Login</th>
                        <th width="8%" class="text-center">Verified</th>
                        <th width="8%" class="text-center">Status</th>
                        <th width="12%" class="text-center">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($rows) > 0): $count = 0; ?>
                        <?php foreach ($rows as $row): ?>
                            <tr class="odd gradeX">
                                <td class="text-center"><?= ++$count; ?></td>
                                <td class="text-center">
                                    <div class="icoRound">
                                        <img src = "<?= get_site_image_src("members", $row->mem_image, ''); ?>" height = "60">
                                    </div>
                                </td>
                                <td><b><?= $row->user_fname . ' ' . $row->user_lname; ?></b></td>
                                <td><?= $row->user_email; ?></td>
                                <td><?= $row->mem_phone; ?></td>
                                <td><?= format_date($row->user_last_login,'M d Y h:i:s A'); ?></td>
                                <td class="text-center"><?= verified_status($row->mem_verified); ?></td>
                                <td class="text-center"><?= getStatus($row->user_status); ?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Action <span class="caret"></span></button>
                                        <ul class="dropdown-menu dropdown-primary" role="menu">
                                            <?php if ($row->user_status == '0'): ?>
                                                <li><a href="<?= site_url(ADMIN); ?>/members/active_model/<?= $row->user_id; ?>">Active</a></li>
                                                <?php else: ?>
                                                    <li><a href="<?= site_url(ADMIN); ?>/members/inactive_model/<?= $row->user_id; ?>">Inactive</a></li>
                                                <?php endif; ?>

                                                <li><a href="<?= site_url(ADMIN); ?>/members/manage_model/<?= $row->user_id; ?>">Edit</a></li>
                                                <?php if(access(10)):?>
                                                    <li><a href="<?= site_url(ADMIN); ?>/members/delete_model/<?= $row->user_id; ?>" onclick="return confirm('Are you sure?');">Delete</a></li>
                                                <?php endif?>
                                        <li class="divider"></li>
                                        <li><a href="#" >Payment Methods</a></li>
                                    </ul>
                                </div>  
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <?php endif; ?>
        <!-- tagify -->
        <link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/tagify.css') ?>">
        <script type="text/javascript" src="<?= base_url('assets/js/tagify.js') ?>"></script>
        <script type="text/javascript">
            var number = '<?= count($mem_languages) == '0' ? '1' : count($mem_languages); ?>';
            const addLanguageNewRow = () => {
                jQuery.ajax({
                    url: base_url + 'account/new_langugae_row',
                    data: {
                        'number': number
                    },
                    dataType: 'JSON',
                    method: 'POST',
                    success: function(rs) {
                        number++;
                        jQuery('#languages_box').append(rs.html);
                    },
                    complete: function() {

                    }
                })
            }
        </script>