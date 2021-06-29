<!doctype html>
<html>

<head>
<title><?= !empty($site_content['page_title']) ? $site_content['page_title'].' - ' : 'How it works - '?><?= $site_settings->site_name?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main common typical works>


        <section id="business">
            <div class="contain">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="image"><img src="<?= !empty($site_content['image']) ? base_url().UPLOAD_PATH.'pages/how-it-works/'.$site_content['image'] : 'http://placehold.it/3000x1000'?>"></div>
                    </div>
                    <div class="col col2">
                        <div class="content ckEditor">
                            <h2 class="heading"><?= $site_content['first_heading'] ?></h2>
                            <h4><?= $site_content['first_subheading'] ?></h4>
                            <?= $site_content['first_detail'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- business -->


        <section id="works">
            <div class="contain">
                <div class="content text-center">
                    <h2 class="heading"><?= $site_content['second_heading'] ?></h2>
                </div>
                <div class="flexRow flex ckEditor">
                <?php for($i=1; $i<=6; $i++): ?>
                    <div class="col">
                        <div class="inner">
                            <div class="icon"><img src="<?= !empty($site_content['second_image'.$i]) ? base_url().UPLOAD_PATH.'pages/how-it-works/'.$site_content['second_image'.$i] : 'http://placehold.it/3000x1000'?>"></div>
                            <div class="txt">
                                <h4><?= $site_content['image_heading'.$i] ?></h4>
                                <?= $site_content['second_text'.$i] ?>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
                </div>
            </div>
        </section>
        <!-- works -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>