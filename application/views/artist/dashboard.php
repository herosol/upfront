<!doctype html>
<html>

<head>
    <title>Dashboard — Upfront Worldwide Talent Agency</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-artist'); ?>
    <main formal dash>
        <?php $this->load->view('includes/sidebar-artist'); ?>


        <section id="dash">
            <div class="contain-fluid">
                <?php if ($mem_data->mem_verified == 0) : ?>
                    <div id="verify">
                        <div class="inBlk blk">
                            <h3 class="heading">Email Verification</h3>
                            <div id="resndCntnt">
                                <p>Please verify your email address, We've sent a verify email to your email address. If you don't see the email, check your spam folder. If you didn't get email click on resend email link, or if you want to change email address click link below.</p>
                                <p><a href="javascript:void(0)" id="rsnd-email">Resend Email</a> OR <a href="javascript:void(0)" class="popBtn" data-popup="change-email">Change Email</a>
                                </p>
                            </div>
                            <div class="appLoad hide">
                                <div class="appLoader"><span class="spiner"></span></div>
                            </div>
                            <div class="popup small-popup" data-popup="change-email">
                                <div class="tableDv">
                                    <div class="tableCell">
                                        <div class="contain">
                                            <div class="_inner">
                                                <div class="crosBtn"></div>
                                                <h4>Change your Email</h4>
                                                <form action="<?= base_url() ?>account/change_email" method="post" autocomplete="off" class="frmAjax" id="frmChangeEmail">
                                                    <div class="txtGrp">
                                                        <label for="email">Email Address</label>
                                                        <input type="email" id="email" name="email" class="txtBox">
                                                    </div>
                                                    <div class="bTn text-center mb-1">
                                                        <button type="submit" class="webBtn">Change your Email</button>
                                                    </div>
                                                    <br>
                                                    <div class="alertMsg" style="display:none"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="blk topBlk">
                    <div class="ico"><img src="<?= get_site_image_src("members", $mem_data->mem_image, ''); ?>" alt=""></div>
                    <div class="txt">
                        <h3><span class="regular">Welcome,</span> Dear, <?= $mem_data->user_fname . ' ' . $mem_data->user_lname ?>! <span class="regular">Nice to see you again.</span></h3>
                    </div>
                    <div class="bTn">
                        <a href="<?= base_url() ?>profile-settings" class="webBtn mdBtn">Edit Info</a>
                    </div>
                </div>
                <?php if ($this->session->user_type != 'user') : ?>
                    <h4>Upcoming Bookings</h4>
                    <?php
                    if(check_bookings_counter($bookings, 'Pending') == 0 && check_bookings_counter($bookings, 'In Progress') == 0)
                    {
                    ?>
                        <div class="alert alert-info">No Upcoming Booking.</div>
                    <?php
                    }
                    else
                    {
                        foreach($bookings as $key => $booking):
                            if($booking->booking_status == 'Pending' || $booking->booking_status == 'In Progress'):
                        ?>
                            <div class="bookBlk">
                                <ul class="lst">
                                    <li>
                                        <div class="icoBlk">
                                            <div class="ico"><img src="<?= get_site_image_src("members", get_image_of_member($booking->booked_by), ''); ?>" alt=""></div>
                                            <div class="txt">
                                                <h5>Educated is even better than you’ve heard</h5>
                                                <p>214243</p>
                                            </div>
                                            <a href="<?= base_url() ?>booking-detail/<?=doEncode($booking->id)?>"></a>
                                        </div>
                                    </li>
                                    <li class="date">March 20, 2019 - 5:20 pm</li>
                                    <li><span class="badge yellow">Pending</span></li>
                                    <li class="price">$<?=$booking->amount?></li>
                                </ul>
                            </div>
                        <?php
                            endif;
                        endforeach;
                    }
                    ?>
                <?php endif; ?>
            </div>
        </section>
        <!-- dash -->
        <script type="text/javascript" src="<?= base_url('assets/js/custom-validations.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/js/custom.js') ?>"></script>
        <script>
            $(function() {
                $(document).on('click', '#rsnd-email', function(e) {
                    e.preventDefault();

                    var btn = $(this);
                    if (btn.data("disabled"))
                        return false;
                    $("#resndCntnt").addClass('hide');
                    $('.appLoad').removeClass('hide');

                    btn.data("disabled", "disabled");
                    $.ajax({
                        url: base_url + 'resend-email',
                        data: {
                            'cmd': 'resend'
                        },
                        dataType: 'JSON',
                        method: 'POST',
                        success: function(rs) {
                            $('#resndCntnt').find('.alertMsg').remove().end().append(rs.msg);
                        },
                        complete: function() {
                            btn.removeData("disabled");
                            setTimeout(function() {
                                $('.appLoad').addClass('hide');
                                $('#resndCntnt').removeClass('hide');
                            }, 1500)
                        }
                    })
                })
            })
        </script>


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>