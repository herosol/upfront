<footer>
    <div class="contain-fluid">
        <div class="flexRow flex">
            <div class="col">
                <h5>Discover</h5>
                <ul class="lst">
                    <li><a href="<?= base_url() ?>find">Find a Model</a></li>
                    <li><a href="<?= base_url() ?>become-a-model">Become a Model</a></li>
                    <li><a href="<?= base_url() ?>find">Online Auditions</a></li>
                    <li><a href="<?= base_url() ?>affiliates">Affiliates</a></li>
                    <li><a href="#">Learning Resources</a></li>
                </ul>
            </div>
            <div class="col">
                <h5>My Account</h5>
                <ul class="lst">
                    <li><a href="<?= base_url() ?>signin">Sign in</a></li>
                    <li><a href="<?= base_url() ?>profile-settings">Profile Settings</a></li>
                    <li><a href="<?= base_url() ?>inbox">My Inbox</a></li>
                    <li><a href="#">My Favorites</a></li>
                </ul>
            </div>
            <div class="col">
                <h5>About us</h5>
                <ul class="lst">
                    <li><a href="<?= base_url() ?>about-us">About us</a></li>
                    <li><a href="<?= base_url() ?>how-it-works">How it works</a></li>
                    <li><a href="<?= base_url() ?>educational-videos">Educational Videos</a></li>
                    <li><a href="<?= base_url() ?>blog">Blog Articles</a></li>
                    <li><a href="<?= base_url() ?>help">Help & Support</a></li>
                    <li><a href="<?= base_url() ?>contact-us">Contact us</a></li>
                </ul>
            </div>
            <div class="col">
                <h5>Policies</h5>
                <ul class="lst">
                    <li><a href="<?= base_url() ?>cookie-policy">Cookies</a></li>
                    <li><a href="<?= base_url() ?>privacy-policy">Privacy Policy</a></li>
                    <li><a href="<?= base_url() ?>disclaimers">Disclaimers</a></li>
                </ul>
            </div>
            <div class="col">
                <h5>Join our mailing list</h5>
                <form action="newsletter" method="post" autocomplete="off" class="">
                    <label for="email">Stay up to date with the latest news and deals!</label>
                    <div class="txtGrp relative">
                        <label for="">@ your email address</label>
                        <input type="email" name="email" id="email" class="txtBox" required="">
                        <button type="submit"><i class="fi-arrow-right fi-2x"></i></button>
                    </div>
                </form>
                <h5>Follow us</h5>
                <ul class="social flex">
                    <li><a href="<?= $site_settings->site_instagram ?>"><img src="<?= base_url() ?>assets/images/social-instagram.svg" alt=""></a></li>
                    <li><a href="<?= $site_settings->site_facebook ?>"><img src="<?= base_url() ?>assets/images/social-facebook.svg" alt=""></a></li>
                    <li><a href="<?= $site_settings->site_youtube ?>"><img src="<?= base_url() ?>assets/images/social-youtube.svg" alt=""></a></li>
                    <li><a href="<?= $site_settings->site_twitter ?>"><img src="<?= base_url() ?>assets/images/social-twitter.svg" alt=""></a></li>
                    <li><a href="#"><img src="<?= base_url() ?>assets/images/social-email.svg" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright relative">
        <div class="contain-fluid">
            <div class="inner">
                <p>Copyright © 2021 <a href="<?= base_url() ?>">Upfront Worldwide Talent Agency</a>. All rights reserved.</p>
                <ul class="smLst flex">
                    <li><a href="<?= base_url() ?>privacy-policy">Privacy Policy</a></li>
                    <li><a href="<?= base_url() ?>terms-and-conditions">Terms & Conditions</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- footer -->


<!-- Main Js -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/main.js"></script>