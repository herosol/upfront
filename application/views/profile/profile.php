<!doctype html>
<html>

<head>
    <title>Profile — Upfront Worldwide Talent Agency</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main common profile>


        <section id="profile">
            <div class="cover" style="background-image: url('<?= get_site_image_src("members", $model_data->mem_cover_image, ''); ?>')"></div>
            <div class="contain-fluid">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="blk proBlk relative">
                            <div class="icoBlk">
                                <div class="ico"><img src="<?= get_site_image_src("members", $model_data->mem_image, ''); ?>" alt=""></div>
                                <div class="title">
                                    <h3><?= $model_data->user_fname.' '.$model_data->user_lname; ?> <small>Actor & Writer</small></h3>
                                    <div class="rating">
                                        <div class="rateYo"></div>
                                        <strong>4.1<em>286 ratings</em></strong>
                                    </div>
                                </div>
                                <a href="<?= base_url() ?>inbox/<?=$model_data->user_id?>" class="webBtn smBtn">Send Message</a>
                            </div>
                            <div class="txt">
                                <h4>Personal Info</h4>
                                <?php echo $model_data->mem_about; ?>
                                <ul class="lst">
                                    <li>
                                        <strong>Speaks:</strong>
                                        <?php foreach($mem_languages as $language): ?>
                                            <?=language_name($language->language_id)?>
                                            <span><?=$language->language_level?></span>
                                        <?php endforeach; ?>
                                    </li>
                                </ul>
                                <h4>Skills</h4>
                                <ul class="skillLst flex">
                                <?php foreach(explode(',', $model_data->mem_skills) as $skill): ?>
                                    <li><span><?=ucfirst($skill)?></span></li>
                                <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="blk">
                            <h4>Gallery</h4>
                            <ul id="gallery" class="flex">
                            <?php foreach($gallery_images as $image): ?>
                                <li data-src="<?= get_site_image_src("members", $image->image, ''); ?>">
                                    <div class="image">
                                        <img src="<?= get_site_image_src("members", $image->image, ''); ?>" alt="">
                                    </div>
                                </li>
                            <?php endforeach; ?>
                            </ul>
                            <div style="display:none;" id="video1">
                                <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls preload="none">
                                    <source src="http://herosolutions.com.pk/metoo/cdn/videos/work.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div class="blk">
                            <div class="_header">
                                <h4><?=count($reviews)?> <?=count($reviews) < 2 ? 'Review' : 'Reviews'?></h4>
                                <?php if(count($reviews) > 0): ?>
                                    <div class="rateYo"></div>
                                <?php endif; ?>
                            </div>
                            <?php 
                            if(count($reviews) > 0):
                                foreach($reviews as $key => $review):
                            ?>
                                <div class="review">
                                    <div class="ico"><img src="<?= get_site_image_src("members", $review->rater_image, ''); ?>" alt=""></div>
                                    <div class="txt">
                                        <div class="icoTxt">
                                            <div class="title">
                                                <h5><?= $review->rater_fname.' '.$review->rater_lname ?></h5>
                                                <div class="rateYo"></div>
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
                            <?php 
                                endforeach;
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="vidBlk blk" style="background-image: url('<?= base_url() ?>assets/images/portfolio-02.jpg')"></div>
                        <div class="blk">
                            <div class="_header">
                                <h4>Appearance</h4>
                            </div>
                            <ul class="list">
                                <li>
                                    <div>Body Type</div>
                                    <div><?= $appearence->body_type ?></div>
                                </li>
                                <li>
                                    <div>Eye Color</div>
                                    <div><?= $appearence->eye_color ?></div>
                                </li>
                                <li>
                                    <div>Skin Color</div>
                                    <div><?= $appearence->skin_color ?></div>
                                </li>
                                <li>
                                    <div>Hair Color</div>
                                    <div><?= $appearence->hair_color ?></div>
                                </li>
                                <li>
                                    <div>Hair Length</div>
                                    <div><?= $appearence->hair_length ?></div>
                                </li>
                                <li>
                                    <div>Shoe Size</div>
                                    <div><?= $appearence->shoe_size ?></div>
                                </li>
                                <li>
                                    <div>Jacket Size</div>
                                    <div><?= $appearence->jacket_size ?></div>
                                </li>
                                <li>
                                    <div>Height</div>
                                    <div><?= $appearence->height ?></div>
                                </li>
                                <li>
                                    <div>Weight</div>
                                    <div><?= $appearence->weight ?></div>
                                </li>
                                <li>
                                    <div>Chest/Bust</div>
                                    <div><?= $appearence->chest_bust ?></div>
                                </li>
                                <li>
                                    <div>Cup</div>
                                    <div><?= $appearence->cup ?></div>
                                </li>
                                <li>
                                    <div>Waist</div>
                                    <div><?= $appearence->waist ?></div>
                                </li>
                                <li>
                                    <div>Hip/Inseam</div>
                                    <div><?= $appearence->hip_inseam ?></div>
                                </li>
                                <li>
                                    <div>Ethnicity</div>
                                    <div><?= $appearence->ethnicity ?></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- profile -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>