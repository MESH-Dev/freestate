<?php

//Use this file for wp menus, sidebars, image sizes, loadup scripts.



//enqueue scripts and styles *use production assets. Dev assets are located in  /css and /js
function loadup_scripts() {
    wp_enqueue_script( 'sidr-js', get_template_directory_uri().'/js/jquery.sidr.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'theme-js', get_template_directory_uri().'/js/mesh.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'fontawesome-js', '//kit.fontawesome.com/8080a78268.js', array('jquery'), '1.0.0', true );
    if(is_page_template( 'templates/template-episode.php' )){
        wp_enqueue_script( 'addthis-js', '//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d128f0d7e00a851', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'jplayer-js', '//cdnjs.cloudflare.com/ajax/libs/jplayer/2.9.2/jplayer/jquery.jplayer.js', array('jquery'), '1.0.0', true );
        wp_enqueue_style( 'jplayer-css', '//cdnjs.cloudflare.com/ajax/libs/jplayer/2.9.2/skin/blue.monday/css/jplayer.blue.monday.css', '1.0.0', true );
    }

    wp_enqueue_style( 'sidr-css', get_template_directory_uri().'/css/jquery.sidr.bare.css', '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'loadup_scripts' );

// Add Thumbnail Theme Support
add_theme_support('post-thumbnails');
add_image_size('background-fullscreen', 1800, 1200, true);
add_image_size('short-banner', 1800, 800, true);

add_image_size('large', 700, '', true); // Large Thumbnail
add_image_size('medium', 250, '', true); // Medium Thumbnail
add_image_size('small', 120, '', true); // Small Thumbnail
add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');



//Register WP Menus
register_nav_menus(
    array(
        'main_nav' => 'Header and breadcrumb trail heirarchy',
        'footer_nav' => 'Footer menu',
        'social_nav' => 'Social menu used throughout'
    )
);

// Register Widget Area for the Sidebar
register_sidebar( array(
    'name' => __( 'Primary Widget Area', 'Sidebar' ),
    'id' => 'primary-widget-area',
    'description' => __( 'The primary widget area', 'Sidebar' ),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
) );









?>
