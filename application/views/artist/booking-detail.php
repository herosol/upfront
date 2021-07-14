<!doctype html>
<html>

<head>
    <title>Booking Detail — Upfront Worldwide Talent Agency</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-artist'); ?>
    <main formal dash>
        <?php $this->load->view('includes/sidebar-artist'); ?>


        <section id="booking" class="bookDtl">
            <div class="contain-fluid">
                <div class="blk">
                    <div class="itmBlk">
                        <div class="ico"><img src="<?= base_url() ?>assets/images/stars/1.jpg" alt=""></div>
                        <div class="txt">
                            <h4>Educated is even better than you’ve heard</h4>
                            <div class="rating">
                                <div class="rateYo"></div>
                                <strong>4.1<em>286 ratings</em></strong>
                            </div>
                            <ul class="list">
                                <li><strong>#:</strong><span>83692104</span></li>
                                <li><strong>Status:</strong><span id="booking-status"><em class="badge <?=booking_status_badge($booking_detail->booking_status)?>"><?=$booking_detail->booking_status?></em></span></li>
                                <li><strong>Model:</strong><span><?=$booking_detail->user_fname.' '.$booking_detail->user_lname?></span></li>
                                <li><strong>Price:</strong><span>$<?=$booking_detail->amount?></span></li>
                                <li><strong>Date:</strong><span>March 20, 2019</span></li>
                                <li><strong>Time:</strong><span>5:20 pm</span></li>
                                <li><strong>Duration:</strong><span><?=$booking_detail->duration?> Days</span></li>
                                <li><strong>Details:</strong><span><?=$booking_detail->detail?></span></li>
                                <?php if($booking_detail->cancel_request == 'send' && $booking_detail->cancel_request_by == $this->session->user_id): ?>
                                <li>
                                    <strong>&nbsp;</strong>
                                    <span class="blockBtn red-color">Request has been sent</span>
                                </li>
                                <?php elseif($booking_detail->cancel_request == '' && $booking_detail->booking_status != 'Cancelled' && $booking_detail->booking_status != 'Completed'):?>
                                    <li>
                                    <strong>&nbsp;</strong>
                                    <span class="blockBtn"><button class="webBtn labelBtn red-color popBtn" data-popup="cancel-booking">I want to cancel my booking</button></span>
                                </li>
                                <?php
                                    else:
                                        echo '';
                                    endif;
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <?php
                 if(($booking_detail->booking_status == 'Pending' || $booking_detail->booking_status == 'In Progress') 
                    && $booking_detail->booked_member == $this->session->user_id && ($booking_detail->complete_request == '' || $booking_detail->complete_request == 'decline')): ?>
                <div class="blk booking-completion">
                    <h4>Booking Completion</h4>
                    <?php if($booking_detail->complete_request == 'decline' && $booking_detail->booked_member == $this->session->user_id): ?>
                        <p><strong>Request Declined! Send request again to mark this session complete.</strong></p>
                    <?php else: ?>
                        <p><strong>Send request to mark this session complete.</strong></p>
                    <?php endif; ?>
                    <div class="text-center">
                        <div class="bTn">
                            <button type="button" class="webBtn" onclick="completeSession(this, 'complete', '<?=doEncode($booking_detail->id)?>')">Send Request</button>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($booking_detail->complete_request == 'send' && $booking_detail->booked_member != $this->session->user_id): ?>
                <div class="blk booking-completion-response">
                    <h4>Booking Completion</h4>
                    <p><strong>Please accept if the session has been completed.</strong></p>
                    <div class="text-center">
                        <div class="bTn">
                            <button type="button" class="webBtn simpleBtn" onclick="completionRespose(this, 'decline', '<?=doEncode($booking_detail->id)?>')">Decline</button>
                            <button type="button" class="webBtn" onclick="completionRespose(this, 'accept', '<?=doEncode($booking_detail->id)?>')">Accept</button>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($booking_detail->complete_request == 'send' && $booking_detail->booked_member == $this->session->user_id): ?>
                <div class="blk booking-cancellation">
                    <h4>Booking Completion</h4>
                    <p>The Completion request sent successfully.</p>
                </div>
                <?php endif; ?>

                <?php if($booking_detail->cancel_request == 'send' && $booking_detail->cancel_request_by != $this->session->user_id): ?>
                <div class="blk booking-cancellation">
                    <h4>Booking Cancellation</h4>
                    <p><strong><?=$booking_detail->cancel_request_reason?></strong></p>
                    <p><?=$booking_detail->cancel_request_description?></p>
                    <div class="text-center">
                        <div class="bTn">
                            <button type="button" class="webBtn simpleBtn" onclick="cancellationRespose(this, 'decline', '<?=doEncode($booking_detail->id)?>')">Decline</button>
                            <button type="button" class="webBtn" onclick="cancellationRespose(this, 'accept', '<?=doEncode($booking_detail->id)?>')">Accept</button>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($booking_detail->cancel_request == 'accept'): ?>
                <div class="blk booking-cancellation">
                    <h4>Booking Cancelled</h4>
                    <p><strong><?=$booking_detail->cancel_request_reason?></strong></p>
                    <p><?=$booking_detail->cancel_request_description?></p>
                </div>
                <?php endif; ?>

                <?php if($booking_detail->cancel_request == 'decline' && $booking_detail->cancel_request_by != $this->session->user_id): ?>
                <div class="blk booking-cancellation">
                    <h4>Booking Cancelled</h4>
                    <p>The cancellation request has been declined.</p>
                </div>
                <?php endif; ?>

                <?php if($booking_detail->booking_status == 'Completed' && $booking_detail->booked_by == $this->session->user_id): ?>
                <div class="blk review">
                    <div class="ico"><img src="<?= base_url() ?>assets/images/users/1.jpg" alt=""></div>
                    <div class="txt">
                        <form action="<?=base_url()?>account/review" method="post" id="reviewForm">
                            <input type="hidden" name="mem_id" value="<?=$booking_detail->booked_member?>">
                            <input type="hidden" name="booking_id" value="<?=$booking_detail->id?>">
                            <div class="txtGrp">
                                <h5>Leave Review</h5>
                                <div class="rateYo" data-rateyo-star-width="20px" data-rateyo-read-only="false" id="rating"></div>
                                <input type="hidden" name="rating" value="4">
                            </div>
                            <div class="txtGrp">
                                <label for="review_comment">Write a little description</label>
                                <textarea name="review_comment" id="review_comment" class="txtBox"></textarea>
                            </div>
                            <div class="bTn text-center">
                                <button type="submit" class="webBtn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <?php endif; ?>


                <div class="blk reviews" <?= count($reviews) == 0 ? 'style="display:none"' : '' ?>>
                <?php foreach($reviews as $key => $review): ?>
                    <div class="review">
                        <div class="ico"><img src="<?= get_site_image_src("members", $review->rater_image, ''); ?>" alt=""></div>
                        <div class="txt">
                            <div class="icoTxt">
                                <div class="title">
                                    <h5><?= $review->rater_fname.' '.$review->rater_lname ?></h5>
                                    <div class="rateYo" data-rateyo-rating="<?=$review->rating?>"></div>
                                </div>
                                <div class="date"><?= chat_message_time($review->review_date) ?></div>
                            </div>
                            <p><?= $review->review_comment ?></p>
                            <div class="review">
                                <div class="ico"><img src="<?= base_url() ?>assets/images/users/1.jpg" alt=""></div>
                                <div class="txt">
                                    <h6>Model's Response</h6>
                                    <p>Thank you for your kind comment, I will be waiting for your next call, hope we work for a long time together.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
            
            <div class="popup small-popup" data-popup="cancel-booking">
                <div class="tableDv">
                    <div class="tableCell">
                        <div class="contain">
                            <div class="_inner">
                                <div class="crosBtn"></div>
                                <h3>Cancel Booking</h3>
                                <form action="<?=base_url()?>account/cancel_booking" method="post" id="cancelBookingForm">
                                    <div class="txtGrp">
                                        <input type="hidden" name="cancel_request_by" value="<?= $booking_detail->booked_by == $this->session->user_id ? $booking_detail->booked_by : $booking_detail->booked_member; ?>" >
                                        <input type="hidden" name="booking_id" value="<?= $booking_detail->id; ?>">
                                        <ul class="radioLst">
                                            <li class="lblBtn">
                                                <input type="radio" id="reason_personal" name="cancel_request_reason" value="Due to personal reasons, I am unable to attend.">
                                                <label for="reason_personal">Due to personal reasons, I am unable to attend.</label>
                                            </li>
                                            <li class="lblBtn">
                                                <input type="radio" id="reason_report" name="cancel_request_reason" value="Due to having to finish a report on that day.">
                                                <label for="reason_report">Due to having to finish a report on that day.</label>
                                            </li>
                                            <li class="lblBtn">
                                                <input type="radio" id="reason_matter" name="cancel_request_reason" value="I have had an urgent matter come up that I must take care of">
                                                <label for="reason_matter">I have had an urgent matter come up that I must take care of</label>
                                            </li>
                                            <li class="lblBtn">
                                                <input type="radio" id="reason_topic" name="cancel_request_reason" value="Not involved in the artist to be discussed at the meeting.">
                                                <label for="reason_topic">Not involved in the artist to be discussed at the meeting.</label>
                                            </li>
                                            <li class="lblBtn">
                                                <input type="radio" id="reason_conflict" name="cancel_request_reason" value="I am not able to attend this meeting due to conflict with another meeting.">
                                                <label for="reason_conflict">I am not able to attend this meeting due to conflict with another meeting.</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="txtGrp">
                                        <label for="cancel_request_description">Description</label>
                                        <textarea name="cancel_request_description" id="cancel_request_description" class="txtBox"></textarea>
                                    </div>
                                    <div class="bTn text-center">
                                        <button type="submit" class="webBtn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- booking -->


    </main>
    <script type="text/javascript" src="<?= base_url('assets/js/custom-validations.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/custom.js') ?>"></script>
    <?php $this->load->view('includes/footer'); ?>
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

                $(document).on("rateyo.set", '#rating', function(e, data)
                {
                    let rating = data.rating;
                    $('input[name="rating"]').val(rating);
                });
            })
        }(jQuery))
    </script>
    <script>
        const cancellationRespose = (obj, action, booking_id) => 
        {
            $.ajax({
                url: base_url+'account/cancellation_respose',
                data : {'action': action, 'booking_id': booking_id},
                dataType: 'JSON',
                method: 'POST',
                success: function (rs)
                {
                    if(action == 'accept')
                    {
                        $(obj).closest('.booking-cancellation').html('Request has been accepted successfully.');
                        $('#booking-status').html('<em class="badge red">Cancelled</em>');
                    }
                    else
                    {
                        $(obj).closest('.booking-cancellation').html('Request has been declined.');
                    }
                },
                complete: function()
                {

                }
            });
        }

        const completeSession = (obj, action, booking_id) =>
        {
            $.ajax({
                url: base_url+'account/complete_session',
                data : {'action': action, 'booking_id': booking_id},
                dataType: 'JSON',
                method: 'POST',
                success: function (rs)
                {
                    if(action == 'complete')
                    {
                        $(obj).closest('.booking-completion').html('Request has been accepted successfully.');
                    }
                },
                complete: function()
                {

                }
            });
        }

        const completionRespose = (obj, action, booking_id) => 
        {
            $.ajax({
                url: base_url+'account/completion_respose',
                data : {'action': action, 'booking_id': booking_id},
                dataType: 'JSON',
                method: 'POST',
                success: function (rs)
                {
                    if(action == 'accept')
                    {
                        $(obj).closest('.booking-completion-response').html('Request has been accepted successfully.');
                        $('#booking-status').html('<em class="badge green">Completed</em>');
                    }
                    else
                    {
                        $(obj).closest('.booking-completion-response').html('Request has been declined.');
                    }
                },
                complete: function()
                {

                }
            });
        }
        
    </script>
</body>

</html>