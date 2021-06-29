<!doctype html>
<html>

<head>
    <title>Educational Videos — Upfront Worldwide Talent Agency</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main formal typical videos>


        <section id="videos">
            <div class="contain">
                <div class="flexRow flex">
                <?php foreach($rows as $row): ?>
                    <div class="col">
                        <div class="blk">
                            <div class="vidBlk popBtn" data-popup="video" data-store="<?= $row->for_embed ?>" style="background-image: url('<?=  get_site_image_src("motivational-videos", $row->thumb, ''); ?>')"></div>
                            <h4><?= $row->title ?></h4>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
            <div class="popup" data-popup="video">
                <div class="tableDv">
                    <div class="tableCell">
                        <div class="crosBtn"></div>
                        <div class="contain">
                            <div id="vidBlk" class="vidBlk inside">
                                <!-- <iframe src="https://www.youtube.com/embed/G3k0qlLag74"></iframe> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- videos -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>