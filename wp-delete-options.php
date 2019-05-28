<?php
/*
Plugin Name: WP Delete Options
Description: To delete Amazon Payments settings, add ?deleteoptions=1 to any admin url
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function allendav_wp_delete_options_admin_notices() {

	if ( ! isset( $_GET['deleteoptions'] ) ) {
		return;
	}

	delete_option( 'woocommerce_amazon_payments_advanced_settings' );
	
	?>
		<div class="notice notice-success is-dismissible">
		<p><?php _e( 'Deleted amazon payments settings', 'allendav_wp_delete_options' ); ?></p>
		</div>
	<?php
}

add_action( 'admin_notices', 'allendav_wp_delete_options_admin_notices' );

