<!doctype html>
<html>

<head>
    <title><?= !empty($site_content['page_title']) ? $site_content['page_title'].' - ' : 'Affiliates - '?><?= $site_settings->site_name?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main formal typical affiliate>


        <section id="affiliate">
            <div class="contain text-center">
                <div class="content">
                    <h2 class="heading">Become a Upfront Worldwide Talent Agency Affiliate</h2>
                </div>
                <div class="flexRow flex">
                    <div class="col">
                        <div class="inner blk">
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-online-classes.svg" alt=""></div>
                            <div class="txt">
                                <h4>35,000+ Online Classes</h4>
                                <p>Find the best classes and video lessons for your audience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner blk">
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-projects.svg" alt=""></div>
                            <div class="txt">
                                <h4>60,000+ Models Projects</h4>
                                <p>Showcase creative work created by Skillshare mentees.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner blk">
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-cookie.svg" alt=""></div>
                            <div class="txt">
                                <h4>30-Day Cookie</h4>
                                <p>Earn commission for each new customer you refer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner blk">
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-offers.svg" alt=""></div>
                            <div class="txt">
                                <h4>Exclusive Offers</h4>
                                <p>Share special promotions we rotate every month.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner blk">
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-tracking.svg" alt=""></div>
                            <div class="txt">
                                <h4>Real-Time Tracking</h4>
                                <p>Track all your traffic, referrals, and payouts with a personalized dashboard.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner blk">
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-payouts.svg" alt=""></div>
                            <div class="txt">
                                <h4>Monthly Payouts</h4>
                                <p>Get paid each month for every new customer you refer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- affiliate -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>