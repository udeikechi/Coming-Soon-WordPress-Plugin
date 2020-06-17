<?php
/**
  Plugin Name: IU Coming Soon Page
  Plugin URI: https://webfactory.com/
  Description: Displays a coming soon page with a countdown to all users except the administrator
  Author: Ikechi Ude
  Version: 1.0
  Author URI: http://www.webfactoryltd.com/
  License: GPL2
 
  Copyright (c) 2020, Ikechi Ude 
**/
 
 // this is our security check line
if (!defined('ABSPATH')) {
  die;
}

//our hook and hooked function
add_action( 'wp_loaded', 'IU_coming_soon_page');

//hooked function
function IU_coming_soon_page() {
		global $pagenow;
		if ( $pagenow !== 'wp-login.php' && ! current_user_can( 'manage_options' ) && ! is_admin() ) {
			header( $_SERVER["SERVER_PROTOCOL"] . ' 503 Service Temporarily Unavailable', true, 503 );
			header( 'Content-Type: text/html; charset=utf-8' );
			if ( file_exists( plugin_dir_path( __FILE__ ) . 'interface/comingsoon.php' ) ) {
				require_once( plugin_dir_path( __FILE__ ) . 'interface/comingsoon.php' );
			}
			die();
		}
	}


?>