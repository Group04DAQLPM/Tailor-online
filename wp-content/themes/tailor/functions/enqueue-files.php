<?php
/*
 * tailor Enqueue css and js files
 */
function tailor_enqueue() {
    wp_enqueue_style('google-font-api-arimo','//fonts.googleapis.com/css?family=Arimo|Oswald');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array());
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css', array());
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/css/owl.theme.css', array());
    
    wp_enqueue_style('tailor-style', get_stylesheet_uri(), array());

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'));
    wp_enqueue_script('owl.carousel',get_template_directory_uri().'/js/owl.carousel.js',array('jquery'));
	wp_enqueue_script('tailor-deafult', get_template_directory_uri() . '/js/default.js', array('jquery'));	
	    	
    if (is_singular())
        wp_enqueue_script("comment-reply");
}

add_action('wp_enqueue_scripts', 'tailor_enqueue'); ?>