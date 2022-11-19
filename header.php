<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/header.css" type="text/css"
        media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/common.css" type="text/css"
        media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/footer.css" type="text/css"
        media="screen" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="common-header">
        <a href="/">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="Tontons Softeurs logo">
        </a>
        <nav>
            <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>
        </nav>
    </header>

    <div id='site-content'>