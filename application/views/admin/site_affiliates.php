<?php echo getBredcrum(ADMIN, array('#' => 'Affiliates')); ?>
<?php echo showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Affiliates</strong></h2>
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
            <h3> Affiliates</h3>
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
            <div class="form-group">
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                        <input type="text" name="heading" value="<?= $row['heading'] ?>" class="form-control" required>
                    </div>
                    <div class="col-md-12" hidden>
                        <label for="short_desc" class="control-label"> Short Description <span class="symbol required">*</span></label>
                        <input type="text" name="short_desc" value="<?= $row['short_desc'] ?>" class="form-control" required>
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
        <form role="form" action="<?= base_url().ADMIN ?>/sitecontent/save_affiliate"  method="post" class="form-horizontal form-groups-bordered validate" novalidate="novalidate" enctype="multipart/form-data">
            <h3> <?= !empty($id) ? 'Edit' : 'Add'?> Affiliate Card</h3>
            <div class="form-group">
                <div class="col-md-3">
                <input type="hidden" name="id" value="<?=$id?>" />
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Icon
                            </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                    <?php
                                    if(!empty($record->image))
                                    {
                                    ?>
                                        <img src="<?= !empty($record->image) ? base_url().UPLOAD_PATH.'/pages/affiliates/'.$record->image : '' ?>" alt="--">
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                <div>
                                    <span class="btn btn-white btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image" accept="image/*" <?php if(empty($record->image)){echo 'required=""';}?>>
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
                            <label for="first_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="first_heading" value="<?= $record->heading ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="first_detail" class="control-label "> Detail <span class="symbol required">*</span></label>
                            <textarea name="first_detail" rows="6" class="form-control ckeditor" ><?= $record->description ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                <label for="field-1" class="col-sm-2 control-label "></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
                </div>
            </div>
        </form>

        <table class="table table-bordered datatable" id="table-1">
                <thead>
                    <tr>
                        <th width="5%" class="text-center">Sr#</th>
                        <th width="60px">Image</th>
                        <th width="20%">Heading</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($cards) > 0): $count = 0; ?>
                        <?php foreach ($cards as $row): ?>
                            <tr class="odd gradeX">
                                <td class="text-center"><?= ++$count; ?></td>
                                <td class="text-center">
                                    <div class="icoRound">
                                        <img src = "<?= base_url().UPLOAD_PATH.'pages/affiliates/'.$row->image?>" height = "60">
                                    </div>
                                </td>
                                <td><b><?= $row->heading ?></b></td>
                                <td><?= $row->description; ?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Action <span class="caret"></span></button>
                                        <ul class="dropdown-menu dropdown-primary" role="menu">
                                                <li><a href="<?= site_url(ADMIN); ?>/sitecontent/affiliates/<?= $row->id; ?>">Edit</a></li>
                                                <?php if(access(10)):?>
                                                    <li><a href="<?= site_url(ADMIN); ?>/sitecontent/delete_affiliates/<?= $row->id; ?>" onclick="return confirm('Are you sure?');">Delete</a></li>
                                                <?php endif?>
                                    </ul>
                                </div>  
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>