<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="container-fluid site-header" id="siteHeader">
        <div class="header-logo">
            <a class="logo-full" title="Business Records Management" href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/brm-logo.png" alt=""></a>
            <a class="logo-brand" title="Business Records Management" href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/brm.png" alt=""></a>
        </div>
        <div class="header-block">
            <div class="header-nav">

                <a href="javascript:void(0);" id="navToggle" class="hidden-xl-up nav-toggle"><i class="fa fa-bars"></i></a>
                <a href="<?php echo home_url('/contact/'); ?>" class="header-request-icon"><i class="fa fa-envelope"></i></a>

                <nav id="mainNav" class="main-nav" role="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'main', 'container' => '' ) ); ?>
                </nav><!-- #site-navigation -->
            </div>
            <div class="header-phone">
                <strong><a href="tel:18888966222">1-888-896-6222</a></strong>
            </div>
        </div>
        <div class="header-request">
            <a href="<?php echo home_url('/contact/'); ?>">
                <span>Request a Quote</span>
            </a>
        </div>
    </header>

    <main>
