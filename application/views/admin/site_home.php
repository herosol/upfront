<?php echo getBredcrum(ADMIN, array('#' => 'Home Page')); ?>
<?php echo showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Home Page</strong></h2>
    </div>
    <div class="col-md-6 text-right">
        <!--        <a href="<?php echo base_url('admin/services'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>-->
    </div>
</div>
<div>
    <hr>
    <div class="clearfix"></div>
    <div class="panel-body">
        <form role="form"  method="post" class="form-horizontal form-groups-bordered validate" novalidate="novalidate" enctype="multipart/form-data">
            <div class="form-group">
                <div class="col-md-12">
                    <label for="page_title" class="control-label"> Page Title <span class="symbol required">*</span></label>
                    <input type="text" name="page_title" id="page_title" value="<?= $row['page_title'] ?>" class="form-control" autofocus required>
                </div>
                <div class="col-md-6">
                    <label for="meta_description" class="control-label"> Meta Description <span class="symbol required">*</span></label>
                    <textarea name="meta_description" id="meta_description" class="form-control" rows="5" required=""><?= $row['meta_description'] ?></textarea>
                </div>
                <div class="col-md-6">
                    <label for="meta_keywords" class="control-label"> Meta Keywords <span class="symbol required">*</span></label>
                    <textarea name="meta_keywords" id="meta_keywords" class="form-control" rows="5" required=""><?= $row['meta_keywords'] ?></textarea>
                </div>
            </div>
            <h3> Main Banner</h3>
            <div class="form-group">
                <div class="col-md-4">
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Image
                            </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                    <img src="<?= !empty($row['image1']) ? base_url().UPLOAD_PATH.'pages/home/'.$row['image1'] : 'http://placehold.it/3000x1000' ?>" alt="--">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                <div>
                                    <span class="btn btn-white btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image1" accept="image/*" <?php if(empty($row['image1'])){echo 'required=""';}?>>
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="banner_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="banner_heading" value="<?= $row['banner_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="banner_detail" class="control-label"> Short Detail <span class="symbol required">*</span></label>
                            <textarea name="banner_detail" rows="2" class="form-control" ><?= $row['banner_detail'] ?></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Fascinates Section</h3>
            <div class="form-group">
                <div class="col-md-6">
                    <label for="fascinates_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                    <input type="text" name="fascinates_heading" value="<?= $row['fascinates_heading'] ?>" class="form-control" required>
                </div>
            </div>

            <h3>Featured Model By Category</h3>
            <div class="form-group">
                <div class="col-md-6">
                    <label for="featured_model_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                    <input type="text" name="featured_model_heading" value="<?= $row['featured_model_heading'] ?>" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="featured_model_detail" class="control-label"> Short Description <span class="symbol required">*</span></label>
                    <textarea name="featured_model_detail" id="featured_model_detail" class="form-control" rows="2" required=""><?= $row['featured_model_detail'] ?></textarea>
                </div>
            </div>

            <h3>Star Viewing Section</h3>
            <div class="form-group">
                <div class="col-md-6">
                    <label for="star_viewing_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                    <input type="text" name="star_viewing_heading" value="<?= $row['star_viewing_heading'] ?>" class="form-control" required>
                </div>
            </div>

            <h3>instant Help Section</h3>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="instant_help_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="instant_help_heading" value="<?= $row['instant_help_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="instant_help_short_desc" class="control-label"> Short Description <span class="symbol required">*</span></label>
                            <textarea name="instant_help_short_desc" id="instant_help_short_desc" rows="6" class="form-control" required=""><?= $row['instant_help_short_desc'] ?></textarea>
                        </div>
                    </div>
                </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="panel panel-primary" data-collapsed="0">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            Image
                                        </div>
                                        <div class="panel-options">
                                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                <img src="<?= get_site_image_src("pages/home/", $row['instant_help_image'])?>" alt="--">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="instant_help_image" accept="image/*" <?php if(empty($row['instant_help_image'])){echo 'required=""';}?>>
                                                </span>
                                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <h3>Take Words Section</h3>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="take_words_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="take_words_heading" value="<?= $row['take_words_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="take_words_short_desc" class="control-label"> Short Description <span class="symbol required">*</span></label>
                            <textarea name="take_words_short_desc" id="take_words_short_desc" rows="6" class="form-control" required=""><?= $row['take_words_short_desc'] ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <?php for($i = 1; $i <= 3; $i++):?>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="panel panel-primary" data-collapsed="0">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            Image
                                        </div>
                                        <div class="panel-options">
                                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                <img src="<?=get_site_image_src("pages/home", $row['take_words_image'.$i]) ?>" alt="--">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="take_words_image<?=$i?>" accept="image/*" <?php if(empty($row['take_words_image'.$i])){echo 'required=""';}?>>
                                                </span>
                                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="take_words_image_name<?=$i?>" class="control-label"> Name <span class="symbol required">*</span></label>
                                <input type="text" name="take_words_image_name<?=$i?>" id="take_words_image_name<?=$i?>" value="<?= $row['take_words_image_name'.$i] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="take_words_image_desc<?=$i?>" class="control-label"> Short Description <span class="symbol required">*</span></label>
                                <input type="text" name="take_words_image_desc<?=$i?>" id="take_words_image_desc<?=$i?>" value="<?= $row['take_words_image_desc'.$i] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="take_words_image_rating<?=$i?>" class="control-label"> Rating <span class="symbol required">*</span></label>
                                <input type="number" name="take_words_image_rating<?=$i?>" id="take_words_image_rating<?=$i?>" value="<?= $row['take_words_image_rating'.$i] ?>" class="form-control" required>
                            </div>
                        </div>
                    </div>
                <?php endfor?>
            </div>

            <h3>Land Your Perfect Role</h3>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="perfect_role_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="perfect_role_heading" value="<?= $row['perfect_role_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="perfect_role_short_desc" class="control-label"> Short Description <span class="symbol required">*</span></label>
                            <textarea name="perfect_role_short_desc" id="perfect_role_short_desc" rows="6" class="form-control" required=""><?= $row['perfect_role_short_desc'] ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <?php for($i = 1; $i <= 3; $i++):?>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="panel panel-primary" data-collapsed="0">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            Image
                                        </div>
                                        <div class="panel-options">
                                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                <img src="<?=get_site_image_src("pages/home", $row['perfect_role_image'.$i]) ?>" alt="--">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="perfect_role_image<?=$i?>" accept="image/*" <?php if(empty($row['perfect_role_image'.$i])){echo 'required=""';}?>>
                                                </span>
                                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="perfect_role_image_heading<?=$i?>" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="perfect_role_image_heading<?=$i?>" id="perfect_role_image_heading<?=$i?>" value="<?= $row['perfect_role_image_heading'.$i] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="perfect_role_image_desc<?=$i?>" class="control-label"> Short Description <span class="symbol required">*</span></label>
                                <input type="text" name="perfect_role_image_desc<?=$i?>" id="perfect_role_image_desc<?=$i?>" value="<?= $row['perfect_role_image_desc'.$i] ?>" class="form-control" required>
                            </div>
                        </div>
                    </div>
                <?php endfor?>
            </div>

            <h3>Upfront Real Creators</h3>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="real_creators_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="real_creators_heading" value="<?= $row['real_creators_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="real_creators_short_desc" class="control-label"> Short Description <span class="symbol required">*</span></label>
                            <textarea name="real_creators_short_desc" id="real_creators_short_desc" rows="6" class="form-control" required=""><?= $row['real_creators_short_desc'] ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <?php for($i = 1; $i <= 5; $i++):?>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="panel panel-primary" data-collapsed="0">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            Image
                                        </div>
                                        <div class="panel-options">
                                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                <img src="<?=get_site_image_src("pages/home", $row['real_creators_image'.$i]) ?>" alt="--">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="real_creators_image<?=$i?>" accept="image/*" <?php if(empty($row['real_creators_image'.$i])){echo 'required=""';}?>>
                                                </span>
                                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="real_creator_name<?=$i?>" class="control-label"> Creator Name <span class="symbol required">*</span></label>
                                <input type="text" name="real_creator_name<?=$i?>" id="real_creator_name<?=$i?>" value="<?= $row['real_creator_name'.$i] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="real_creator_title<?=$i?>" class="control-label"> Title <span class="symbol required">*</span></label>
                                <input type="text" name="real_creator_title<?=$i?>" id="real_creator_title<?=$i?>" value="<?= $row['real_creator_title'.$i] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="real_creator_rating<?=$i?>" class="control-label"> Rating <span class="symbol required">*</span></label>
                                <input type="number" name="real_creator_rating<?=$i?>" id="real_creator_rating<?=$i?>" value="<?= $row['real_creator_rating'.$i] ?>" class="form-control" required>
                            </div>
                        </div>
                    </div>
                <?php endfor?>
            </div>

            <h3>Become A Model</h3>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="become_model_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="become_model_heading" value="<?= $row['become_model_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="become_model_short_desc" class="control-label"> Short Description <span class="symbol required">*</span></label>
                            <textarea name="become_model_short_desc" id="become_model_short_desc" rows="6" class="form-control" required=""><?= $row['become_model_short_desc'] ?></textarea>
                        </div>
                    </div>
                </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="panel panel-primary" data-collapsed="0">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            Image
                                        </div>
                                        <div class="panel-options">
                                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                <img src="<?= get_site_image_src("pages/home/", $row['become_model_image'])?>" alt="--">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="become_model_image" accept="image/*" <?php if(empty($row['become_model_image'])){echo 'required=""';}?>>
                                                </span>
                                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="form-group">
                <label for="field-1" class="col-sm-2 control-label "></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
        </form>
    </div>
</div>