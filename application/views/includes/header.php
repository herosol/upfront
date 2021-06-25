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
                    <li class="<?php if ($page == "index") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= base_url() ?>">Home</a>
                    </li>
                    <li class="<?php if ($page == "become-a-mentor") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= base_url() ?>become-a-model">Become a Model</a>
                    </li>
                    <li class="<?php if ($page == "support") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= base_url() ?>help">Help</a>
                    </li>
                </ul>
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