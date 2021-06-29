<!doctype html>
<html>

<head>
    <title>Dashboard — Upfront Worldwide Talent Agency</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-artist'); ?>
    <main formal dash>
        <?php $this->load->view('includes/sidebar-artist'); ?>


        <section id="dash">
            <div class="contain-fluid">
            <?php if($mem_data->mem_verified == 0):?>
                <div id="verify">
                    <div class="inBlk blk">
                        <h3 class="heading">Email Verification</h3>
                        <div id="resndCntnt">
                            <p>Please verify your email address, We've sent a verify email to your email address. If you don't see the email, check your spam folder. If you didn't get email click on resend email link, or if you want to change email address click link below.</p>
                            <p><a href="javascript:void(0)" id="rsnd-email">Resend Email</a> OR <a href="javascript:void(0)" class="popBtn" data-popup="change-email">Change Email</a>
                            </p>
                        </div>
                        <div class="appLoad">
                            <div class="appLoader"><span class="spiner"></span></div>
                        </div>
                        <div class="popup small-popup" data-popup="change-email">
                            <div class="tableDv">
                                <div class="tableCell">
                                    <div class="contain">
                                        <div class="_inner">
                                            <div class="crosBtn"></div>
                                            <h4>Change your Email</h4>
                                            <form action="<?= base_url() ?>account/change_email" method="post" autocomplete="off" class="frmAjax" id="frmChangeEmail">
                                                <div class="txtGrp">
                                                    <label for="email">Email Address</label>
                                                    <input type="email" id="email" name="email" class="txtBox">
                                                </div>
                                                <div class="bTn text-center mb-1">
                                                    <button type="submit" class="webBtn">Change your Email</button>
                                                </div>
                                                <br>
                                                <div class="alertMsg" style="display:none"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
                <div class="blk topBlk">
                    <div class="ico"><img src="<?= base_url() ?>assets/images/users/3.jpg" alt=""></div>
                    <div class="txt">
                        <h3><span class="regular">Welcome,</span> Dear, <?= $mem_data->user_fname . ' ' . $mem_data->user_lname ?>! <span class="regular">Nice to see you again.</span></h3>
                    </div>
                    <div class="bTn">
                        <a href="<?= $base_url ?>artist/profile-settings.php" class="webBtn mdBtn">Edit Info</a>
                    </div>
                </div>
                <?php if ($this->session->user_type != 'user') : ?>
                    <h4>Upcoming Bookings</h4>
                    <div class="bookBlk">
                        <ul class="lst">
                            <li>
                                <div class="icoBlk">
                                    <div class="ico"><img src="<?= $base_url ?>images/stars/1.jpg" alt=""></div>
                                    <div class="txt">
                                        <h5>Educated is even better than you’ve heard</h5>
                                        <p>214243</p>
                                    </div>
                                    <a href="<?= $base_url ?>artist/booking-detail.php"></a>
                                </div>
                            </li>
                            <li class="date">March 20, 2019 - 5:20 pm</li>
                            <li><span class="badge yellow">Pending</span></li>
                            <li class="price">$250</li>
                        </ul>
                    </div>
                    <div class="bookBlk">
                        <ul class="lst">
                            <li>
                                <div class="icoBlk">
                                    <div class="ico"><img src="<?= $base_url ?>images/stars/2.jpg" alt=""></div>
                                    <div class="txt">
                                        <h5>How to handle a national crisis</h5>
                                        <p>214243</p>
                                    </div>
                                    <a href="<?= $base_url ?>artist/booking-detail.php"></a>
                                </div>
                            </li>
                            <li class="date">March 20, 2019 - 5:20 pm</li>
                            <li><span class="badge yellow">Pending</span></li>
                            <li class="price">$220</li>
                        </ul>
                    </div>
                    <div class="bookBlk">
                        <ul class="lst">
                            <li>
                                <div class="icoBlk">
                                    <div class="ico"><img src="<?= $base_url ?>images/stars/3.jpg" alt=""></div>
                                    <div class="txt">
                                        <h5>This partnership helped prevent 13 million deaths</h5>
                                        <p>214243</p>
                                    </div>
                                    <a href="<?= $base_url ?>artist/booking-detail.php"></a>
                                </div>
                            </li>
                            <li class="date">March 20, 2019 - 5:20 pm</li>
                            <li><span class="badge yellow">Pending</span></li>
                            <li class="price">$150</li>
                        </ul>
                    </div>
                    <div class="bookBlk">
                        <ul class="lst">
                            <li>
                                <div class="icoBlk">
                                    <div class="ico"><img src="<?= $base_url ?>images/stars/4.jpg" alt=""></div>
                                    <div class="txt">
                                        <h5>What you can do to fight climate change</h5>
                                        <p>214243</p>
                                    </div>
                                    <a href="<?= $base_url ?>artist/booking-detail.php"></a>
                                </div>
                            </li>
                            <li class="date">March 20, 2019 - 5:20 pm</li>
                            <li><span class="badge yellow">Pending</span></li>
                            <li class="price">$250</li>
                        </ul>
                    </div>
                    <div class="bookBlk">
                        <ul class="lst">
                            <li>
                                <div class="icoBlk">
                                    <div class="ico"><img src="<?= $base_url ?>images/stars/5.jpg" alt=""></div>
                                    <div class="txt">
                                        <h5>How do we move around in a zero-carbon world?</h5>
                                        <p>214243</p>
                                    </div>
                                    <a href="<?= $base_url ?>artist/booking-detail.php"></a>
                                </div>
                            </li>
                            <li class="date">March 20, 2019 - 5:20 pm</li>
                            <li><span class="badge yellow">Pending</span></li>
                            <li class="price">$220</li>
                        </ul>
                    </div>
                    <div class="bookBlk">
                        <ul class="lst">
                            <li>
                                <div class="icoBlk">
                                    <div class="ico"><img src="<?= $base_url ?>images/stars/6.jpg" alt=""></div>
                                    <div class="txt">
                                        <h5>5 good books for a lousy year</h5>
                                        <p>214243</p>
                                    </div>
                                    <a href="<?= $base_url ?>artist/booking-detail.php"></a>
                                </div>
                            </li>
                            <li class="date">March 20, 2019 - 5:20 pm</li>
                            <li><span class="badge yellow">Pending</span></li>
                            <li class="price">$150</li>
                        </ul>
                    </div>
                    <div class="bookBlk">
                        <ul class="lst">
                            <li>
                                <div class="icoBlk">
                                    <div class="ico"><img src="<?= $base_url ?>images/stars/7.jpg" alt=""></div>
                                    <div class="txt">
                                        <h5>Mealtime Conversations – Bangladesh</h5>
                                        <p>214243</p>
                                    </div>
                                    <a href="<?= $base_url ?>artist/booking-detail.php"></a>
                                </div>
                            </li>
                            <li class="date">March 20, 2019 - 5:20 pm</li>
                            <li><span class="badge yellow">Pending</span></li>
                            <li class="price">$250</li>
                        </ul>
                    </div>
                    <div class="bookBlk">
                        <ul class="lst">
                            <li>
                                <div class="icoBlk">
                                    <div class="ico"><img src="<?= $base_url ?>images/stars/8.jpg" alt=""></div>
                                    <div class="txt">
                                        <h5>Here’s a way you can help fight Alzheimer’s</h5>
                                        <p>214243</p>
                                    </div>
                                    <a href="<?= $base_url ?>artist/booking-detail.php"></a>
                                </div>
                            </li>
                            <li class="date">March 20, 2019 - 5:20 pm</li>
                            <li><span class="badge yellow">Pending</span></li>
                            <li class="price">$220</li>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </section>
        <!-- dash -->
        <script type="text/javascript" src="<?= base_url('assets/js/custom-validations.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/js/custom.js') ?>"></script>
        <script>
            $(function ()
            {
                $(document).on('click','#rsnd-email',function(e){
                    e.preventDefault();

                    var btn=$(this);
                    if (btn.data("disabled"))
                        return false;
                    $("#resndCntnt").addClass('hide');
                    $('.appLoad').removeClass('hide');

                    btn.data("disabled", "disabled");
                    $.ajax({
                        url: base_url+'resend-email',
                        data : {'cmd':'resend'},
                        dataType: 'JSON',
                        method: 'POST',
                        success: function (rs) {
                            $('#resndCntnt').find('.alertMsg').remove().end().append(rs.msg);
                        },
                        complete: function(){
                            btn.removeData("disabled");
                            setTimeout(function(){
                                $('.appLoad').addClass('hide');
                                $('#resndCntnt').removeClass('hide');
                            },1500)
                        }
                    })
                })
            })
        </script>


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>