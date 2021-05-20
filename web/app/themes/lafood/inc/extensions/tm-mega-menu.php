<?php
/**
 * Extends basic functionality for better TM Mega Menu compatibility
 *
 * @package Lafood
 */

/**
 * Check if Mega Menu plugin is activated.
 *
 * @return bool
 */
function lafood_is_mega_menu_active() {
	return class_exists( 'tm_mega_menu' );
}

add_filter( 'lafood_theme_script_variables', 'lafood_pass_mega_menu_vars' );

/**
 * Pass Mega Menu variables.
 *
 * @param  array  $vars Variables array.
 * @return array
 */
function lafood_pass_mega_menu_vars( $vars = array() ) {

	if ( ! lafood_is_mega_menu_active() ) {
		return $vars;
	}

	$vars['megaMenu'] = array(
		'isActive' => true,
		'location' => get_option( 'tm-mega-menu-location' ),
	);

	return $vars;
}
