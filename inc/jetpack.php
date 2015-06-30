<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Portfolio CV
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function portfoliocv_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'portfoliocv_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function portfoliocv_jetpack_setup
add_action( 'after_setup_theme', 'portfoliocv_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function portfoliocv_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function portfoliocv_infinite_scroll_render
