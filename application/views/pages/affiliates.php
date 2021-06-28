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
                    <h2 class="heading"><?= $site_content['heading'] ?></h2>
                </div>
                <div class="flexRow flex">
                <?php foreach($cards as $row): ?>
                    <div class="col">
                        <div class="inner blk">
                            <div class="icon"><img src="<?= base_url().UPLOAD_PATH ?>pages/affiliates/<?=$row->image?>" alt=""></div>
                            <div class="txt">
                                <h4><?=$row->heading?></h4>
                                <p><?=$row->description?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- affiliate -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>