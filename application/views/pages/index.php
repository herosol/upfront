<!doctype html>
<html>

<head>
    <title><?= !empty($site_content['page_title']) ? $site_content['page_title'] . ' - ' : 'Home - ' ?><?= $site_settings->site_name ?></title>  
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main index>
        <section id="banner" class="flexBox" style="background-image: url('<?= base_url().UPLOAD_PATH.'pages/home/'.$site_content['image1']?> ');">
            <div class="flexDv">
                <div class="contain-fluid">
                    <div class="content text-center">
                        <h1><?= $site_content['banner_heading'] ?></h1>
                        <p><?= $site_content['banner_detail'] ?></p>
                        <form action="<?=base_url()?>find" method="get">
                            <div class="txtGrp">
                                <label for="" class="">Search by Name</label>
                                <input type="text" name="model_name" id="model_name" class="txtBox">
                                <img src="<?= base_url() ?>assets/images/icon-search.svg" alt="">
                            </div>
                            <div class="txtGrp">
                                <label for="">Zip code</label>
                                <input type="text" name="zip" id="zip" class="txtBox">
                                <img src="<?= base_url() ?>assets/images/icon-map-marker.svg" alt="">
                            </div>
                            <div class="bTn">
                                <button type="submit" class="webBtn">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner -->
    
        <section id="guardian">
            <div class="contain-fluid">
                <div class="content text-center">
                    <h1 class="heading"><?= $site_content['fascinates_heading'] ?></h1>
                </div>
                <div id="owl-guardian" class="owl-carousel owl-theme owl-guardian">
                <?php foreach($fascinates as $key => $row): ?>
                    <div class="profBlk">
                        <div class="image"><a><img src="<?= get_site_image_src("home-cruds", $row->image, ''); ?>" alt=""></a></div>
                        <div class="txt">
                            <div class="rateYo" data-rateyo-rating="<?=$row->rating?>"></div>
                            <h4><a><?=$row->short_desc?></a></h4>
                            <p><?=$row->name?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- guardian -->

        <section id="discover">
            <div class="contain-fluid">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="content">
                            <h1 class="heading"><?= $site_content['instant_help_heading'] ?></h1>
                            <p><?= $site_content['instant_help_short_desc'] ?></p>
                            <div class="bTn"><a href="<?=base_url()?>educational-videos" class="webBtn">Browse Classes</a></div>
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="vidBlk-without-icon" style="background-image: url('<?= get_site_image_src("pages/home", $site_content['instant_help_image'], ''); ?>')"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- discover -->

        <section id="category">
            <div class="contain-fluid text-center">
                <div class="content">
                    <h1 class="heading"><?= $site_content['featured_model_heading'] ?></h1>
                    <p><?= $site_content['featured_model_detail'] ?></p>
                </div>
                <div id="owl-topics" class="owl-carousel owl-theme">
                <?php foreach($featured_categories as $key => $row): ?>
                    <div class="inner">
                        <div class="image"><img src="<?= get_site_image_src("model-categories", $row->image, ''); ?>" alt=""></div>
                        <div class="txt">
                            <h4><?= ucfirst($row->name); ?></h4>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- category -->

        <section id="viewing">
            <div class="contain-fluid">
                <div class="content text-center">
                    <h1 class="heading"><?= $site_content['star_viewing_heading'] ?></h1>
                </div>
                <div id="owl-viewing" class="owl-carousel owl-theme owl-guardian">
                <?php foreach($stars as $key => $row): ?>
                    <div class="profBlk">
                        <div class="image"><a><img src="<?= get_site_image_src("home-cruds", $row->image, ''); ?>" alt=""></a></div>
                        <div class="txt">
                            <div class="rateYo" data-rateyo-rating="<?=$row->rating?>"></div>
                            <h4><a><?=$row->short_desc?></a></h4>
                            <p><?=$row->name?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- viewing -->

        <section id="customer">
            <div class="contain-fluid">
                <div class="content text-center">
                    <h1 class="heading"><?=$site_content['take_words_heading']?></h1>
                    <p><?=$site_content['take_words_short_desc']?></p>
                </div>
                <div class="flexRow flex">
                <?php for($i=1; $i<=3; $i++):?>
                    <div class="col">
                        <div class="inner">
                            <div class="image"><img src="<?=get_site_image_src("pages/home", $site_content['take_words_image'.$i]) ?>" alt=""></div>
                            <div class="txt">
                                <h4><?=$site_content['take_words_image_name'.$i]?></h4>
                                <p><?=$site_content['take_words_image_desc'.$i]?></p>
                                <div class="rateYo" data-rateyo-rating="<?=$site_content['take_words_image_rating'.$i]?>"></div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
                </div>
            </div>
        </section>
        <!-- customer -->

        <section id="affiliate">
            <div class="contain text-center">
                <div class="content">
                    <h1 class="heading"><?=$site_content['perfect_role_heading']?></h1>
                    <p><?=$site_content['perfect_role_short_desc']?></p>
                </div>
                <div class="flexRow flex">
                <?php for($i=1; $i<=3; $i++):?>
                    <div class="col">
                        <div class="inner blk">
                            <div class="icon"><img src="<?=get_site_image_src("pages/home", $site_content['perfect_role_image'.$i]) ?>" alt=""></div>
                            <div class="txt">
                                <h4><?=$site_content['perfect_role_image_heading'.$i]?></h4>
                                <p><?=$site_content['perfect_role_image_desc'.$i]?></p>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
                </div>
            </div>
        </section>
        <!-- affiliate -->

        <section id="creator">
            <div class="contain-fluid text-center">
                <div class="content">
                    <h1 class="heading"><?=$site_content['real_creators_heading']?></h1>
                    <p><?=$site_content['real_creators_short_desc']?></p>
                </div>
                <div class="flexRow flex">
                <?php for($i=1; $i<=5; $i++):?>
                    <div class="col">
                        <div class="profBlk">
                            <div class="ico"><a><img src="<?=get_site_image_src("pages/home", $site_content['real_creators_image'.$i]) ?>" alt=""></a></div>
                            <div class="txt">
                                <div class="rateYo" data-rateyo-rating="<?=$site_content['real_creator_rating'.$i]?>"></div>
                                <h4><a><?=$site_content['real_creator_name'.$i]?></a></h4>
                                <p><?=$site_content['real_creator_title'.$i]?></p>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
                </div>
            </div>
        </section>
        <!-- creator -->

        <?php if($this->session->userdata('user_type') == '' || $this->session->userdata('user_type') != 'model'):?>
        <section id="intro">
            <div class="contain-fluid">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="image"><img src="<?= get_site_image_src("pages/home/", $site_content['become_model_image'])?>" alt=""></div>
                    </div>
                    <div class="col col2">
                        <div class="content">
                            <h1 class="heading"><?=$site_content['become_model_heading']?></h1>
                            <p><?=$site_content['become_model_short_desc']?></p>
                            <div class="bTn"><a href="<?= base_url() ?>become-a-model" class="webBtn">Get started now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
        <!-- intro -->

        <section id="listing">
            <div class="contain-fluid">
                <div class="flexRow flex">
                    <div class="col">
                        <div class="inner">
                            <div class="ico"><img src="<?= base_url() ?>/assets/images/icon-play.svg" alt=""></div>
                            <h4>Over 130,000 video courses on career and personal skills</h4>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="ico"><img src="<?= base_url() ?>/assets/images/icon-star.svg" alt=""></div>
                            <h4>Choose from top industry instructors across the world</h4>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="ico"><img src="<?= base_url() ?>/assets/images/icon-lifetime.svg" alt=""></div>
                            <h4>Learn at your own pace, with lifetime access on mobile and desktop</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- listing -->

    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>