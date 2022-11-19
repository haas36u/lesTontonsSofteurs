<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/common.css" type="text/css"
        media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/homepage/homepage.css" type="text/css"
        media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/homepage/homepage_header.css"
        type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/footer.css" type="text/css"
        media="screen" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header id="homepage-header">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="Tontons Softeurs logo">
        <h1>Les Tontons Softeurs</h1>
        <nav>
            <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>
        </nav>
    </header>

    <div id="homepage-pictures">
        <div>
            <a href="?page_id=35">
                <button>Voir photos du terrain</button>
            </a>
        </div>
        <div>
            <a href="?page_id=33">
                <button>Voir photos des joueurs</button>
            </a>
        </div>
    </div>

    <div id="second-section">
        <div id="communication-container">
            <h4>Communication</h4>
            <div>
                <div>
                    <?php $query_2_posts = new WP_Query( array( 'posts_per_page' => 2, 'category_name'=> 'uncategorized') ); ?>

                    <?php
						while ($query_2_posts -> have_posts()) : $query_2_posts -> the_post();
						?>
                    <div class="article-container">
                        <h2><?php the_title() ?></h2>
                        <p class="post-meta">Publié le <?php the_time('d M Y, à H:i') ?></p>
                        <?php the_post_thumbnail(); ?>
                        <div>
                            <?php the_excerpt() ?>
                        </div>

                        <p>
                            <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
                        </p>
                    </div>
                    <?php endwhile ?>
                </div>
                <div id="facebook-container">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('custom_facebook_feed') ) : ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div>
            <div id="members-area-container">
                <h4>Espace adhérent</h4>
            </div>
            <div id="invited-area-container">
                <h4>Espace invitée</h4>
            </div>
        </div>
    </div>

    <div id="homepage-map-rules">
        <div id="homepage-map-container">
            <h4>Accès terrain</h4>
            <p>Coord GPS: 47.692358, 5.969642</p>
            <p>70360 Scey-sur-Saône-et-Saint-Albin</p>
            <p>15 min de Vesoul</p>

            <iframe
                src="https://www.google.com/maps/d/u/2/embed?mid=1KNYahGQVgiEIkFUhj2AZEte8PzqAU14&ehbc=2E312F"></iframe>
        </div>
        <div>
            <?php $recent = new WP_Query("page_id=25"); while($recent->have_posts()) : $recent->the_post();?>
            <h4><?php the_title(); ?></h4>
            <div id="rules-content">
                <?php the_excerpt() ?>
                <div id="continue-btn">
                    <a href="<?php the_permalink(); ?>">Lire la suite</a>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>

    <?php get_footer() ?>