<!doctype html>
<html>

<head>
    <title><?= !empty($site_content['page_title']) ? $site_content['page_title'].' - ' : 'About Us - '?><?= $site_settings->site_name?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main common typical about>


        <section id="overview">
            <div class="contain">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="ico"><img src="<?= !empty($site_content['image']) ? base_url().UPLOAD_PATH.'pages/about-us/'.$site_content['image'] : 'http://placehold.it/3000x1000' ?>" alt="--"></div>
                    </div>
                    <div class="col col2">
                        <div class="content">
                            <h2 class="heading"><?= $site_content['first_heading'] ?></h2>
                            <p><?= $site_content['first_subheading'] ?></p>
                        </div>
                        <div class="blk"><?= $site_content['first_detail'] ?></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- overview -->


        <section id="blocks">
            <div class="contain">
                <h2 class="heading text-center"><?= $site_content['second_heading'] ?></h2>
                <div class="flexRow flex">
                <?php for($i=1; $i<=4; $i++):?>
                    <div class="col">
                        <div class="inner">
                            <div class="image"><img src="<?= !empty($site_content['second_image'.$i]) ? base_url().UPLOAD_PATH.'pages/about-us/'.$site_content['second_image'.$i] : 'http://placehold.it/3000x1000' ?>" alt="--"></div>
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
        <!-- blocks -->


        <section id="affiliate">
            <div class="contain text-center">
                <div class="content">
                    <h2 class="heading"><?= $site_content['third_heading'] ?></h2>
                    <p><?= $site_content['third_short_desc'] ?></p>
                </div>
                <div class="flexRow flex">
                <?php for($i=1; $i<=3; $i++):?>
                    <div class="col">
                        <div class="inner blk">
                            <div class="icon"><img src="<?= !empty($site_content['third_image'.$i]) ? base_url().UPLOAD_PATH.'pages/about-us/'.$site_content['third_image'.$i] : 'http://placehold.it/3000x1000' ?>" alt="--"></div>
                            <div class="txt">
                                <h4><?= $site_content['third_image_heading'.$i] ?></h4>
                                <p><?= $site_content['third_text'.$i] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
                </div>
            </div>
        </section>
        <!-- affiliate -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>