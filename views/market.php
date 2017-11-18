<?php ! defined('__TYPECHO_ROOT_DIR__') and exit();
    include TYPEHO_ADMIN_PATH.'common.php';
    $menu->title = _t('应用商店');
    include TYPEHO_ADMIN_PATH.'header.php';
    include TYPEHO_ADMIN_PATH.'menu.php';
    list($version, $buildVersion) = explode('/', Typecho_Common::VERSION);
    $typechoVersion = floatval($version);
?>
<link rel="stylesheet" href="<?php echo $options->pluginUrl('AppStore/static/css/font-awesome.min.css'); ?>">
<link rel="stylesheet" href="<?php echo $options->pluginUrl('AppStore/static/css/pure.css'); ?>">
<style>
    .as-description {
        height: 4.2em;
        overflow: hidden;
    }
    .as-status {
        float:right;
        margin-right: 1em;
    }
    .as-status i {
        color: #ccc;
        margin: 0 0.2em;
        font-size: 1.5em;
    }
    .as-status i.active {
        color: green
    }
	 .as-card{
	     background: #EFEFEF;
    border: 1px solid #CCC;
	border-radius:3px;
    width: 23%;
    margin: .1em;
    padding: .2em;
	
 }
 .as-card p{
	margin:.5em
 }
 .as-card h3{margin:.5em}
 
</style>

<?php if ($typechoVersion <= 0.8): ?>
    <div class="main">
        <div class="body body-950">
            <div class="container typecho-page-title">
                <div class="column-24">
                    <h2><?php echo $menu->title; ?> <small><cite>The missing plugins' store for Typecho</cite></small></h2>
                    <p> 
                        <i class="fa fa-heart" title="<?php echo _t('提建议/吐槽专用'); ?>"></i>
                        <a href="https://chekun.me/typecho/" target="_blank"><?php echo _t('提建议/吐槽专用'); ?></a>
                    </p>
                </div>
            </div>
            <div class="container typecho-page-main">
                <?php include 'list.php'; ?>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="main">
        <div class="body container">
            <div class="colgroup">
                <div class="typecho-page-title col-mb-12">
                    <h2>
                        <?php echo $menu->title; ?> <small><cite>The missing plugins' store for Typecho</cite></small>
                        <p style="float:right"> 
                            <a href="https://chekun.me/typecho/" target="_blank"><i class="fa fa-heart" title="<?php echo _t('提建议/吐槽专用'); ?>"></i><?php echo _t('提建议/吐槽专用'); ?></a>
                        </p>
                    </h2>
                </div>
            </div>
            <div class="colgroup typecho-page-main" role="main" style="clear:both">
                <?php include 'list.php'; ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php
    include TYPEHO_ADMIN_PATH.'copyright.php';
    include TYPEHO_ADMIN_PATH.'common-js.php';
    include 'js.php';
    include TYPEHO_ADMIN_PATH.'footer.php';
?>
