<?php if ($this->uri->segment(3) == 'manage_skills'): ?>
    <?= showMsg(); ?>
    <?= getBredcrum(ADMIN, array('#' => 'Add/Update Skill')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-users"></i> Add/Update <strong>Skill</strong></h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="<?= site_url(ADMIN . '/skills'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>
        </div>
    </div>
    <div>
        <hr>
        <div class="row col-md-12">
            <form action=""  role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="title" class="control-label"> Skill <span class="symbol required">*</span></label>
                        <input type="text" name="name" value="<?php if (isset($row->name)) echo $row->name; ?>" class="form-control" required autofocus>
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
    <?= getBredcrum(ADMIN, array('#' => 'Manage Categories')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-users"></i> Manage <strong>Categories</strong></h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="<?= site_url(ADMIN . '/skills/manage_skills'); ?>" class="btn btn-lg btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
        </div>
    </div>
    <table class="table table-bordered datatable" id="table-1">
        <thead>
            <tr>
                <th width="5%" class="text-center">Sr#</th>
                <th>Skoll Title</th>
                <th width="12%" class="text-center">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($rows) > 0): ?>
                <?php foreach ($rows as $key => $row): ?>
                    <tr class="odd gradeX">
                        <td class="text-center"><?= $key+1; ?></td>
                        <td><?= $row->name ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Action <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                    <li><a href="<?= site_url(ADMIN.'/skills/manage_skills/'.$row->id); ?>">Edit</a></li>
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