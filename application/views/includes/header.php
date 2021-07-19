<header class="ease">
    <div class="contain-fluid">
        <div class="logo">
            <a href="<?= base_url() ?>">
                <img src="<?= base_url() ?>assets/images/logo.png" alt="">
            </a>
        </div>
        <div class="toggle"><span></span></div>
        <nav class="ease">
            <div nav>
                <ul id="nav">
                    <li class="<?php if ($page == "" || $page == "home") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= base_url() ?>">Home</a>
                    </li>
                    <?php if($this->session->userdata('user_type') == '' || $this->session->userdata('user_type') != 'model'):?>
                    <li class="<?php if ($page == "become-a-model") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= base_url() ?>become-a-model">Become a Model</a>
                    </li>
                    <?php endif; ?>
                    <li class="<?php if ($page == "help") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= base_url() ?>help">Help</a>
                    </li>
                </ul>
                <?php if(empty($this->session->user_id)): ?>
                    <ul id="cta">
                        <li class="<?php if ($page == "signin") {
                                        echo 'active';
                                    } ?>">
                            <a href="<?= base_url() ?>signin">Sign in</a>
                        </li>
                        <li class="<?php if ($page == "signup") {
                                        echo 'active';
                                    } ?>">
                            <a href="<?= base_url() ?>signup" class="webBtn mdBtn">Sign up now</a>
                        </li>
                    </ul>
                <?php endif; ?>
            </div>
            <?php if(!empty($this->session->user_id)): ?>
                <div class="proIco dropDown">
                    <div class="ico dropBtn"><img src="<?= get_site_image_src("members", $mem_data->mem_image, ''); ?>" alt=""></div>
                    <div class="proDrop dropCnt">
                        <ul class="dropLst">
                            <li><a href="<?= base_url() ?>dashboard">Dashboard <small>See and Manage Data</small></a></li>
                            <li><a href="<?= base_url() ?>inbox">Messages <small>Have a Friendly Exchange</small></a></li>
                            <li><a href="<?= base_url() ?>profile-settings">Profile Settings <small>Personal Information Settings</small></a></li>
                            <li><a href="<?= base_url() ?>bookings">My Bookings <small>View Bookings Details</small></a></li>
                            <li><a href="<?= base_url() ?>earnings">Earnings <small>Status of your Payouts</small></a></li>
                            <li><a href="<?= base_url() ?>my-calender">My Calendar <small>Maintain a regular Schedule</small></a></li>
                            <li class="hidden"><a href="<?= base_url() ?>payment-methods">Payment Method <small>Credit card or PayPal accounts</small></a></li>
                            <li><a href="<?= base_url() ?>index/logout">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
        </nav>
        <div class="clearfix"></div>
    </div>
</header>
<!-- header -->


<div class="upperlay"></div>
<div id="pageloader">
    <span class="loader"></span>
</div>