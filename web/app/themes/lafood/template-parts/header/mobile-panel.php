<?php
/**
 * Template part for mobile panel in header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Lafood
 */
?>
<div class="mobile-panel">
	<?php lafood_menu_toggle( 'main-menu' ); ?>
	<div class="mobile-panel__right">
		<?php lafood_header_search( '<div class="header-search"><span class="search-form__toggle"></span>%s<span class="search-form__close"></span></div>' ); ?>
	</div>
</div>
