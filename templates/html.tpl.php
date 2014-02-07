<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

    <head>
        <title><?php print $head_title; ?></title>
        <script src="/sites/all/themes/ncsulib_foundation/scripts/vendor/jquery-1.10.2.min.js"></script>
        <script src="/sites/all/themes/ncsulib_foundation/scripts/vendor/custom.modernizr.js"></script>
        <?php include 'includes/head.php'; ?>
    </head>
    <body class="<?php print $classes; ?>" <?php print $attributes;?>>

        <?php include 'includes/header.php'; ?>

        <div class="skip-link">
            <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
        </div>
        <?php print $page_top; ?>
        <?php print $page; ?>
        <?php print $page_bottom; ?>
        <?php print _zurb_foundation_add_reveals(); ?>

        <?php include 'includes/footer.php'; ?>

    </body>
</html>
