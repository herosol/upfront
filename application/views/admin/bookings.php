<?php if ($this->uri->segment(3) == 'detail'): ?>
    <?= showMsg(); ?>
    <?= getBredcrum(ADMIN, array('#' => 'Booking Detail')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-list"></i> <strong> Booking</strong> Detail</h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="<?= site_url(ADMIN . '/bookings'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>
        </div>
    </div>
    <div>
        <hr>
        <div class="row col-md-12">
            <h3><i class="fa fa-bars"></i> Booking Detail </h3>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td><strong>Booking No:</strong></td>
                        <td colspan="3"><?= num_size($row->id)?></td>
                    </tr>
                    <tr>
                        <td width="150"><strong>Model Name:</strong></td>
                        <td><?= get_mem_name($row->booked_member) ?></td>
                        <td width="150"><strong>Buyer Name:</strong></td>
                        <td><?= get_mem_name($row->booked_by) ?></td>
                    </tr>
                    <tr>
                        <td><strong>Type of work:</strong></td>
                        <td> - </td>
                        <td><strong>Date:</strong></td>
                        <td><?= format_date($row->booking_date)?></td>
                    </tr>
                    <tr>
                        <td><strong>Days:</strong></td>
                        <td><?= $row->duration?></td>
                        <td><strong>Rate:</strong></td>
                        <td><?= format_amount($row->amount)?></td>
                    </tr>
                </tbody>
            </table>
            <h3><i class="fa fa-list-alt"></i> Calculations </h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="60">No.</th>
                        <th>Title</th>
                        <th width="150">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bold">
                        <td colspan="2" class="bold text-right">Total:</td>
                        <td class="price"><?= format_amount($row->amount)?></td>
                    </tr>
                    <tr class="bold">
                        <td colspan="2" class="bold text-right">Site Percentage:</td>
                        <td class="price"><?= $row->site_percentage?>%</td>
                    </tr>
                    <tr class="bold">
                        <td colspan="2" class="bold text-right">Player Earning:</td>
                        <td class="price"><?= amount_percentage($row->amount, $row->site_percentage);?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row col-md-12">
            <h3><i class="fa fa-list-alt"></i> Booking Status </h3>
            <form action="" role="form" class="form-horizontal frmAjax" method="post" enctype="multipart/form-data">
                <div class="alertMsg"></div>
                <table class="table table-bordered">
                    <tbody>
                        <?php if ($row->booking_status == 'Cancelled'): ?>
                            <tr>
                                <td><strong>Status:</strong></td>
                                <td><span class="miniLbl red">Canceled</span></td>

                                <td><strong>Canceled By:</strong></td>
                                <td><?= get_mem_name($row->cancel_request_by) ?></td>

                                <td><strong>Canceled Date:</strong></td>
                                <td><?= format_date($row->cancel_on)?></td>
                            </tr>
                        <?php endif ?>
                        <?php if ($row->booking_status == 'Completed'): ?>
                            <tr>
                                <td><strong>Status:</strong></td>
                                <td><span class="miniLbl <?=booking_status_badge($row->booking_status)?>"><?=$row->booking_status?></span></td>
                            </tr>
                            <?php
                            $review = get_mem_review($row->id);
                            // $review_reply = get_reply($review->id); 
                            if (!empty($review)): ?>
                                <tr>
                                    <td><strong>Ratting:</strong></td>
                                    <td>
                                        <div class="rateYo" id="rating" data-rateyo-rating="<?= $review->rating?>"></div>
                                        <input type="hidden" name="rating" value="<?= $review->rating?>">
                                    </td>
                                    <td><strong>Date:</strong></td>
                                    <td><?= format_date($review->review_date)?></td>
                                </tr>
                                <tr>
                                    <td><strong>Comment:</strong></td>
                                    <td colspan="3">
                                        <p><?= $review->review_comment?></p>
                                        <?php if ($review_reply): ?>
                                            <p>&emsp;<?= $review_reply->comment?></p>
                                        <?php endif ?>
                                    </td>
                                </tr>
                            <?php else: ?>
                                <tr>
                                    <td><strong>Ratting:</strong></td>
                                    <td>
                                        <p>No Review</p>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endif?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        (function($){
            $(function(){
                $('.rateYo').rateYo({
                    fullStar: true,
                    normalFill: '#ddd',
                    ratedFill: '#f6a623',
                    starWidth: '14px',
                    spacing: '2px'
                });

                $(document).on("rateyo.set", '#rating', function(e, data) {
                    let rating = data.rating;
                    $('input[name="rating"]').val(rating);
                });
            })
        }(jQuery))
    </script>
<?php else: ?>
    <?= showMsg(); ?>
    <?= getBredcrum(ADMIN, array('#' => 'Bookings Management')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-12">
            <h2 class="no-margin"><i class="entypo-list"></i> Manage <?php if ($this->uri->segment(4) > 0): ?><strong>" <?php echo ucwords($member_row->mem_fname.' '.$member_row->mem_lname); ?> "</strong> <?php endif; ?>Bookings</h2>
        </div>
    </div>
    <table class="table table-bordered datatable" id="table-1">
        <thead>
            <tr>
                <th width="5%" class="text-center">Sr#</th>
                <th>Customer</th>
                <th>Model</th>
                <th>Date</th>
                <th>Total</th>
                <th>Site Percentage</th>
                <th>Model Earning</th>
                <th>Status</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($rows) > 0): $count = 0; ?>
                <?php foreach ($rows as $row): ?>
                    <tr class="odd gradeX">
                        <td class="text-center"><?= $row->id; ?></td>
                        <td><b><a><?= get_mem_name($row->booked_by); ?></a></b></td>
                        <td><b><a><?= get_mem_name($row->booked_member); ?></a></b></td>
                        <td><?= format_date($row->booking_date, 'M d, Y h:i:m a'); ?></td>
                        <td><?= format_amount($row->amount); ?></td>
                        <td><?= $row->site_percentage; ?>%</td>
                        <td><?= amount_percentage($row->amount, $row->site_percentage); ?></td>
                        <td><span class="miniLbl <?=booking_status_badge($row->booking_status)?>"><?=$row->booking_status?></span></td>
                        <td class="text-center">
                            <a href="<?= site_url(ADMIN.'/bookings/detail/'.$row->id); ?>" class="btn btn-primary btn-sm">Detail</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
<?php endif?>