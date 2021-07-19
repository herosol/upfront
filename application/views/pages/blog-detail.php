<!doctype html>
<html>

<head>
<title><?= !empty($site_content['page_title'])?$site_content['page_title'].' - ':'Blog Detail - '?><?= $site_settings->site_name?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main common blog>


        <section id="blog">
            <div class="contain">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="newsBlk">
                            <div class="image"><img src="<?=  get_site_image_src("blog", $row->image, ''); ?>" alt=""></div>
                            <div class="txt">
                                <div class="ctgry"><?= blog_cat_by_id($row->cat_id) ?></div>
                                <h2><?= $row->title ?></h2>
                                <div class="date"><?= format_date($row->date)?></div>
                                    <?= $row->detail ?>
                                </div>
                        </div>
                    </div>
                    <div class="col col2">
                        <ul class="articleLst flex">
                        <?php foreach($recent_blogs as $blog): ?>
                            <li>
                                <div class="articleBlk">
                                    <div class="ico"><a href="<?= base_url() ?>blog-detail/<?=$blog->id?>"><img src="<?=  get_site_image_src("blog", $blog->image, '300p_'); ?>" alt=""></a></div>
                                    <div class="txt">
                                        <h5><a href="<?= base_url() ?>blog-detail/<?=$blog->id?>"><?= $blog->title ?></a></h5>
                                        <div class="date"><?= format_date($blog->date)?></div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="blk">
                    <h4>Subscribe for more weekly latest new letters</h4>
                    <form action="<?= base_url('newsletter')?>" method="post" autocomplete="off" class="frmAjax" id="newsletterFrm">
                        <div class="alertMsg" style="display:none"></div>
                        <label for="email">Subscribe for more weekly latest new letters</label>
                        <div class="txtGrp flexGrp">
                            <label for="">@ your email address</label>
                            <input type="text" name="email" id="email" class="txtBox">
                            <button type="submit" class="webBtn">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- blog -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>