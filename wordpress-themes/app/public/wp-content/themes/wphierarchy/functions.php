<?php

//Add theme support

add_theme_support( 'title-tag' );
add_theme_support( ' post-thumbnail' );
add_theme_support( 'post_format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );
add_theme_support('nav-menus');


// Load in our CSS
function wphierarchy_enqueue_styles(){
  wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' );
}
add_action( 'wp_enqueue_scripts', 'wphierarchy_enqueue_styles' );

// Register MENU Locations

register_nav_menus( [
  'main-menu' => esc_html__( 'Main Menu', 'wphierarchy' ),
] );

?>
