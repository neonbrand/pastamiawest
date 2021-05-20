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

	<?php $utility       = lafood_utility()->utility;
	$blog_featured_image = get_theme_mod( 'blog_featured_image', lafood_theme()->customizer->get_default( 'blog_featured_image' ) );
	$size                = lafood_post_thumbnail_size( array( 'class_prefix' => 'post-thumbnail--' ) );
	$blog_layout         = get_theme_mod( 'blog_layout_type', lafood_theme()->customizer->get_default( 'blog_layout_type' ) );
	?>

	<?php if ( 'small' === $blog_featured_image && has_post_thumbnail() ) : ?>
		<figure class="post-thumbnail">
			<?php $utility->media->get_image( array(
				'size'        => $size['size'],
				'mobile_size' => $size['size'],
				'class'       => 'post-thumbnail__link ' . $size['class'],
				'html'        => '<a href="%1$s" %2$s><img class="post-thumbnail__img wp-post-image" src="%3$s" alt="%4$s" %5$s></a>',
				'placeholder' => false,
				'echo'        => true,
			) );
			?>
		</figure><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="post-list__item-content">

		<?php get_template_part( 'template-parts/content-meta-category-loop' ); ?>

		<?php if ( 'small' === $blog_featured_image && 'default' === $blog_layout ) :
			get_template_part( 'template-parts/content-entry-meta-loop' );
		endif; ?>

		<header class="entry-header">
			<?php lafood_sticky_label(); ?>

			<?php $title_html = ( is_single() ) ? '<h1 %1$s>%4$s</h1>' : '<h1 %1$s><a href="%2$s" rel="bookmark">%4$s</a></h1>';

			$utility->attributes->get_title( array(
				'class' => 'entry-title',
				'html'  => $title_html,
				'echo'  => true,
			) );
			?>

			<?php if ( ! ( 'small' === $blog_featured_image && 'default' === $blog_layout ) ) :
				get_template_part( 'template-parts/content-entry-meta-loop' );
			endif; ?>
		</header><!-- .entry-header -->

		<?php if ( ! ( 'small' === $blog_featured_image && 'default' === $blog_layout ) ) : ?>
			<figure class="post-thumbnail">
				<?php $utility->media->get_image( array(
					'size'        => $size['size'],
					'class'       => 'post-thumbnail__link ' . $size['class'],
					'html'        => '<a href="%1$s" %2$s><img class="post-thumbnail__img wp-post-image" src="%3$s" alt="%4$s" %5$s></a>',
					'placeholder' => false,
					'echo'        => true,
				) );
				?>
			</figure><!-- .post-thumbnail -->
		<?php endif; ?>

		<div class="entry-content">
			<?php $blog_content = get_theme_mod( 'blog_posts_content', lafood_theme()->customizer->get_default( 'blog_posts_content' ) );
			$length             = ( 'full' === $blog_content ) ? -1 : 27;
			$content_visible    = ( 'none' !== $blog_content ) ? true : false;
			$content_type       = ( 'full' !== $blog_content ) ? 'post_excerpt' : 'post_content';

			$utility->attributes->get_content( array(
				'visible'      => $content_visible,
				'length'       => $length,
				'content_type' => $content_type,
				'echo'         => true,
			) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">

			<?php lafood_share_buttons( 'loop' ); ?>

			<?php get_template_part( 'template-parts/content-btn' ); ?>

		</footer><!-- .entry-footer -->
	</div><!-- .post-list__item-content -->

</article><!-- #post-## -->
