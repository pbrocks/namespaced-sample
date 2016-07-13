<?php
namespace NameSpaced_Starter_Plugin\inc\classes;

defined( 'ABSPATH' ) or die( 'File cannot be accessed directly' );

class Admin_Menus {

	public static function init() {
		add_action( 'admin_menu', array( __CLASS__, 'sample_menu' ) );
	}

	public static function sample_menu() {
		add_menu_page( 'Sample Admin', 'Sample Admin', 'edit_posts', 'sample-menu.php',  array( __CLASS__, 'sample_menu_page' ), 'dashicons-tickets', 11 );
	}

	public static function sample_menu_page() {

			echo '<h1>Sample Admin Menu</h1>';
			echo '<pre>';
			echo 'You can find this file in  <br>';
			echo plugins_url( '/', __FILE__ );
			echo '<br>';
			echo '</pre>';
	}
}
