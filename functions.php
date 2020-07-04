<?php
function add_styles(){
	wp_enqueue_style('style', get_stylesheet_uri() );
	wp_enqueue_style('layout', get_stylesheet_directory_uri(). '/layout.css');
	wp_enqueue_style('appearance', get_stylesheet_directory_uri(). '/appearance.css');
}

add_action('wp_enqueue_scripts', 'add_styles');

?>
