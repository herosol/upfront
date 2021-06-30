<div class="sidebar-menu">
    <div class="sidebar-menu-inner">
        <header class="logo-env">
            <!-- logo -->
            <div class="logo">
                <a href="<?=site_url(ADMIN.'/dashboard')?>">
                    <img src="<?= SITE_IMAGES.'/images/'.$adminsite_setting->site_logo ?>" width="120" alt="">
                </a>
            </div>
            <!-- logo collapse icon -->
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                    <i class="entypo-menu"></i>
                </a>
            </div>
            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                    <i class="entypo-menu"></i>
                </a>
            </div>
        </header>
        <ul id="main-menu" class="main-menu">
            <li class="opened <?= ($this->uri->segment(2) == 'dashboard') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/dashboard') ?>">
                    <i class="entypo-gauge"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <?php if(access(6)):?>
                <li class=" <?= ($this->uri->segment(2) == 'blog') ? ' opened  active' : '' ?>">
                    <a href="javascript:void(0)">
                        <i class="fa fa-th"></i>
                        <span class="title">Blog Management</span>
                    </a>
                    <ul>
                        <li class=" <?= in_array($this->uri->segment(3), array('manage')) ? ' active' : '' ?>">
                            <a href="<?= site_url(ADMIN.'/blog') ?>">
                                <i class="fa fa-th-list"></i>
                                <span class="title">Blog Articles</span>
                            </a>
                        </li>
                        <li class=" <?= ($this->uri->segment(3) == 'blog/categories') ? ' active' : '' ?>">
                            <a href="<?= site_url(ADMIN.'/blog/categories') ?>">
                                <i class="fa fa-th-list"></i>
                                <span class="title">Categories</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php endif?>
            <?php if(access(6)):?>
                <li class=" <?= ($this->uri->segment(2) == 'topics') ? ' opened  active' : '' ?>">
                    <a href="javascript:void(0)">
                        <i class="fa fa-th"></i>
                        <span class="title">Topics Management</span>
                    </a>
                    <ul>
                        <li class=" <?= in_array($this->uri->segment(3), array('manage')) ? ' active' : '' ?>">
                            <a href="<?= site_url(ADMIN.'/topics') ?>">
                                <i class="fa fa-th-list"></i>
                                <span class="title">Topics</span>
                            </a>
                        </li>
                        <li class=" <?= ($this->uri->segment(3) == 'topics/categories') ? ' active' : '' ?>">
                            <a href="<?= site_url(ADMIN.'/topics/categories') ?>">
                                <i class="fa fa-th-list"></i>
                                <span class="title">Categories</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php endif?>
            <?php if(access(6)):?>
                <li class=" <?= ($this->uri->segment(2) == 'motivationalvideos') ? ' opened  active' : '' ?>">
                    <a href="javascript:void(0)">
                        <i class="fa fa-th"></i>
                        <span class="title">Educational Videos</span>
                    </a>
                    <ul>
                        <li class=" <?= in_array($this->uri->segment(3), array('manage')) ? ' active' : '' ?>">
                            <a href="<?= site_url(ADMIN.'/motivationalvideos') ?>">
                                <i class="fa fa-th-list"></i>
                                <span class="title">Educational Videos</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php endif?>
            <!-- <?php if(access(7)):?>
            <li class="opened <?= ($this->uri->segment(2) == 'newsletter') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/newsletter') ?>">
                    <i class="fa fa-file"></i>
                    <span class="title">Newsletter</span>
                </a>
            </li>
            <?php endif?> -->
            <?php if(access(8)):?>
            <li class=" <?= ($this->uri->segment(2) == 'sitecontent' || $this->uri->segment(2) == 'preferences') ? ' opened  active' : '' ?>">
                <a href="javascript:void(0)">
                    <i class="fa fa-pagelines  "></i>
                    <span class="title">Manage Pages</span>
                </a>
                <ul>
                    <li class=" <?= ($this->uri->segment(3) == 'login') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/login') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Sign In</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'signup') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/signup') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Sign up</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'forgot') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/forgot') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Forgot Password</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'reset') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/reset') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Reset Password</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'email-verify') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/email-verify') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Email Verification</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'home') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/home') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Home</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'become_a_model') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/become_a_model') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Become A Model</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'about') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/about') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">About</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'contact') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/contact') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Contact Us</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'how_it_works') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/how_it_works') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">How It Works</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'blog') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/blog') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Our Blog</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'cookie_policy') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/cookie_policy') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Cookie Policy</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'privacy_policy') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/privacy_policy') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Privacy Policy</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'terms_conditions') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/terms_conditions') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Terms & conditions</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'affiliates') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/affiliates') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Affiliates</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'disclaimers') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/disclaimers') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Disclaimers</span>
                        </a>
                    </li>
                </ul>
            </li>
            <?php endif?>
            <?php if(is_admin()):?>
            <li class="opened <?= ($this->uri->segment(2) == 'settings' && $this->uri->segment(3) == '') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/settings') ?>">
                    <i class="fa fa-cogs"></i>
                    <span class="title">Site Settings</span>
                </a>
            </li>
            <?php endif?>
            <li class="opened">
                <a href="<?= site_url(ADMIN.'/settings/change') ?>">
                    <i class="fa fa-lock"></i>
                    <span class="title">Change Password</span>
                </a>
            </li>
        </ul>
    </div>
</div>