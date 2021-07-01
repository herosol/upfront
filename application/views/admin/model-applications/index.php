
<?php echo showMsg(); ?>
<?php echo getBredcrum(ADMIN, array('#' => 'Models Applications')); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-users"></i> Manage <strong id="appllications-status">Models Applications 
        <?php
        if($this->session->userdata('model-applications-state') == 'New') { echo 'New'; }
        else if($this->session->userdata('model-applications-state') == 'Approved') { echo 'Approved'; }
        else { echo 'Cancelled'; }
        ?>
        </strong></h2>
    </div>
</div>
<div class="row margin-bottom-10">
    <div class="col-md-12">
        <button class="btn btn-primary checkStatus" data-val="New">New</button>
        <button class="btn btn-success checkStatus" data-val="Approved">Approved</button>
        <button class="btn btn-danger checkStatus" data-val="Cancelled">Cancelled</button>
    </div>
</div>
<div id="New" <?php if($this->session->userdata('model-applications-state') != 'New'){ echo 'style="display:none"'; }?>>
    <table class="table table-bordered datatable" id="table-1">
        <thead>
            <tr>
                <th width="5%" class="text-center">Sr#</th>
                <th width="10%">Photo</th>
                <th width="20%">Name</th>
                <th width="20%">Email</th>
                <th>Phone</th>
                <th>Email Verified</th>
                <th>Application Status</th>
                <th>Applied At</th>
                <th width="12%" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($applications) > 0): ?>
                <?php
                foreach ($applications as $key => $row):
                if($row->mem_model_application == '0'):
                ?>
                    <tr class="odd gradeX">
                        <td class="text-center"><?= $key+1; ?></td>
                        <td class="text-center"><img src = "<?=  get_site_image_src("members", $row->mem_image,''); ?>" width = "100"></td>
                        <td><?= ucfirst($row->user_fname).' '.ucfirst($row->user_lname); ?></td>
                        <td><?= $row->user_email ?></td>
                        <td><?= $row->mem_phone ?></td>
                        <td><?= $row->mem_verified == '0' ? '<span class="no-verified">Not Verified</span>' : '<span class="verified">Verified</span>'; ?></td>
                        <td><span class="new">New</span></td>
                        <td><span ><?= format_date($row->mem_date)?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Action <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                    <li><a href="<?= site_url(ADMIN.'/model_applications/change_application_state/approve/'.$row->user_id); ?>">Approved</a></li>
                                    <li><a href="<?= site_url(ADMIN.'/model_applications/change_application_state/cancel/'.$row->user_id); ?>">Cancelled</a></li>
                                    <li><a href="<?= site_url(ADMIN.'/model_applications/delete/'.$row->user_id); ?>" onclick="return confirm('Are you sure?');">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php 
                endif;
                endforeach;
                endif; ?>
        </tbody>
    </table>
</div>
<div id="Approved" <?php if($this->session->userdata('model-applications-state') != 'Approved'){ echo 'style="display:none"'; }?>>
    <table class="table table-bordered datatable">
            <thead>
                <tr>
                    <th width="5%" class="text-center">Sr#</th>
                    <th width="10%">Photo</th>
                    <th width="20%">Name</th>
                    <th width="20%">Email</th>
                    <th>Phone</th>
                    <th>Email Verified</th>
                    <th>Application Status</th>
                    <th>Applied At</th>
                    <th width="12%" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($applications) > 0): ?>
                    <?php
                    $count = 0;
                    foreach ($applications as $key => $row):
                    if($row->mem_model_application == '1'):
                    ?>
                        <tr class="odd gradeX">
                            <td class="text-center"><?= ++$count; ?></td>
                            <td class="text-center"><img src = "<?=  get_site_image_src("members", $row->mem_image,''); ?>" width = "100"></td>
                            <td><?= ucfirst($row->user_fname).' '.ucfirst($row->user_lname); ?></td>
                            <td><?= $row->user_email ?></td>
                            <td><?= $row->mem_phone ?></td>
                            <td><?= $row->mem_verified == '0' ? '<span class="no-verified">Not Verified</span>' : '<span class="verified">Verified</span>'; ?></td>
                            <td><span class="verified">Approved</span></td>
                            <td><span ><?= format_date($row->mem_date)?></td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu dropdown-primary" role="menu">
                                        <li><a href="<?= site_url(ADMIN.'/model_applications/delete/'.$row->user_id); ?>" onclick="return confirm('Are you sure?');">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    <?php 
                    endif;
                    endforeach;
                    endif; ?>
            </tbody>
        </table>
</div>
<div id="Cancelled" <?php if($this->session->userdata('model-applications-state') != 'Cancelled'){ echo 'style="display:none"'; }?>>
    <table class="table table-bordered datatable">
        <thead>
            <tr>
                <th width="5%" class="text-center">Sr#</th>
                <th width="10%">Photo</th>
                <th width="20%">Name</th>
                <th width="20%">Email</th>
                <th>Phone</th>
                <th>Email Verified</th>
                <th>Application Status</th>
                <th>Applied At</th>
                <th width="12%" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($applications) > 0): ?>
                <?php
                foreach ($applications as $key => $row):
                if($row->mem_model_application == '2'):
                ?>
                    <tr class="odd gradeX">
                        <td class="text-center"><?= $key+1; ?></td>
                        <td class="text-center"><img src = "<?=  get_site_image_src("members", $row->mem_image,''); ?>" width = "100"></td>
                        <td><?= ucfirst($row->user_fname).' '.ucfirst($row->user_lname); ?></td>
                        <td><?= $row->user_email ?></td>
                        <td><?= $row->mem_phone ?></td>
                        <td><?= $row->mem_verified == '0' ? '<span class="no-verified">Not Verified</span>' : '<span class="verified">Verified</span>'; ?></td>
                        <td><span class="no-verified">Cancelled</span></td>
                        <td><span ><?= format_date($row->mem_date)?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Action <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                    <li><a href="<?= site_url(ADMIN.'/model_applications/change_application_state/approve/'.$row->user_id); ?>">Approved</a></li>
                                    <li><a href="<?= site_url(ADMIN.'/model_applications/delete/'.$row->user_id); ?>" onclick="return confirm('Are you sure?');">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php 
                endif;
                endforeach;
                endif; ?>
        </tbody>
    </table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
    $('.checkStatus').click(function(){
        let btn = $(this);
        let val = btn.data('val');
        $.ajax({
            url: base_url+'admin/model_applications/save_state',
            data : {'val': val},
            dataType: 'JSON',
            method: 'POST',
            success: function (rs)
            {
                console.log('State Saved');
            },
            complete: function()
            {

            }
        })
        if(val == 'New')
        {
            $('#appllications-status').html('Models Applications New');
            $('#New').show();
            $('#Approved').hide();
            $('#Cancelled').hide();
        }
        else if(val == 'Approved')
        {
            $('#appllications-status').html('Models Applications Approved');
            $('#New').hide();
            $('#Approved').show();
            $('#Cancelled').hide();
        }
        else
        {
            $('#appllications-status').html('Models Applications Cancelled');
            $('#New').hide();
            $('#Approved').hide();
            $('#Cancelled').show();
        }
    });
</script>