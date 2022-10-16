<?php /* Template Name: Category */ ?>

<style>
#list-post-panel ul {
    width: 100%;
    list-style: none;
}

#list-post-panel li {
    width: 31%;
    margin: 1%;
    padding: 1%;
    float: left;
    background: #eee;
    list-style: none;
    text-align: center;
    border: 1px solid #cfcfcf;
}

.post-list-featured-image img {
    width: 100%;
    height: auto;
}
</style>

<?php
$category = get_queried_object();
$subCategories = get_categories(
    array('parent' => $category->term_id )
);
?>

<?php
  get_header();
?>

<?php
    if (function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb('<p id="breadcrumbs">','</p>');
    }
?>

<h1><?php echo $category->name; ?></h1>
<div id="list-post-panel">
    <ul>
        <?php
        if ( $subCategories ) { 
            foreach( $subCategories as $subCategory ) {
                echo '<li><a href="' . esc_url(get_term_link($subCategory, $subCategory->taxonomy)) . '">' . $subCategory->name . '</a></li>';
            }
        } else {
            $postList = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1, 'cat'=> get_queried_object_id()));

            if ($postList->have_posts() ) {
                while ( $postList->have_posts() ) : $postList->the_post();
                ?>
        <li>
            <p class="post-meta">Publié le <?php the_time('d M Y, à H:i') ?></p>
            <div class="post-list-featured-image">
                <?php the_post_thumbnail() ?>
            </div>
            <div class="post-list-title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title();?>
                </a>
            </div>
        </li>
        <?php endwhile;
            } else { ?>
        <div>Il n'y as pas d'articles dans cette catégorie.</div>
        <?php }
        }?>
    </ul>
</div>
<?php get_footer(); ?>