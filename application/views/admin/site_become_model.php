<?php echo getBredcrum(ADMIN, array('#' => 'Become A Model')); ?>
<?php echo showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Become A Model</strong></h2>
    </div>
    <div class="col-md-6 text-right">

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

            <h3> First Section</h3>
            <div class="form-group">
                <div class="col-md-3">
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Banner Image
                            </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                    <img src="<?= !empty($row['banner']) ? base_url().UPLOAD_PATH.'pages/become-model/'.$row['banner'] : 'http://placehold.it/3000x1000' ?>" alt="--">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                <div>
                                    <span class="btn btn-white btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="banner" accept="image/*" <?php if(empty($row['banner'])){echo 'required=""';}?>>
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="banner_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="banner_heading" value="<?= $row['banner_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="banner_subheading" class="control-label"> Sub Heading <span class="symbol required">*</span></label>
                            <input type="text" name="banner_subheading" value="<?= $row['banner_subheading'] ?>" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>

            <h3> Second Section</h3>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="second_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="second_heading" value="<?= $row['second_heading'] ?>" class="form-control" required>
                        </div>
                    </div>
                </div>

                <?php for($i=1;$i<=3;$i++):?>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="panel panel-primary" data-collapsed="0">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            Image<?= $i?>
                                        </div>
                                        <div class="panel-options">
                                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                <img src="<?= !empty($row['second_image'.$i]) ? base_url().UPLOAD_PATH.'pages/become-model/'.$row['second_image'.$i] : 'http://placehold.it/3000x1000' ?>" alt="--">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="second_image<?=$i?>" accept="image/*" <?php if(empty($row['second_image'.$i])){echo 'required=""';}?>>
                                                </span>
                                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="image_heading<?=$i?>" class="control-label"> Image Heading <span class="symbol required">*</span></label>
                                <input type="text" name="image_heading<?=$i?>" value="<?= $row['image_heading'.$i] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="second_text<?=$i?>" class="control-label"> Detail<?= $i?> <span class="symbol required">*</span></label>
                                <textarea name="second_text<?=$i?>" for="second_text<?=$i?>" rows="4" class="form-control" ><?= $row['second_text'.$i] ?></textarea>
                            </div>
                        </div>
                    </div>
                <?php endfor?>
            </div>

            <h3> Third Section</h3>
            <div class="form-group">
                <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="third_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="third_heading" value="<?= $row['third_heading'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="third_short_desc" class="control-label"> Short Description <span class="symbol required">*</span></label>
                                <textarea name="third_short_desc" class="form-control ckeditor" style="resize: none;" required=""><?= $row['third_short_desc'] ?></textarea>
                            </div>
                        </div>
                    </div>
            </div>
            <br>
            <?php for($i=1;$i<=1;$i++):?>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="panel panel-primary" data-collapsed="0">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            Image<?= $i?>
                                        </div>
                                        <div class="panel-options">
                                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                <img src="<?= !empty($row['third_image'.$i]) ? base_url().UPLOAD_PATH.'pages/become-model/'.$row['third_image'.$i] : 'http://placehold.it/3000x1000' ?>" alt="--">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="third_image<?=$i?>" accept="image/*" <?php if(empty($row['third_image'.$i])){echo 'required=""';}?>>
                                                </span>
                                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor?>

            <hr>
            <h3> Fourth Section</h3>
            <div class="form-group">
                        <div class="col-md-12">
                            <label for="fourth_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="fourth_heading" value="<?= $row['fourth_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="fourth_desc" class="control-label"> Sub Heading <span class="symbol required">*</span></label>
                            <input type="text" name="fourth_desc" value="<?= $row['fourth_desc'] ?>" class="form-control" required>
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
    <div class="clearfix"></div>
</div>