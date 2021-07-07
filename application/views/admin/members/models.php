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
                    <?php if(access(9)):?>
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
                    <?php endif?>

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