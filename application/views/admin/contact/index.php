
<?php echo showMsg(); ?>
<?php echo getBredcrum(ADMIN, array('#' => 'Contact Messages')); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-users"></i> Manage <strong id="appllications-status">Contact Messages 
        <?php
        if($this->session->userdata('contacts-state') == 'New') { echo 'New'; }
        else if($this->session->userdata('contacts-state') == 'Seen') { echo 'Seen'; }
        else { echo 'Cancelled'; }
        ?>
        </strong></h2>
    </div>
</div>
<div class="row margin-bottom-10">
    <div class="col-md-12">
        <button class="btn btn-primary checkStatus" data-val="New">New</button>
        <button class="btn btn-success checkStatus" data-val="Seen">Seen</button>
    </div>
</div>
<div id="New" <?php if($this->session->userdata('contacts-state') != 'New'){ echo 'style="display:none"'; }?>>
    <table class="table table-bordered datatable dtable">
        <thead>
            <tr>
                <th width="5%" class="text-center">Sr#</th>
                <th width="20%">Name</th>
                <th width="20%">Email</th>
                <th>Phone</th>
                <th>Subject</th>
                <th>Comments</th>
                <th>Status</th>
                <th>Message At</th>
                <!-- <th width="12%" class="text-center">Actions</th> -->
            </tr>
        </thead>
        <tbody>
            <?php if (count($rows) > 0): ?>
                <?php
                foreach ($rows as $key => $row):
                if($row->status == 'new'):
                ?>
                    <tr class="odd gradeX">
                        <td class="text-center"><?= $key+1; ?></td>
                        <td><?= $row->name; ?></td>
                        <td><?= $row->email ?></td>
                        <td><?= $row->phone ?></td>
                        <td><?= $row->subject ?></td>
                        <td><?= $row->comment ?></td>
                        <td><?= $row->status == 'new' ? '<span class="no-verified">New</span>' : '<span class="Seen">Verified</span>'; ?></td>
                        <td><span ><?= format_date($row->date)?></td>
                        <!-- <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Action <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                    <li><a href="<?= site_url(ADMIN.'/model_applications/change_application_state/approve/'.$row->user_id); ?>">Approved</a></li>
                                    <li><a href="<?= site_url(ADMIN.'/model_applications/change_application_state/cancel/'.$row->user_id); ?>">Cancelled</a></li>
                                    <li><a href="<?= site_url(ADMIN.'/model_applications/delete/'.$row->user_id); ?>" onclick="return confirm('Are you sure?');">Delete</a></li>
                                </ul>
                            </div>
                        </td> -->
                    </tr>
                <?php 
                endif;
                endforeach;
                endif; ?>
        </tbody>
    </table>
</div>
<div id="Approved" <?php if($this->session->userdata('contacts-state') != 'Seen'){ echo 'style="display:none"'; }?>>
    <table class="table table-bordered datatable dtable">
        <thead>
            <tr>
                <th width="5%" class="text-center">Sr#</th>
                <th width="20%">Name</th>
                <th width="20%">Email</th>
                <th>Phone</th>
                <th>Subject</th>
                <th>Comments</th>
                <th>Status</th>
                <th>Message At</th>
                <th width="12%" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($rows) > 0): ?>
                <?php
                foreach ($rows as $key => $row):
                if($row->status == 'seen'):
                ?>
                    <tr class="odd gradeX">
                        <td class="text-center"><?= $key+1; ?></td>
                        <td><?= $row->name; ?></td>
                        <td><?= $row->email ?></td>
                        <td><?= $row->phone ?></td>
                        <td><?= $row->subject ?></td>
                        <td><?= $row->comment ?></td>
                        <td><?= $row->status == 'new' ? '<span class="no-verified">New</span>' : '<span class="verified">Seen</span>'; ?></td>
                        <td><span ><?= format_date($row->date)?></td>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
    $('.checkStatus').click(function(){
        let btn = $(this);
        let val = btn.data('val');
        $.ajax({
            url: base_url+'admin/contacts/save_state',
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
            $('#appllications-status').html('Contact Messages New');
            $('#New').show();
            $('#Approved').hide();
            $('#Cancelled').hide();
        }
        else if(val == 'Seen')
        {
            $('#appllications-status').html('Contact Messages Seen');
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