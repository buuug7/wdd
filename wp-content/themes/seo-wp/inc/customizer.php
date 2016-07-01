<?php

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function seo_wp_customize_preview_js() {
	wp_enqueue_script( 'seo_wp-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array(
		'jquery',
		'customize-preview'
	), '20130508', true );
}

add_action( 'customize_preview_init', 'seo_wp_customize_preview_js' );