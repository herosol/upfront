<!doctype html>
<html>

<head>
    <title>Notifications — Upfront Worldwide Talent Agency</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-artist'); ?>
    <main formal dash>
        <?php $this->load->view('includes/sidebar-artist'); ?>


        <section id="notification">
            <div class="contain-fluid">
                <div class="blk notiBlk">
                    <div class="inner">
                        <div class="ico"><img src="<?= $base_url ?>images/users/6.jpg" alt=""></div>
                        <div class="txt">
                            <p>You have a new session request from Jennifer Kem. <a href="?">click here</a> to view details.</p>
                            <span class="time">2 hours ago</span>
                        </div>
                    </div>
                    <div class="inner">
                        <div class="ico"><img src="<?= $base_url ?>images/users/1.jpg" alt=""></div>
                        <div class="txt">
                            <p>You have a new notification. You're welcome <a href="?">click here</a> to view them</p>
                            <span class="time">7 hours ago</span>
                        </div>
                    </div>
                    <div class="inner">
                        <div class="ico"><img src="<?= $base_url ?>images/users/5.jpg" alt=""></div>
                        <div class="txt">
                            <p>Session has been booked!</p>
                            <span class="time">Yesterday at 5:32 am</span>
                        </div>
                    </div>
                    <div class="inner">
                        <div class="ico"><img src="<?= $base_url ?>images/users/4.jpg" alt=""></div>
                        <div class="txt">
                            <p>You have a new notification. You're welcome <a href="?">click here</a> to view them</p>
                            <span class="time">Yesterday at 5:32 am</span>
                        </div>
                    </div>
                    <div class="inner">
                        <div class="ico"><img src="<?= $base_url ?>images/users/3.jpg" alt=""></div>
                        <div class="txt">
                            <p>Leave a review on your experience with Jennifer Kem <a href="?">click here</a></p>
                            <span class="time">March 18 at 8:22 p.m.</span>
                        </div>
                    </div>
                    <div class="inner">
                        <div class="ico"><img src="<?= $base_url ?>images/users/4.jpg" alt=""></div>
                        <div class="txt">
                            <p>You rated Jennifer Kem with 5 stars.</p>
                            <span class="time">Yesterday at 5:32 am</span>
                        </div>
                    </div>
                    <div class="inner">
                        <div class="ico"><img src="<?= $base_url ?>images/users/7.jpg" alt=""></div>
                        <div class="txt">
                            <p>You have a new notification. You're welcome <a href="?">click here</a> to view them</p>
                            <span class="time">7 hours ago</span>
                        </div>
                    </div>
                    <div class="inner">
                        <div class="ico"><img src="<?= $base_url ?>images/users/8.jpg" alt=""></div>
                        <div class="txt">
                            <p>Your session request with John Wick has been canceled.</p>
                            <span class="time">Yesterday at 5:32 am</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- notification -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>