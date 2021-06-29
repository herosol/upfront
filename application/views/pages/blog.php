<!doctype html>
<html>

<head>
    <title><?= !empty($site_content['page_title']) ? $site_content['page_title'].' - ' : 'Blog Articles - '?><?= $site_settings->site_name?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main common blog>


        <section id="blog">
            <div class="contain">
                <?php 
                $check = 0;
                foreach($recent_blogs as $blog):
                    if($check != 0)
                    {
                        break;
                    }
                ?>
                    <div class="newsBlk mainBlk">
                        <div class="image"><a href="<?= base_url() ?>blog-detail/<?=$blog->id?>"><img src="<?=  get_site_image_src("blog", $blog->image, ''); ?>" alt=""></a></div>
                        <div class="txt">
                            <div class="ctgry"><?= blog_cat_by_id($blog->cat_id) ?></div>
                            <h2><a href="<?= base_url() ?>blog-detail/<?=$blog->id?>"><?= $blog->title ?></a></h2>
                            <?= $blog->detail ?>
                            <div class="date"><?= format_date($blog->date)?></div>
                        </div>
                    </div>
                <?php
                $check++;
                endforeach;
                ?>
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="flexRow flex">
                        <?php 
                        $check = 0;
                        foreach($recent_blogs as $blog):
                            if($check != 0):
                        ?>
                                <div class="col">
                                    <div class="newsBlk">
                                        <div class="image"><a href="<?= base_url() ?>blog-detail/<?=$blog->id?>"><img src="<?=  get_site_image_src("blog", $blog->image, ''); ?>" alt=""></a></div>
                                        <div class="txt">
                                            <div class="ctgry"><?= blog_cat_by_id($blog->cat_id) ?></div>
                                            <h4><a href="<?= base_url() ?>blog-detail/<?=$blog->id?>"><?= $blog->title ?></a></h4>
                                            <div class="date"><?= format_date($blog->date)?></div>
                                        </div>
                                    </div>
                                </div>
                        <?php 
                            endif;
                            $check++;
                        endforeach;
                        ?>
                        </div>
                    </div>
                    <div class="col col2">
                        <ul class="articleLst flex">
                        <?php foreach($rows as $blog): ?>
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
                    <form action="" method="post">
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