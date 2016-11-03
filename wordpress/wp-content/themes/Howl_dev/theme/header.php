<?php
/**
 * Header file common to all
 * templates
 *
 */
?>
<!doctype html>
<html class="site no-js" <?php language_attributes(); ?>>
<head>
    <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <title><?php wp_title(); ?></title>

    <?php // replace the no-js class with js on the html element ?>
    <script>document.documentElement.className=document.documentElement.className.replace(/\bno-js\b/,'js')</script>

    <?php // load the core js polyfills ?>
    <script async defer src="<?php echo get_template_directory_uri(); ?>/assets/js/core.js"></script>

    <?php wp_head(); ?>
</head>
<body class="site__body">
<?php // <body> closes in footer.php ?>
    


<?php // common header content goes here ?>
    <header class="primary" role="banner">
        <div class="site__contain site__contain--relative">
            <a href="<?=get_site_url()?>" class="banner__brand">
                <img class="banner__image" src="<?=get_template_directory_uri(); ?>/assets/img/antlers--temp.png">
            </a>
            <div class="cd-nav">
                <a href="#0" class="cd-nav-trigger">Menu<span></span></a>
                <?php MOZ_Menu::nav_menu('primary'); ?>
            </div>
        </div>
    </header>
    <?php // closes in footer.php ?>