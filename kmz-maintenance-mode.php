<?php
/**
 * Plugin Name: Maintenance Mode
 * Plugin URI: https://github.com
 * Description: Displays a maintenance mode page for anyone who's not logged in.
 * Version: 1.0
 * Author: Vladimir Kamuz
 *
 * @package metaphor
 */

/**
 * Displays the coming soon page for anyone who's not logged in.
 */
function kmz_maintenance_mode() {
	global $pagenow;
	if ( $pagenow !== 'wp-login.php' && ! current_user_can( 'manage_options' ) && ! is_admin() ) {
		header( 'HTTP/1.1 Service Unavailable', true, 503 );
		header( 'Content-Type: text/html; charset=utf-8' );
		require_once plugin_dir_path( __FILE__ ) . 'views/maintenance-page.php';
		die();
	}
}

add_action( 'wp_loaded', 'kmz_maintenance_mode' );
