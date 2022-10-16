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
    <style>
    .nav-menu {
        position: relative;
    }

    .nav-menu li {
        line-height: 88px;
    }

    .nav-menu li:hover>ul {
        display: block;
        opacity: 1;
        transition: opacity 0.5s;
    }

    .sub-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 99999;
        background: #333;
        box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.2);
        padding: 0 1rem;
    }

    .sub-menu li {
        padding: 0.5rem 0;
        line-height: normal;
    }

    .sub-menu li a {
        text-transform: capitalize;
    }
    </style>
</head>

<body <?php body_class(); ?>>

    <!--
<div id="site-header">
	<h1><?php bloginfo('title') ?></h1>
</div>
-->
    <header id="common-header">
        <a href="/">
            <img src="/wordpress/wp-content/uploads/2022/07/logo.png" alt="Tontons Softeurs logo">
        </a>
        <nav>
            <?php wp_nav_menu( array('menu' => 'Left menu', 'menu_class' => 'nav-menu' ) ); ?>
            <div id="organization-infos">
                <p>Président: Phanou</p>
                <p>Orga: Phanou</p>
                <p>Référent: Phanou</p>
            </div>
            <?php wp_nav_menu( array('menu' => 'Right menu', 'menu_class' => 'nav-menu' ) ); ?>
        </nav>
    </header>

    <div id='site-content'>