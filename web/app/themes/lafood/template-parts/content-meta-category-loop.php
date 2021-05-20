<?php
/**
 * Template part for displaying meta category.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Lafood
 */
?>
<?php $utility = lafood_utility()->utility;
$cats_visible  = lafood_is_meta_visible( 'blog_post_categories', 'loop' ); ?>

<?php if ( 'post' === get_post_type() ) : ?>

	<?php $utility->meta_data->get_terms( array(
		'visible'   => $cats_visible,
		'type'      => 'category',
		'delimiter' => ' ',
		'before'    => '<div class="post__category">',
		'after'     => '</div>',
		'echo'      => true,
	) ); ?>

<?php endif; ?>
