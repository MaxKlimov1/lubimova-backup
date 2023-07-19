<?php
add_action( 'wp_enqueue_scripts', 'olebag_Style_And_Scripts' );
add_action( 'wp_enqueue_scripts', 'scriptAdd' );

function olebag_Style_And_Scripts() {
    wp_enqueue_style('indexcss', get_template_directory_uri() . '/assets/styles/index.css');

    wp_enqueue_style('adaptivecss', get_template_directory_uri() . '/assets/styles/adaptive.css');
	
	wp_enqueue_style('slick', get_template_directory_uri() . '/slick.css');
	
	wp_enqueue_style('adaptivecss', get_template_directory_uri() . '/slick-theme.css');

	wp_enqueue_style('slider', get_template_directory_uri() . '/assets/styles/slider.css');
};

function scriptAdd() {
	wp_enqueue_script('scriptall', get_template_directory_uri() . '/assets/js/index.js');
	wp_enqueue_script('sliderscript', get_template_directory_uri() . '/slick.min.js');
}
 
show_admin_bar(false);