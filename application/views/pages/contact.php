<!doctype html>
<html>

<head>
    <title><?= !empty($site_content['page_title']) ? $site_content['page_title'].' - ' : 'Contact Us - '?><?= $site_settings->site_name?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main formal typical contact>


        <section id="contact">
            <div class="contain text-center">
                <div class="content">
                    <h2 class="heading"><?= $site_content['first_heading']?></h2>
                    <p><?= $site_content['detail']?></p>
                </div>
                <form action="" method="post">
                    <h3 class="heading"><?= $site_content['second_heading']?></h3>
                    <div class="row formRow">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                            <div class="txtGrp">
                                <label for="">Name</label>
                                <input type="text" name="" id="" class="txtBox">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                            <div class="txtGrp">
                                <label for="">Phone</label>
                                <input type="text" name="" id="" class="txtBox">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                            <div class="txtGrp">
                                <label for="">Subject</label>
                                <input type="text" name="" id="" class="txtBox">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                            <div class="txtGrp">
                                <label for="">Email Address</label>
                                <input type="text" name="" id="" class="txtBox">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                            <div class="txtGrp">
                                <label for="">Comments</label>
                                <textarea name="" id="" class="txtBox"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="bTn formBtn"><button type="submit" class="webBtn">Submit <i class="fi-arrow-right"></i></button></div>
                </form>
            </div>
        </section>
        <!-- contact -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>