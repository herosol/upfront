<aside>
    <button type="button" class="webBtn blockBtn">
        <em>Dashboard</em>
        <i class="fi-chevron-down fi-2x"></i>
    </button>
    <ul>
        <li class="<?php if ($page == "dashboard") {
                        echo 'active';
                    } ?>">
            <a href="<?= $base_url ?>artist/dashboard.php">
                <img src="<?= base_url() ?>assets/images/icon-pencil.svg" alt="">
                <em>Dashboard</em>
            </a>
        </li>
        <li class="<?php if ($page == "profile-settings") {
                        echo 'active';
                    } ?>">
            <a href="<?= base_url() ?>profile-settings">
                <img src="<?= base_url() ?>assets/images/icon-cog-fill.svg" alt="">
                <em>Profile Settings</em>
            </a>
        </li>
        <li class="<?php if ($page == "bookings") {
                        echo 'active';
                    } ?>">
            <a href="<?= $base_url ?>artist/bookings.php">
                <img src="<?= base_url() ?>assets/images/icon-list.svg" alt="">
                <em>My Bookings</em>
            </a>
        </li>
        <li class="<?php if ($page == "earnings") {
                        echo 'active';
                    } ?>">
            <a href="<?= $base_url ?>artist/earnings.php">
                <img src="<?= base_url() ?>assets/images/icon-earnings.svg" alt="">
                <em>Earnings</em>
            </a>
        </li>
        <li class="<?php if ($page == "calendar") {
                        echo 'active';
                    } ?>">
            <a href="<?= $base_url ?>artist/calendar.php">
                <img src="<?= base_url() ?>assets/images/icon-calendar.svg" alt="">
                <em>My Calendar</em>
            </a>
        </li>
        <li class="<?php if ($page == "payment-method") {
                        echo 'active';
                    } ?>">
            <a href="<?= $base_url ?>artist/payment-method.php">
                <img src="<?= base_url() ?>assets/images/icon-credit-card.svg" alt="">
                <em>Payment Method</em>
            </a>
        </li>
        <li class="<?php if ($page == "signout") {
                        echo 'active';
                    } ?>">
            <a href="<?= $base_url ?>signin.php">
                <img src="<?= base_url() ?>assets/images/icon-signout.svg" alt="">
                <em>Sign out</em>
            </a>
        </li>
    </ul>
</aside>
<!-- aside -->


<script type="text/javascript">
    $(function() {
        $(document).on('click', 'aside > .webBtn', function() {
            $('aside ul').slideToggle();
        });
    });
</script>