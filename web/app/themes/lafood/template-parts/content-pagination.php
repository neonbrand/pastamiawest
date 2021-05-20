<?php
/**
 * Template part for posts pagination.
 *
 * @package Lafood
 */
the_posts_pagination(
	array(
		'prev_text' => esc_html__( 'Prev', 'lafood' ),
		'next_text' => esc_html__( 'Next', 'lafood' ),
	)
) ;
