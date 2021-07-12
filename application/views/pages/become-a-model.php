<!doctype html>
<html>

<head>
<title><?= !empty($site_content['page_title']) ? $site_content['page_title'].' - ' : 'Become A Model - '?><?= $site_settings->site_name?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main common typical become>

        <section id="sBanner" style="background-image: url('<?= !empty($site_content['banner']) ? base_url().UPLOAD_PATH.'pages/become-model/'.$site_content['banner'] : base_url().'assets/images/portfolio-07.jpg' ?>');">
            <div class="contain-fluid">
                <div class="content">
                    <h1><?= $site_content['banner_heading'] ?></h1>
                    <p><?= $site_content['banner_subheading'] ?></p>
                    <div class="bTn"><a href="<?= base_url() ?>signup-as-model" class="webBtn">Get started now</a></div>
                </div>
            </div>
        </section>
        <!-- sBanner -->


        <section id="affiliate">
            <div class="contain text-center">
                <h2 class="heading"><?= $site_content['second_heading'] ?></h2>
                <div class="flexRow flex">
                <?php for($i=1; $i<=3; $i++):?>
                    <div class="col">
                        <div class="inner blk">
                            <div class="icon"><img src="<?= !empty($site_content['second_image'.$i]) ? base_url().UPLOAD_PATH.'pages/become-model/'.$site_content['second_image'.$i] : 'http://placehold.it/3000x1000' ?>" alt="--"></div>
                            <div class="txt">
                                <h4><?= $site_content['image_heading'.$i] ?></h4>
                                <p><?= $site_content['second_text'.$i] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
                </div>
            </div>
        </section>
        <!-- affiliate -->


        <section id="business">
            <div class="contain">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="vidBlk image" style="background-image: url('<?= base_url().UPLOAD_PATH.'pages/become-model/'.$site_content['third_image1'] ?>')"></div>
                    </div>
                    <div class="col col2">
                        <div class="content">
                            <h2 class="heading"><?= $site_content['third_heading'] ?></h2>
                            <p><?= $site_content['third_short_desc'] ?></p>
                            <div class="bTn"><a href="<?= $base_url ?>help" class="webBtn">Help & Support</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- business -->


        <section id="affiliate">
            <div class="contain">
                <h2 class="heading text-center">How we support you</h2>
                <div class="flexRow flex">
                    <div class="col">
                        <div class="inner">
                            <div class="txt">
                                <h4>Host protection programs</h4>
                                <p>To support you in the rare event of an incident, most Airbnb bookings include property damage protection and liability insurance of up to $1M USD.</p>
                                <a href="<?= $base_url ?>blog.php"><u>How you’re protected while hosting</u></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="txt">
                                <h4>Covid-19 safety guidelines</h4>
                                <p>To help protect the health of our community, we’ve partnered with experts to create safety practices for everyone, plus a cleaning process for hosts.</p>
                                <a href="<?= $base_url ?>blog.php"><u>Get to know the enhanced cleaning process</u></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="txt">
                                <h4>High guest standards</h4>
                                <p>To give Hosts peace of mind, we offer guest identification and let you check out reviews of guests before they book. Our new Guest Standards Policy sets higher expectations  for behavior.</p>
                                <a href="<?= $base_url ?>blog.php"><u>Steps we take to help Hosts feel confident</u></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- affiliate -->


        <section id="paid">
            <div class="contain">
                <div class="content text-center">
                    <h2 class="heading"><?= $site_content['fourth_heading']?></h2>
                    <p><?= $site_content['fourth_desc']?></p>
                    <div class="bTn"><a href="<?= base_url() ?>signup-as-model" class="webBtn simpleBtn">Get started now</a></div>
                </div>
            </div>
        </section>
        <!-- paid -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>