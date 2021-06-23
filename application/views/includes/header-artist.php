<header class="ease">
    <div class="contain-fluid">
        <div class="logo">
            <a href="<?= $base_url ?>index.php">
                <img src="<?= base_url() ?>assets/images/logo.png" alt="">
            </a>
        </div>
        <div class="toggle"><span></span></div>
        <nav class="ease">
            <div nav>
                <ul id="nav">
                    <li class="<?php if ($page == "index") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= $base_url ?>index.php">Home</a>
                    </li>
                    <li class="<?php if ($page == "become-a-mentor") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= $base_url ?>become-a-model.php">Become a Model</a>
                    </li>
                    <li class="<?php if ($page == "support") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= $base_url ?>support.php">Help</a>
                    </li>
                </ul>
            </div>
            <ul id="iconBtn">
                <li id="chatBtn">
                    <a href="<?= $base_url ?>artist/messages.php" class="iconBtn">
                        <img src="<?= base_url() ?>assets/images/icon-envelope.svg" alt="">
                        <em class="miniLbl green">0</em>
                    </a>
                </li>
                <li id="likeBtn">
                    <a href="<?= $base_url ?>artist/notifications.php" class="iconBtn">
                        <img src="<?= base_url() ?>assets/images/icon-bell.svg" alt="">
                        <em class="miniLbl yellow">0</em>
                    </a>
                </li>
            </ul>
            <div class="proIco dropDown">
                <div class="ico dropBtn"><img src="<?= base_url() ?>assets/images/users/3.jpg" alt=""></div>
                <div class="proDrop dropCnt">
                    <ul class="dropLst">
                        <li><a href="<?= $base_url ?>artist/dashboard.php">Dashboard <small>See and Manage Data</small></a></li>
                        <!-- <li><a href="<?= $base_url ?>artist/messages.php">Messages <small>Have a Friendly Exchange</small></a></li> -->
                        <li><a href="<?= $base_url ?>artist/profile-settings.php">Profile Settings <small>Personal Information Settings</small></a></li>
                        <li><a href="<?= $base_url ?>artist/bookings.php">My Bookings <small>View Bookings Details</small></a></li>
                        <li><a href="<?= $base_url ?>artist/earnings.php">Earnings <small>Status of your Payouts</small></a></li>
                        <li><a href="<?= $base_url ?>artist/calendar.php">My Calendar <small>Maintain a regular Schedule</small></a></li>
                        <li><a href="<?= $base_url ?>artist/payment-method.php">Payment Method <small>Credit card or PayPal accounts</small></a></li>
                        <li><a href="<?= $base_url ?>signin.php">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="clearfix"></div>
    </div>
</header>
<!-- header -->


<!-- <div class="upperlay"></div> -->
<!-- <div id="pageloader">
    <span class="loader"></span>
</div> -->