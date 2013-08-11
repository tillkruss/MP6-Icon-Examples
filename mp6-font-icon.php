<?php

add_action( 'admin_head', 'set_custom_font_icon' );
function set_custom_font_icon() {
?>
	<style type="text/css">

		/* replace `{menu-slug}` with the slug name you passed `add_menu_page()` */

		.mp6 #toplevel_page_{menu-slug} .wp-menu-image:before {
			font-family: FontAwesome !important;
			content: '\f07a';
		}

	</style>
<?php
}

// make sure you enqueue your icon font
add_action( 'admin_enqueue_scripts', 'enqueue_font_awesome' );
function enqueue_font_awesome() {
	wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css', false, null );
}
