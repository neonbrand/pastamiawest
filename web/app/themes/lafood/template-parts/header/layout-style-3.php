<?php
/**
 * Template part for style-3 header layout.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Lafood
 */
?>
<div class="header-container_wrap container">
	<?php lafood_vertical_main_menu(); ?>
	<div class="header-container__flex">
		<div class="site-branding">
			<?php lafood_header_logo() ?>
			<?php lafood_site_description(); ?>
		</div>

		<div class="header-icons">
			<?php lafood_header_search( '<div class="header-search"><span class="search-form__toggle"></span>%s<span class="search-form__close"></span></div>' ); ?>
			<?php lafood_vertical_menu_toggle( 'main-menu' ); ?>
			<?php lafood_header_btn(); ?>
		</div>

	</div>
</div>
