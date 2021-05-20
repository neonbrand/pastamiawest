<?php
/**
 * Template part for single post navigation.
 *
 * @package Lafood
 */

if ( ! get_theme_mod( 'single_post_navigation', lafood_theme()->customizer->get_default( 'single_post_navigation' ) ) ) {
	return;
}

the_post_navigation();
