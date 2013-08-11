<?php

add_action( 'admin_head', 'set_custom_dashicon' );

function set_custom_dashicon() {
?>
	<style type="text/css">

		/* replace `{menu-slug}` with the slug name you passed `add_menu_page()` */
		.mp6 #toplevel_page_{menu-slug} .wp-menu-image:before {
			content: '\f174';
		}

	</style>
<?php
}
