<?php
namespace NameSpaced_Starter_Plugin\inc\classes;

defined( 'ABSPATH' ) or die( 'File cannot be accessed directly' );

class Setup_Functions {
	public static function init() {
		add_action( 'admin_enqueue_scripts', array( __CLASS__, 'wp_admin_style' ) );
		// add_action( 'admin_init', array( __CLASS__, 'verify_acf_activated' ) );
		// add_filter( 'acf/settings/load_json', array( __CLASS__, 'add_acf_json_load_point' ) );
	}

	public static function wp_admin_style() {
		wp_register_style( 'admin-css', plugins_url( 'css/admin.css', dirname( __FILE__ ) );
		wp_enqueue_style( 'admin-css' );
		wp_register_script( 'admin-js', plugins_url( 'js/admin.js', dirname( __FILE__ )  ), array( 'jquery' ) );
		wp_enqueue_script( 'admin-js' );
	}


	public static function detect_mobile_device() {
		$detect_device = '';
		if ( wp_is_mobile() ) {
			$detect_device = 'mobile';
		} else {
			$detect_device = 'desktop';
		}
		return $detect_device;
	}


	public static function verify_acf_activated() {
		if ( ! class_exists( 'acf' ) ) {
			new Admin_Notification( 'Advanced Custom Fields must be installed and activated to support this functionality.', 'error' );
		}
	}

	public static function add_acf_json_load_point( $paths ) {
		$paths[] = plugin_dir_path( __DIR__ ) . 'acf-json';

		return $paths;
	}
}
