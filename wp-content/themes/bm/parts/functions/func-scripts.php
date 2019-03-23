<?php
function add_theme_scripts() {
    $version = "1.4";
     // CSS
     wp_enqueue_style( 'plugins', get_template_directory_uri() . '/css/plugins.css', array(), $version, 'all');
     wp_enqueue_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', array(), $version, 'all');
     wp_enqueue_style( 'slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', array(), $version, 'all');
     wp_enqueue_style( 'style' , get_template_directory_uri() .  '/css/style.css', array('plugins'), $version, 'all' );
 
        
     wp_enqueue_script('jquery');
     wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), $version, true);
     
    wp_enqueue_script('instagram',  get_template_directory_uri() . '/dist/instashow/elfsight-instagram-feed.js', array('jquery'), $version, true);
     
     wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js' , array('jquery', 'slick' ), $version, true );
    
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
add_action( 'init', 'register_my_menus' );
?>