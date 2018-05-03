<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php wp_title(''); ?></title>

    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

    <body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
        <div id="container">
            <header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
                <div id="inner-header" class="wrap cf">
                        <a href="<?php echo home_url(); ?>" rel="nofollow"><img class="logo" src="/wp-content/themes/firecracker/library/images/logo.png" /></a>

                        <nav class="navbar navbar-expand-md" role="navigation">
                            <a href="<?php echo home_url(); ?>" class="text-logo">Firecracker Alley</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-toggle-thing" aria-controls="nav-toggle-thing" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon">
                                    <img src="/wp-content/themes/firecracker/library/images/menu-icon.svg">
                                </span>
                            </button>
                            <?php
                            wp_nav_menu( array(
                                'depth'             => 1, // 1 = no dropdowns, 2 = with dropdowns
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'nav-toggle-thing',
                                'menu_class'        => 'nav navbar-nav ml-auto',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ) );
                            ?>
                        </nav>
                    </div>
                </header>
