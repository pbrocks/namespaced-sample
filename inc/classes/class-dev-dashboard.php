<?php
namespace NameSpaced_Starter_Plugin\inc\classes;

defined( 'ABSPATH' ) or die( 'File cannot be accessed directly' );

class Dev_Dashboard {

	public static function init() {
		add_action( 'admin_menu', array( __CLASS__, 'dev_menu' ) );
	}

	public static function dev_menu() {
		add_dashboard_page( 'Dev Dashboard', 'Dev Dashboard', 'edit_posts', 'dev-dashboard.php',  array( __CLASS__, 'dev_menu_page' ), 'dashicons-tickets', 11 );
	}

	public static function dev_menu_page() {
		global $menu, $submenu;

			echo '<h3>You are viewing this menu from a ';
			echo Setup_Functions::detect_mobile_device();
			echo ' device</h3>';

			echo '<pre>';
			echo 'You can find this file in  <br>';
			echo plugins_url( '/', __FILE__ );
			echo '<br>';
			echo '</pre>';

			echo '<pre><h2>This is the Menu</h2>';
			print_r( $menu );
			echo '</pre>';

			echo '<pre><h2>This is the Submenu</h2>';
			print_r( $submenu );
			echo '</pre>';
	}
}
