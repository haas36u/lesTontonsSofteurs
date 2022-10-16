<?php
add_action( 'wp_enqueue_scripts', 'mat_assets' );
function mat_assets() {
	wp_enqueue_style( 'tontons', get_stylesheet_uri() );
}

// Register Sidebars
function custom_facebook_feed() {
    $args = array(
        'id'            => 'custom_facebook_feed',
        'name'          => __( 'Custom Facebook Feed', 'text_domain' ),
        'description'   => __( 'A custom facebook feed', 'text_domain' ),
    );
    register_sidebar( $args );
 
}
add_action( 'widgets_init', 'custom_facebook_feed' );
?>