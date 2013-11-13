<?php

add_action( 'admin_head', 'set_custom_dashicon' );

function set_custom_dashicon() {
?>
	<style type="text/css">

		/* for top level menu pages replace `{menu-slug}` with the slug name passed to `add_menu_page()` */
		.mp6 #toplevel_page_{menu-slug} .wp-menu-image:before {
			content: '\f174';
		}

		/* for custom post types replace `{post_type}` with the slug name passed to `register_post_type()` */
		.mp6 #menu-posts-{post_type} .wp-menu-image:before {
			content: '\f174';
		}

	</style>
<?php
}
