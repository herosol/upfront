<!doctype html>
<html>

<head>
    <title>Home — Upfront Worldwide Talent Agency</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main index>


        <section id="banner" class="flexBox" style="background-image: url('<?= base_url() ?>assets/images/portfolio-06.jpg');">
            <div class="flexDv">
                <div class="contain-fluid">
                    <div class="content text-center">
                        <h1>A division of SpeakUp Bev</h1>
                        <p>Remote opportunities, voiceover jobs, self-tape auditions, live webinars, and more.</p>
                        <form action="" method="post">
                            <div class="txtGrp">
                                <label for="" class="">Search by title, skill or company</label>
                                <input type="text" name="" id="" class="txtBox">
                                <img src="<?= base_url() ?>assets/images/icon-search.svg" alt="">
                            </div>
                            <div class="txtGrp">
                                <label for="">City, state or zip code</label>
                                <input type="text" name="" id="" class="txtBox">
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
                    <h1 class="heading">Find What Fascinates You</h1>
                </div>
                <div id="owl-guardian" class="owl-carousel owl-theme owl-guardian">
                    <div class="profBlk">
                        <div class="image"><a href="?"><img src="<?= base_url() ?>/assets/images/stars/1.jpg" alt=""></a></div>
                        <div class="txt">
                            <div class="rateYo"></div>
                            <h4><a href="?">Unlocking Your Potential: 5 Exercises to Build Creative Confidence</a></h4>
                            <p>Emma Gannon</p>
                        </div>
                    </div>
                    <div class="profBlk">
                        <div class="image"><a href="?"><img src="<?= base_url() ?>/assets/images/stars/2.jpg" alt=""></a></div>
                        <div class="txt">
                            <div class="rateYo"></div>
                            <h4><a href="?">Art Journaling for Self-Care: 3 Exercises for Reflection and Growth</a></h4>
                            <p>Amanda Rach Lee</p>
                        </div>
                    </div>
                    <div class="profBlk">
                        <div class="image"><a href="?"><img src="<?= base_url() ?>/assets/images/stars/3.jpg" alt=""></a></div>
                        <div class="txt">
                            <div class="rateYo"></div>
                            <h4><a href="?">Still Life Photography: Capturing Stories of Everyday Objects at Home</a></h4>
                            <p>Thomas Frank</p>
                        </div>
                    </div>
                    <div class="profBlk">
                        <div class="image"><a href="?"><img src="<?= base_url() ?>/assets/images/stars/4.jpg" alt=""></a></div>
                        <div class="txt">
                            <div class="rateYo"></div>
                            <h4><a href="?">Real Productivity: How to Build Habits That Last</a></h4>
                            <p>Gia Graham</p>
                        </div>
                    </div>
                    <div class="profBlk">
                        <div class="image"><a href="?"><img src="<?= base_url() ?>/assets/images/stars/5.jpg" alt=""></a></div>
                        <div class="txt">
                            <div class="rateYo"></div>
                            <h4><a href="?">Hand Lettering in Procreate: Fundamentals to Finishing Touches</a></h4>
                            <p>Sean Dalton</p>
                        </div>
                    </div>
                    <div class="profBlk">
                        <div class="image"><a href="?"><img src="<?= base_url() ?>/assets/images/stars/6.jpg" alt=""></a></div>
                        <div class="txt">
                            <div class="rateYo"></div>
                            <h4><a href="?">Customizing Type with Draplin: Creating Wordmarks That Work</a></h4>
                            <p>Aaron Draplin</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- guardian -->


        <section id="discover">
            <div class="contain-fluid">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="content">
                            <h1 class="heading">Get instant help with your homework</h1>
                            <p>Explore new skills, deepen existing passions, and get lost in creativity. What you find just might surprise and inspire you.</p>
                            <div class="bTn"><a href="?" class="webBtn">Browse Classes</a></div>
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="vidBlk" style="background-image: url('<?= base_url() ?>/assets/images/3.jpg')"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- discover -->


        <section id="category">
            <div class="contain-fluid text-center">
                <div class="content">
                    <h1 class="heading">Featured Models by Category</h1>
                    <p>With so much to explore, real projects to create, and the support of fellow-creatives, Upfront Worldwide Talent Agency empowers you to accomplish real growth.</p>
                </div>
                <div id="owl-topics" class="owl-carousel owl-theme">
                    <div class="inner">
                        <div class="image"><img src="<?= base_url() ?>/assets/images/category/1.jpg" alt=""></div>
                        <div class="txt">
                            <h4>Film</h4>
                        </div>
                    </div>
                    <div class="inner">
                        <div class="image"><img src="<?= base_url() ?>/assets/images/category/2.jpg" alt=""></div>
                        <div class="txt">
                            <h4>Photography</h4>
                        </div>
                    </div>
                    <div class="inner">
                        <div class="image"><img src="<?= base_url() ?>/assets/images/category/3.jpg" alt=""></div>
                        <div class="txt">
                            <h4>Theater</h4>
                        </div>
                    </div>
                    <div class="inner">
                        <div class="image"><img src="<?= base_url() ?>/assets/images/category/4.jpg" alt=""></div>
                        <div class="txt">
                            <h4>Voiceover</h4>
                        </div>
                    </div>
                    <div class="inner">
                        <div class="image"><img src="<?= base_url() ?>/assets/images/category/5.jpg" alt=""></div>
                        <div class="txt">
                            <h4>Modeling</h4>
                        </div>
                    </div>
                    <div class="inner">
                        <div class="image"><img src="<?= base_url() ?>/assets/images/category/6.jpg" alt=""></div>
                        <div class="txt">
                            <h4>TV</h4>
                        </div>
                    </div>
                    <div class="inner">
                        <div class="image"><img src="<?= base_url() ?>/assets/images/category/7.jpg" alt=""></div>
                        <div class="txt">
                            <h4>Music</h4>
                        </div>
                    </div>
                    <div class="inner">
                        <div class="image"><img src="<?= base_url() ?>/assets/images/category/8.jpg" alt=""></div>
                        <div class="txt">
                            <h4>Kids</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- category -->


        <section id="viewing">
            <div class="contain-fluid">
                <div class="content text-center">
                    <h1 class="heading">Stars are viewing</h1>
                </div>
                <div id="owl-viewing" class="owl-carousel owl-theme owl-guardian">
                    <div class="profBlk">
                        <div class="image"><a href="?"><img src="<?= base_url() ?>/assets/images/stars/5.jpg" alt=""></a></div>
                        <div class="txt">
                            <div class="rateYo"></div>
                            <h4><a href="?">Hand Lettering in Procreate: Fundamentals to Finishing Touches</a></h4>
                            <p>Sean Dalton</p>
                        </div>
                    </div>
                    <div class="profBlk">
                        <div class="image"><a href="?"><img src="<?= base_url() ?>/assets/images/stars/6.jpg" alt=""></a></div>
                        <div class="txt">
                            <div class="rateYo"></div>
                            <h4><a href="?">Customizing Type with Draplin: Creating Wordmarks That Work</a></h4>
                            <p>Aaron Draplin</p>
                        </div>
                    </div>
                    <div class="profBlk">
                        <div class="image"><a href="?"><img src="<?= base_url() ?>/assets/images/stars/9.jpg" alt=""></a></div>
                        <div class="txt">
                            <div class="rateYo"></div>
                            <h4><a href="?">Unlocking Your Potential: 5 Exercises to Build Creative Confidence</a></h4>
                            <p>Emma Gannon</p>
                        </div>
                    </div>
                    <div class="profBlk">
                        <div class="image"><a href="?"><img src="<?= base_url() ?>/assets/images/stars/10.jpg" alt=""></a></div>
                        <div class="txt">
                            <div class="rateYo"></div>
                            <h4><a href="?">Art Journaling for Self-Care: 3 Exercises for Reflection and Growth</a></h4>
                            <p>Amanda Rach Lee</p>
                        </div>
                    </div>
                    <div class="profBlk">
                        <div class="image"><a href="?"><img src="<?= base_url() ?>/assets/images/stars/3.jpg" alt=""></a></div>
                        <div class="txt">
                            <div class="rateYo"></div>
                            <h4><a href="?">Still Life Photography: Capturing Stories of Everyday Objects at Home</a></h4>
                            <p>Thomas Frank</p>
                        </div>
                    </div>
                    <div class="profBlk">
                        <div class="image"><a href="?"><img src="<?= base_url() ?>/assets/images/stars/4.jpg" alt=""></a></div>
                        <div class="txt">
                            <div class="rateYo"></div>
                            <h4><a href="?">Real Productivity: How to Build Habits That Last</a></h4>
                            <p>Gia Graham</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- viewing -->


        <section id="customer">
            <div class="contain-fluid">
                <div class="content text-center">
                    <h1 class="heading">Take their words for it</h1>
                    <p>Move your creative journey forward without putting life on hold. Upfront Worldwide Talent Agency helps you find inspiration that fits your routine.</p>
                </div>
                <div class="flexRow flex">
                    <div class="col">
                        <div class="inner">
                            <div class="image"><img src="<?= base_url() ?>/assets/images/stars/1.jpg" alt=""></div>
                            <div class="txt">
                                <h4>Angela M.</h4>
                                <p>“I've been with Elephant for many years now and have had no bad experiences at all! Only great experiences and customer service!”</p>
                                <div class="rateYo"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="image"><img src="<?= base_url() ?>/assets/images/stars/2.jpg" alt=""></div>
                            <div class="txt">
                                <h4>Kevin D.</h4>
                                <p>“Your staff are exceptional! Doesn't matter whether it's an on-line chat or directly on the phone they're always courteous, helpful, and so easy to deal with.”</p>
                                <div class="rateYo"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="image"><img src="<?= base_url() ?>/assets/images/stars/3.jpg" alt=""></div>
                            <div class="txt">
                                <h4>Cathy G.</h4>
                                <p>“Elephant is a great affordable insurance company, it's easy to make changes online and if I have trouble the agents are very helpful!”</p>
                                <div class="rateYo"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- customer -->


        <!-- <section id="match">
            <div class="contain-fluid">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="member member1">
                            <div class="ico"><img src="<?= base_url() ?>/assets/images/users/2.jpg" alt=""></div>
                            <div class="txt">Thanks for inviting me to apply. I'm eager to get started!</div>
                        </div>
                        <div class="member member2">
                            <div class="ico"><img src="<?= base_url() ?>/assets/images/users/3.jpg" alt=""></div>
                            <div class="txt">Great! That's a fantastic idea.</div>
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="content">
                            <h1 class="secHeading">Find the perfect match fast</h1>
                            <p>Start your job in hours, not weeks. Get a shortlist of skilled freelancers instantly, tapping into our hiring know-how and matching technology. Interview favorites online and hire with the click of a button.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- match -->


        <section id="affiliate">
            <div class="contain text-center">
                <div class="content">
                    <h1 class="heading">Land your perfect role</h1>
                    <p>Unlimited submissions, best-in-class casting tools, and more performance roles than any other casting service.</p>
                </div>
                <div class="flexRow flex">
                    <div class="col">
                        <div class="inner blk">
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-online-classes.svg" alt=""></div>
                            <div class="txt">
                                <h4>35,000+ Online Creators</h4>
                                <p>Find the best creators and stars for your audience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner blk">
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-projects.svg" alt=""></div>
                            <div class="txt">
                                <h4>60,000+ Creators Projects</h4>
                                <p>Showcase creative work created by Upfront Worldwide creators.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner blk">
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-cookie.svg" alt=""></div>
                            <div class="txt">
                                <h4>30-Day Cookie</h4>
                                <p>Earn commission for each new reader you refer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- affiliate -->


        <section id="creator">
            <div class="contain-fluid text-center">
                <div class="content">
                    <h1 class="heading">Upfront Real Creators</h1>
                    <p>Upfront Worldwide Talent Agency models are icons, experts, and industry rock stars excited to share their experience, wisdom, and trusted tools with you.</p>
                </div>
                <div class="flexRow flex">
                    <div class="col">
                        <div class="profBlk">
                            <div class="ico"><a href="?"><img src="<?= base_url() ?>/assets/images/users/1.jpg" alt=""></a></div>
                            <div class="txt">
                                <div class="rateYo"></div>
                                <h4><a href="?">Bonnie Christine</a></h4>
                                <p>Artist & Fabric Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="profBlk">
                            <div class="ico"><a href="?"><img src="<?= base_url() ?>/assets/images/users/2.jpg" alt=""></a></div>
                            <div class="txt">
                                <div class="rateYo"></div>
                                <h4><a href="?">DKNG Studios</a></h4>
                                <p>Illustrators</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="profBlk">
                            <div class="ico"><a href="?"><img src="<?= base_url() ?>/assets/images/users/3.jpg" alt=""></a></div>
                            <div class="txt">
                                <div class="rateYo"></div>
                                <h4><a href="?">Emily Henderson</a></h4>
                                <p>Stylist & Author</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="profBlk">
                            <div class="ico"><a href="?"><img src="<?= base_url() ?>/assets/images/users/4.jpg" alt=""></a></div>
                            <div class="txt">
                                <div class="rateYo"></div>
                                <h4><a href="?">Debbie Millman</a></h4>
                                <p>Designer & Writer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="profBlk">
                            <div class="ico"><a href="?"><img src="<?= base_url() ?>/assets/images/users/5.jpg" alt=""></a></div>
                            <div class="txt">
                                <div class="rateYo"></div>
                                <h4><a href="?">Brandon Woelfel</a></h4>
                                <p>Photographer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- creator -->


        <section id="intro">
            <div class="contain-fluid">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="image"><img src="<?= base_url() ?>/assets/images/home-women.jpg" alt=""></div>
                    </div>
                    <div class="col col2">
                        <div class="content">
                            <h1 class="heading">Become a Model</h1>
                            <p>Top instructors from around the world teach millions of stars on Upfront Worldwide Talent Agency. We provide the tools and skills to teach what you love.</p>
                            <div class="bTn"><a href="<?= base_url() ?>become-a-model" class="webBtn">Get started now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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