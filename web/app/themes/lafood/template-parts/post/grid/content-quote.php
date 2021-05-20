<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Lafood
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'posts-list__item card' ); ?>>

	<div class="post-list__item-content">
		<?php get_template_part( 'template-parts/content-meta-category-loop' ); ?>

		<div class="post-featured-content post-quote">
			<?php do_action( 'cherry_post_format_quote' ); ?>
		</div>

	</div><!-- .post-list__item-content -->

	<footer class="entry-footer">
		<?php get_template_part( 'template-parts/content-entry-meta-loop' ); ?>

		<?php lafood_share_buttons( 'loop' ); ?>

		<?php get_template_part( 'template-parts/content-btn' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
