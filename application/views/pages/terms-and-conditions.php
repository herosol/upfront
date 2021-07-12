<!doctype html>
<html>

<head>
    <title><?= !empty($site_content['page_title']) ? $site_content['page_title'].' - ' : 'Cookie Policy - '?><?= $site_settings->site_name?></title> 
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main formal typical terms>


        <section id="terms">
            <div class="contain">
                <h4 class="heading"><?= $site_content['heading']?></h4>
                <div class="blk ckEditor">
                    <?= $content_row->full_code?>
                </div>
            </div>
        </section>
        <!-- terms -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>