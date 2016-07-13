<?php
namespace NameSpaced_Starter_Plugin\inc\classes;

defined( 'ABSPATH' ) or die( 'File cannot be accessed directly' );


class Post_Types {

	public static function init() {
		// Custom post types generated via https://generatewp.com/post-type/
		add_action( 'init', array( __CLASS__, 'register_entertainment' ) );
		add_action( 'init', array( __CLASS__, 'register_about' ) );
		add_action( 'init', array( __CLASS__, 'register_issue' ) );
		add_action( 'init', array( __CLASS__, 'register_recipe' ) );
		add_action( 'init', array( __CLASS__, 'categories_to_pages' ) );
	}

	public static function register_entertainment() {
		$labels = Post_Types::get_label_defaults();
		$labels['name']                  = _x( 'Entertainment', 'Post Type General Name', 'starter_plugin' );
		$labels['singular_name']         = _x( 'Entertainment', 'Post Type Singular Name', 'starter_plugin' );
		$labels['all_items']             = __( 'All Entertainment', 'starter_plugin' );
		$labels['menu_name']             = __( 'Entertainment', 'starter_plugin' );
		$labels['name_admin_bar']        = __( 'Entertainment', 'starter_plugin' );

		$args = Post_Types::get_args_defaults();
		$args['label']               = __( 'Entertainment', 'starter_plugin' );
		$args['description']         = __( 'Entertainment items', 'starter_plugin' );
		$args['labels']              = $labels;
		$args['menu_icon']           = 'dashicons-clipboard';
		$args['rewrite']             = array( 'with_front' => false, 'slug' => 'action' );

		register_post_type( 'ns_entertainment', $args );
	}

	public static function register_about() {
		$labels = Post_Types::get_label_defaults();
		$labels['name']                  = _x( 'About', 'Post Type General Name', 'starter_plugin' );
		$labels['singular_name']         = _x( 'About', 'Post Type Singular Name', 'starter_plugin' );
		$labels['all_items']             = __( 'All items', 'starter_plugin' );
		$labels['menu_name']             = __( 'About', 'starter_plugin' );
		$labels['name_admin_bar']        = __( 'About', 'starter_plugin' );

		$args = Post_Types::get_args_defaults();
		$args['label']               = __( 'About', 'starter_plugin' );
		$args['description']         = __( 'About Pages', 'starter_plugin' );
		$args['labels']              = $labels;
		$args['menu_icon']           = 'dashicons-info';
		$args['rewrite']             = array( 'with_front' => false, 'slug' => 'about' );

		register_post_type( 'ns_about', $args );
	}

	public static function register_issue() {
		$labels = Post_Types::get_label_defaults();
		$labels['name']                  = _x( 'Issues', 'Post Type General Name', 'starter_plugin' );
		$labels['singular_name']         = _x( 'Issue', 'Post Type Singular Name', 'starter_plugin' );
		$labels['all_items']             = __( 'All Issues', 'starter_plugin' );
		$labels['menu_name']             = __( 'Issues', 'starter_plugin' );
		$labels['name_admin_bar']        = __( 'Issue', 'starter_plugin' );

		$args = Post_Types::get_args_defaults();
		$args['label']               = __( 'Issue', 'starter_plugin' );
		$args['description']         = __( 'Animal Rights Basics issues', 'starter_plugin' );
		$args['labels']              = $labels;
		$args['menu_icon']           = 'dashicons-warning';
		$args['rewrite']             = array( 'with_front' => false, 'slug' => 'issues' );

		register_post_type( 'ns_issue', $args );
	}

	public static function register_recipe() {
		$labels = Post_Types::get_label_defaults();
		$labels['name']                  = _x( 'Recipes', 'Post Type General Name', 'starter_plugin' );
		$labels['singular_name']         = _x( 'Recipe', 'Post Type Singular Name', 'starter_plugin' );
		$labels['all_items']             = __( 'All Recipes', 'starter_plugin' );
		$labels['menu_name']             = __( 'Recipes', 'starter_plugin' );
		$labels['name_admin_bar']        = __( 'Recipe', 'starter_plugin' );

		$args = Post_Types::get_args_defaults();
		$args['label']               = __( 'Recipe', 'starter_plugin' );
		$args['description']         = __( 'Recipe posts', 'starter_plugin' );
		$args['labels']              = $labels;
		$args['menu_icon']           = 'dashicons-carrot';
		$args['rewrite']             = array( 'with_front' => false, 'slug' => 'recipes' );

		register_post_type( 'ns_recipe', $args );
	}

	private static function get_label_defaults() {
		return array(
			'name'                  => _x( 'Pages', 'Post Type General Name', 'starter_plugin' ),
			'singular_name'         => _x( 'Page', 'Post Type Singular Name', 'starter_plugin' ),
			'menu_name'             => __( 'Pages', 'starter_plugin' ),
			'name_admin_bar'        => __( 'Page', 'starter_plugin' ),
			'archives'              => __( 'Page Archives', 'starter_plugin' ),
			'parent_item_colon'     => __( 'Parent Page:', 'starter_plugin' ),
			'all_items'             => __( 'All Pages', 'starter_plugin' ),
			'add_new_item'          => __( 'Add New Page', 'starter_plugin' ),
			'add_new'               => __( 'Add New', 'starter_plugin' ),
			'new_item'              => __( 'New Page', 'starter_plugin' ),
			'edit_item'             => __( 'Edit Page', 'starter_plugin' ),
			'update_item'           => __( 'Update Page', 'starter_plugin' ),
			'view_item'             => __( 'View Page', 'starter_plugin' ),
			'search_items'          => __( 'Search Page', 'starter_plugin' ),
			'not_found'             => __( 'Not found', 'starter_plugin' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'starter_plugin' ),
			'featured_image'        => __( 'Featured Image', 'starter_plugin' ),
			'set_featured_image'    => __( 'Set featured image', 'starter_plugin' ),
			'remove_featured_image' => __( 'Remove featured image', 'starter_plugin' ),
			'use_featured_image'    => __( 'Use as featured image', 'starter_plugin' ),
			'insert_into_item'      => __( 'Insert into page', 'starter_plugin' ),
			'uploaded_to_this_item' => __( 'Uploaded to this page', 'starter_plugin' ),
			'items_list'            => __( 'Pages list', 'starter_plugin' ),
			'items_list_navigation' => __( 'Pages list navigation', 'starter_plugin' ),
			'filter_items_list'     => __( 'Filter pages list', 'starter_plugin' ),
		);
	}

	private static function get_args_defaults() {
		return array(
			'label'                 => __( 'Page', 'starter_plugin' ),
			'description'           => __( 'Page Description', 'starter_plugin' ),
			'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'page-attributes' ),
			'taxonomies'            => array( 'category', 'placement' ),
			'hierarchical'          => true,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 25,
			'menu_icon'             => 'dashicons-admin-page',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'rewrite'               => array( 'with_front' => false, 'slug' => 'page' ),
			'exclude_from_search'   => false,
			'query_var'             => true,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
	}


	private static function unset_element_from_array( $element, $array ) {
		$comments_key = array_search( $element, $array );
		if ( false !== $comments_key ) {
			unset( $array[ $comments_key ] );
		}
		return $array;
	}
	public static function categories_to_pages() {
		register_taxonomy_for_object_type( 'category', 'page' );
		add_post_type_support( 'page', 'excerpt' );
	}
}
