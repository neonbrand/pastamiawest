<?php get_header( lafood_template_base() ); ?>

	<?php lafood_site_breadcrumbs(); ?>

	<div <?php lafood_content_wrap_class(); ?>>

		<div class="row">

			<div id="primary" <?php lafood_primary_content_class(); ?>>

				<main id="main" class="site-main" role="main">

					<?php include lafood_template_path(); ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- .container -->

<?php get_footer( lafood_template_base() ); ?>
