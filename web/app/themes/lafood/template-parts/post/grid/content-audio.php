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

	<?php $utility = lafood_utility()->utility; ?>

	<div class="post-list__item-content">
		<?php get_template_part( 'template-parts/content-meta-category-loop' ); ?>

		<header class="entry-header">
			<?php lafood_sticky_label(); ?>

			<?php $title_html = ( is_single() ) ? '<h1 %1$s>%4$s</h1>' : '<h1 %1$s><a href="%2$s" rel="bookmark">%4$s</a></h1>';

			$utility->attributes->get_title( array(
				'class' => 'entry-title',
				'html'  => $title_html,
				'echo'  => true,
			) );
			?>
		</header><!-- .entry-header -->

		<div class="post-featured-content">
			<?php do_action( 'cherry_post_format_audio' ); ?>
		</div><!-- .post-featured-content -->

		<div class="entry-content">
			<?php $embed_args = array(
				'fields' => array( 'soundcloud' ),
				'height' => 310,
				'width'  => 310,
			);

			$embed_content = apply_filters( 'cherry_get_embed_post_formats', false, $embed_args );

			if ( false === $embed_content ) {

				$blog_content = get_theme_mod( 'blog_posts_content', lafood_theme()->customizer->get_default( 'blog_posts_content' ) );
				$length             = ( 'full' === $blog_content ) ? -1 : 55;
				$content_visible    = ( 'none' !== $blog_content ) ? true : false;
				$content_type       = ( 'full' !== $blog_content ) ? 'post_excerpt' : 'post_content';

				$utility->attributes->get_content( array(
					'visible'      => $content_visible,
					'length'       => $length,
					'content_type' => $content_type,
					'echo'         => true,
				) );

			} else {
				printf( '<div class="embed-wrapper">%s</div>', $embed_content );
			}
			?>
		</div><!-- .entry-content -->
	</div><!-- .post-list__item-content -->

	<footer class="entry-footer">
		<?php get_template_part( 'template-parts/content-entry-meta-loop' ); ?>

		<?php lafood_share_buttons( 'loop' ); ?>

		<?php get_template_part( 'template-parts/content-btn' ); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
