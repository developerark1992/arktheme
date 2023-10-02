<?php
/**
 * Theme Functions. 
 * 
 * @package Ark
 * 
 */

// echo '<pre>';
// print_r(filemtime(get_template_directory(). '/style.css'));
// wp_die();


function ark_enqueue_scripts(){

// wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css'), 'all');
// wp_enqueue_script('main-js', get_template_directory_uri(). '/assets/main.js', [],filemtime( get_template_directory() . '/assets/main.js'), true);
//filemtime used for  dynamic version number

//Register Styles
wp_register_style('style-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css'), 'all');
wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');


//Register Scripts
wp_register_script('main-js', get_template_directory_uri(). '/assets/main.js', [],filemtime( get_template_directory() . '/assets/main.js'), true);
wp_register_script('bootstrap-js', get_template_directory_uri(). '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);

//wp_register_style / script just to use as good practice for conditional statements

//Enqueue Styles
wp_enqueue_style('style-css');
wp_enqueue_style('bootstrap-css');

//Enqueue Scripts
wp_enqueue_script('main-js');
wp_enqueue_script('bootstrap-js');

}


add_action( 'wp_enqueue_scripts', 'ark_enqueue_scripts' );














?>

