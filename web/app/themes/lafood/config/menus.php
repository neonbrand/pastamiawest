<?php
/**
 * Menus configuration.
 *
 * @package Lafood
 */

add_action( 'after_setup_theme', 'lafood_register_menus', 5 );
/**
 * Register menus.
 */
function lafood_register_menus() {

	register_nav_menus( array(
		'top'          => esc_html__( 'Top', 'lafood' ),
		'main'         => esc_html__( 'Main', 'lafood' ),
		'main_landing' => esc_html__( 'Landing Main', 'lafood' ),
		'footer'       => esc_html__( 'Footer', 'lafood' ),
		'social'       => esc_html__( 'Social', 'lafood' ),
	) );
}
