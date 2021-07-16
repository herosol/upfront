<?php if ($this->uri->segment(3) == 'manage_mcat'): ?>
    <?= showMsg(); ?>
    <?= getBredcrum(ADMIN, array('#' => 'Add/Update Category')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-users"></i> Add/Update <strong>Model Category</strong></h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="<?= site_url(ADMIN . '/model_categories'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>
        </div>
    </div>
    <div>
        <hr>
        <div class="row col-md-12">
            <form action=""  role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="title" class="control-label"> Category <span class="symbol required">*</span></label>
                        <input type="text" name="name" value="<?php if (isset($row->name)) echo $row->name; ?>" class="form-control" required autofocus>
                    </div>
                    <br>
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
                                        <img src="<?= !empty($row->image) ? base_url().UPLOAD_PATH.'model-categories/'.$row->image : 'http://placehold.it/3000x1000' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image" accept="image/*" <?php if(empty($row->image)){echo 'required=""';}?>>
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="is_featured" class="control-label"> Is Featured <span class="symbol required">*</span></label>
                        <input type="radio" name="is_featured" value="1" <?=$row->is_featured == '1' ? 'checked' : '';?> required autofocus> Yes
                        <input type="radio" name="is_featured" value="0" <?=$row->is_featured == '0' ? 'checked' : '';?> required autofocus> No
                    </div>
                </div>
                <hr>
                <div class="col-md-12">
                    <div class="form-group text-right">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="clearfix"></div>
        </div>
    </div>
<?php else: ?>
    <?= showMsg(); ?>
    <?= getBredcrum(ADMIN, array('#' => 'Model Categories')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-users"></i> Manage <strong>Model Categories</strong></h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="<?= site_url(ADMIN . '/model_categories/manage_mcat'); ?>" class="btn btn-lg btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
        </div>
    </div>
    <table class="table table-bordered datatable" id="table-1">
        <thead>
            <tr>
                <th width="5%" class="text-center">Sr#</th>
                <th width="10%">Image</th>
                <th width="65%">Category Title</th>
                <th width="10%">Featured</th>
                <th width="10%" class="text-center">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($rows) > 0): ?>
                <?php foreach ($rows as $key => $row): ?>
                    <tr class="odd gradeX">
                        <td class="text-center"><?= $key+1; ?></td>
                        <td><img src="<?= get_site_image_src("model-categories", $row->image, ''); ?>" width="80"></td>
                        <td><?= $row->name ?></td>
                        <td><?= $row->is_featured == '1' ? 'Yes' : 'No' ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Action <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                    <li><a href="<?= site_url(ADMIN.'/model_categories/manage_mcat/'.$row->id); ?>">Edit</a></li>
                                    <!-- <?php if(access(10)):?>
                                        <li><a href="<?= site_url(ADMIN.'/skills/delete_skill/'.$row->id); ?>" onclick="return confirm('Are you sure?');">Delete</a></li>
                                    <?php endif?> -->
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
<?php endif; ?>