
<div class="row">
    <?php if(access(1)):?>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a href="<?= site_url(ADMIN.'/members/clients') ?>">
            <div class="tile-stats tile-white">
                <div class="icon"><i class="entypo-user"></i></div>
                <div class="num" data-start="0" data-end="<?=$total_users?>" data-postfix="" data-duration="1500" data-delay="0"><?=$total_users?></div>
                <h3>Total Users </h3>
                <p>Total Users in our website </p>
            </div>
        </a>
    </div>
    <?php endif?>
    <?php if(access(2)):?>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a href="<?= site_url(ADMIN.'/members/models') ?>">
            <div class="tile-stats tile-green">
                <div class="icon"><i class="entypo-user"></i></div>
                <div class="num" data-start="0" data-end="<?=$total_models?>" data-postfix="" data-duration="1500" data-delay="0"><?=$total_models?></div>
                <h3>Total Models </h3>
                <p>Total Models in our website </p>
            </div>
        </a>
    </div>
    <?php endif?>
    <?php if(is_admin()):?>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a href="<?= site_url(ADMIN.'/settings') ?>">
            <div class="tile-stats tile-black">
                <div class="icon"><i class="fa fa-cogs"></i></div>
                <div class="num" data-start="0" data-end="0" data-postfix="" data-duration="1500" data-delay="1800"> Settings</div>

                <h3>Change Settings</h3>
                <p>on our site right now.</p>
            </div>
        </a>		
    </div>
    <?php endif?>
</div>
