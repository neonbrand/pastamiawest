<?php
/**
 * Template part for style-5 header layout.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Lafood
 */
?>
<div class="header-container_wrap container">
	<div class="header-container__flex">
		<div class="site-branding">
			<?php lafood_header_logo() ?>
			<?php lafood_site_description(); ?>
		</div>
		<?php lafood_main_menu(); ?>
		<?php lafood_header_btn(); ?>
	</div>
</div>
