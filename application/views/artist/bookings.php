<!doctype html>
<html>

<head>
    <title>My Bookings — Upfront Worldwide Talent Agency</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-artist'); ?>
    <main formal dash>
        <?php $this->load->view('includes/sidebar-artist'); ?>


        <section id="booking">
            <div class="contain-fluid">
                <div class="topHead">
                    <h4 class="heading">My Bookings</h4>
                    <ul class="tabLst flex">
                        <li class="active"><a data-toggle="tab" href="#Upcoming">Upcoming</a></li>
                        <li><a data-toggle="tab" href="#Completed">Completed</a></li>
                        <li><a data-toggle="tab" href="#Cancelled">Cancelled</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="Upcoming" class="tab-pane fade in active">
                    <?php
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
                                <li class="price">$250</li>
                            </ul>
                        </div>
                    <?php
                        endif;
                    endforeach;
                    ?>
                    </div>
                    <div id="Completed" class="tab-pane fade">
                    <?php
                    foreach($bookings as $key => $booking):
                        if($booking->booking_status == 'Completed'):
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
                                <li><span class="badge green">Complete</span></li>
                                <li class="price">$250</li>
                            </ul>
                        </div>
                        <?php
                        endif;
                    endforeach;
                    ?>
                    </div>
                    <div id="Cancelled" class="tab-pane fade">
                    <?php
                    foreach($bookings as $key => $booking):
                        if($booking->booking_status == 'Cancelled'):
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
                                <li><span class="badge red">Cancel</span></li>
                                <li class="price">$250</li>
                            </ul>
                        </div>
                        <?php
                        endif;
                    endforeach;
                    ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- session -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>