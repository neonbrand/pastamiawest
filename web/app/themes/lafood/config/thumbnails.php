<?php
/**
 * Thumbnails configuration.
 *
 * @package Lafood
 */

add_action( 'after_setup_theme', 'lafood_register_image_sizes', 5 );
/**
 * Register image sizes.
 */
function lafood_register_image_sizes() {
	set_post_thumbnail_size( 418, 315, true );

	// Registers a new image sizes.
	add_image_size( 'lafood-thumb-133-100', 133, 100, true );
	add_image_size( 'lafood-slider-thumb', 158, 88, true );
	add_image_size( 'lafood-thumb-m', 400, 400, true );
	add_image_size( 'lafood-thumb-masonry', 418, 9999 );
	add_image_size( 'lafood-thumb-l', 886, 668, true );
	add_image_size( 'lafood-thumb-l-2', 886, 315, true );
	add_image_size( 'lafood-thumb-xl', 1920, 1080, true );
	add_image_size( 'lafood-author-avatar', 512, 512, true );
	add_image_size( 'lafood-thumb-1355-1020', 1355, 1020, true );

	add_image_size( 'lafood-thumb-418-329', 418, 329, true );
}
