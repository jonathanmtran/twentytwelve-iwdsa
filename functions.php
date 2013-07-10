<?php
function twentytwelve_iwdsa_scripts_styles() {	
	// Nivo Slider
	$nivo_slider = get_stylesheet_directory_uri() . '/nivo-slider';
	wp_enqueue_style('iwdsa-nivo-slider-css',  $nivo_slider . '/nivo-slider.css');
	wp_enqueue_style('iwdsa-nivo-slider-default-css',  $nivo_slider . '/themes/default/default.css');
	wp_enqueue_script('iwdsa-nivo-slider-js', $nivo_slider . '/jquery.nivo.slider.pack.js', array('jquery'), false, true);
	
	// Custom JavaScript
	wp_enqueue_script('twentytwelve-iwdsa', get_stylesheet_directory_uri() . '/twentytwelve-iwdsa.js', array('jquery'), false, false);

}
add_action( 'wp_enqueue_scripts', 'twentytwelve_iwdsa_scripts_styles' );
