<?php
/**
 * The template for displaying single posts and pages.
 *
 * @copyright  Copyright (c) 2020, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

get_header(); ?>
<div class="site-content">

    <?php
    while ( have_posts() ) :

    the_post();
    ?>

    <article <?php post_class(); ?>>

        <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php the_content(); ?>
        </div><!-- .entry-content -->

    </article><!-- #post-## -->

    <?php

  endwhile;
	?>
</div><!-- .site-content -->
<?php
get_footer();
?>