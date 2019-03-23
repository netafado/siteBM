<?php
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menu' );
wp_oembed_add_provider( '#http://(www\.)?youtube\.com/watch.*#i', 'http://www.youtube.com/oembed', true );
add_image_size( 'thumbnail', 300, 169, true );
add_image_size( 'medium', 600, 339, true );
add_image_size( 'large', 1200, 675, true );
add_image_size( 'bm-large', 1400, 788, true );
// responsável por carregar os scripts js e css no site
get_template_part( 'parts/functions/func', 'scripts' );

// modificacoes no dashboard do wordpress
get_template_part( 'parts/functions/func', 'dashboard' );

// registrar menus no site
get_template_part( 'parts/functions/func', 'menus' );

get_template_part( 'parts/uteis/file', 'uteis' );

// relacionado com a traducao do tema
function my_theme_load_theme_textdomain() {
  load_theme_textdomain( 'bmblog', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'my_theme_load_theme_textdomain' );

function custom_excerpt_length( $length ) {
	return 18;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function printImg($local){
	echo get_template_directory_uri() . $local;
}

//custom post type
function create_post_type() {
  register_post_type( 'drbussade',
    array(
      'labels' => array(
        'name' => __( 'Dr Bussade', 'bmblog' ),
        'singular_name' => __( 'Dr bussade', 'bmblog' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'thumbnail', 'title', 'editor', 'author', 'thumbnail', 'excerpt')
    )
  );
  register_post_type( 'slider',
    array(
      'labels' => array(
        'name' => __( 'Sliders', 'bmblog' ),
        'singular_name' => __( 'Slider', 'bmblog' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'thumbnail', 'title')
    )
  );
}
add_action( 'init', 'create_post_type' );
?>
