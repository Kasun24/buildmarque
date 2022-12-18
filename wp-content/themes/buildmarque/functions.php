<?php
function add_css()
{
   wp_register_style('first', get_template_directory_uri() . '/inc/css/style.css', false,'1.1','all');
   wp_enqueue_style( 'first');
}
add_action('wp_enqueue_scripts', 'add_css');

function add_script()

{
   wp_register_script('bootstrap', get_template_directory_uri() . '/inc/js/script.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'custom');

}

add_action('wp_enqueue_scripts', 'add_script');

add_theme_support( 'menus' );


// feature image
add_post_type_support( 'themes', 'thumbnail' );