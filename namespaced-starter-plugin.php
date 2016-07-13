<?php
/*
* Plugin Name: NameSpaced Starter Plugin
* Description: Sample Plugin to illustrate namespacing, classes and functions
* Version: 0.7.1
* Author: PTB
*/

namespace NameSpaced_Starter_Plugin;

defined( 'ABSPATH' ) or die( 'File cannot be accessed directly' );


// Autoloader will let us call classes directly rather than requiring the files first
require_once( 'autoload.php' );

if ( is_admin() ) {
//	inc\classes\Dev_Dashboard::init();
//	inc\classes\Admin_Menus::init();
}

inc\classes\Setup_Functions::init();
// inc\classes\Post_Types::init();

