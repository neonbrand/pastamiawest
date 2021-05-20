<?php
/**
 * The template for displaying search form.
 *
 * @package Lafood
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="search-form__input-wrap">
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'lafood' ) ?></span>
		<input type="search" class="search-form__field"
			placeholder="<?php echo esc_attr_x( 'Enter keyword', 'placeholder', 'lafood' ) ?>"
			value="<?php echo get_search_query() ?>" name="s"
			title="<?php echo esc_attr_x( 'Search for:', 'label', 'lafood' ) ?>" />
	</div>
	<button type="submit" class="search-form__submit btn btn-primary"><?php esc_html_e( 'Go!', 'lafood' ); ?></button>
</form>
