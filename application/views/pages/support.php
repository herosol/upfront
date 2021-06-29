<!doctype html>
<html>

<head>
    <title>Help & Support — Upfront Worldwide Talent Agency</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main common typical help>


        <section id="sBanner" style="background-image: url('<?= base_url() ?>assets/images/portfolio-08.jpg');">
            <div class="contain-fluid">
                <div class="content text-center">
                    <h1>What do you need help with?</h1>
                    <div class="txtGrp flexGrp">
                        <img src="<?= base_url() ?>assets/images/icon-search.svg" alt="">
                        <input type="text" class="txtBox dropBtn" placeholder="Try, How to Become a Model">
                        <button type="button" class="webBtn">Search</button>
                        <ul class="dropCnt dropLst">
                            <li><em>Suggestion 1</em></li>
                            <li><em>Suggestion 2</em></li>
                            <li><em>Suggestion 3</em></li>
                            <li><em>Suggestion 4</em></li>
                            <li><em>Suggestion 5</em></li>
                            <li><em>Suggestion 6</em></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- sBanner -->


        <section id="help">
            <div class="contain">
                <h4>Recommended for you</h4>
                <div class="flexRow flex">
                    <div class="col">
                        <div class="inner">
                            <h5>How Upfront Worldwide Talent Agency Works</h5>
                            <ul>
                                <li><a href="<?= $base_url ?>support.php">General account management</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <h5>Using Your Inbox</h5>
                            <ul>
                                <li><a href="<?= $base_url ?>support.php">Order communication</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <h5>I'm having issues with my payment</h5>
                            <ul>
                                <li><a href="<?= $base_url ?>support.php">Payments</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <h5>How do I find a service and get a quote?</h5>
                            <ul>
                                <li><a href="<?= $base_url ?>support.php">Buyer FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <h5>Paying for an Order, an Extra, or a Custom Offer</h5>
                            <ul>
                                <li><a href="<?= $base_url ?>support.php">Buyer order management</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <h5>Account and profile settings</h5>
                            <ul>
                                <li><a href="<?= $base_url ?>support.php">General account management</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <h5>Upfront Worldwide Talent Agency Business FAQs for Freelancers and Agencies</h5>
                            <ul>
                                <li><a href="<?= $base_url ?>support.php">Creating a Upfront Worldwide Talent Agency Business Account</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <h5>Buyer FAQs</h5>
                            <ul>
                                <li><a href="<?= $base_url ?>support.php">General account management</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <h4>Discover More Topics</h4>
                <div class="flexRow flex">
                    <div class="col">
                        <div class="inner">
                            <h5>Order management</h5>
                            <ul>
                                <li><a href="<?= $base_url ?>support.php">Order communication</a></li>
                                <li><a href="<?= $base_url ?>support.php">Buyer FAQs</a></li>
                                <li><a href="<?= $base_url ?>support.php">Buyer order management</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <h5>Payments, Withdrawals, and Invoices</h5>
                            <ul>
                                <li><a href="<?= $base_url ?>support.php">Payments</a></li>
                                <li><a href="<?= $base_url ?>support.php">Payment FAQ's</a></li>
                                <li><a href="<?= $base_url ?>support.php">Invoices</a></li>
                                <li><a href="<?= $base_url ?>support.php">Taxes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <h5>Account and Security</h5>
                            <ul>
                                <li><a href="<?= $base_url ?>support.php">General account management</a></li>
                                <li><a href="<?= $base_url ?>support.php">Creating an account</a></li>
                                <li><a href="<?= $base_url ?>support.php">Account security</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <h5>Upfront Worldwide Talent Agency Business</h5>
                            <ul>
                                <li><a href="<?= $base_url ?>support.php">Creating a Upfront Worldwide Talent Agency Business Account</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <h5>Sellers Hub</h5>
                            <ul>
                                <li><a href="<?= $base_url ?>support.php">Logo Maker</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <h5>Mobile App</h5>
                            <ul>
                                <li><a href="<?= $base_url ?>support.php">Order management</a></li>
                                <li><a href="<?= $base_url ?>support.php">Payments and Withdrawals</a></li>
                                <li><a href="<?= $base_url ?>support.php">Features</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- help -->


        <script type="text/javascript">
            $(function() {
                $(document).on("keypress", "[help] #sBanner .dropBtn", function() {
                    $(this).parent().find(".dropCnt").addClass("active");
                });
            });
        </script>
    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>