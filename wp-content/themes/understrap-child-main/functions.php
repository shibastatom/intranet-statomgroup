<?php
/**
 * Understrap Child Theme functions and definitions
 *
 * @package UnderstrapChild
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;



/**
 * Removes the parent themes stylesheet and scripts from inc/enqueue.php
 */
function understrap_remove_scripts() {
	wp_dequeue_style( 'understrap-styles' );
	wp_deregister_style( 'understrap-styles' );

	wp_dequeue_script( 'understrap-scripts' );
	wp_deregister_script( 'understrap-scripts' );
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );



/**
 * Enqueue our stylesheet and javascript file
 */
function theme_enqueue_styles() {

	// Get the theme data.
	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );

	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	// Grab asset urls.
	$theme_styles  = "/css/child-theme{$suffix}.css";
	$theme_scripts = "/js/child-theme{$suffix}.js";
	
	$css_version = $theme_version . '.' . filemtime( get_stylesheet_directory() . $theme_styles );

	wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . $theme_styles, array(), $css_version );
	wp_enqueue_script( 'jquery' );
	
	$js_version = $theme_version . '.' . filemtime( get_stylesheet_directory() . $theme_scripts );
	
	wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . $theme_scripts, array(), $js_version, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );



/**
 * Load the child theme's text domain
 */
function add_child_theme_textdomain() {
	load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );



/**
 * Overrides the theme_mod to default to Bootstrap 5
 *
 * This function uses the `theme_mod_{$name}` hook and
 * can be duplicated to override other theme settings.
 *
 * @return string
 */
function understrap_default_bootstrap_version() {
	return 'bootstrap5';
}
add_filter( 'theme_mod_understrap_bootstrap_version', 'understrap_default_bootstrap_version', 20 );



/**
 * Loads javascript for showing customizer warning dialog.
 */
function understrap_child_customize_controls_js() {
	wp_enqueue_script(
		'understrap_child_customizer',
		get_stylesheet_directory_uri() . '/js/customizer-controls.js',
		array( 'customize-preview' ),
		'20130508',
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'understrap_child_customize_controls_js' );

add_action('acf/init', function() {
  if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
  }
});

function create_article_post_type() {
    $labels = array(
        'name'               => 'Articles',
        'singular_name'      => 'Article',
        'menu_name'          => 'Articles',
        'name_admin_bar'     => 'Article',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Article',
        'new_item'           => 'New Article',
        'edit_item'          => 'Edit Article',
        'view_item'          => 'View Article',
        'all_items'          => 'All Articles',
        'search_items'       => 'Search Articles',
        'parent_item_colon'  => 'Parent Articles:',
        'not_found'          => 'No articles found.',
        'not_found_in_trash' => 'No articles found in Trash.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true, 
        'has_archive'        => true, 
        'show_in_rest'       => true,  
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'), 
        'taxonomies'         => array('category', 'post_tag'),  
        'rewrite'            => array('slug' => 'articles'), 
        'menu_icon'          => 'dashicons-clipboard',  
        'show_in_rest'       => true, 
        'capability_type'    => 'post',
        'hierarchical'       => false,
    );

    register_post_type('article', $args);
}

add_action('init', 'create_article_post_type');


function create_updates_post_type() {
    $labels = array(
        'name'               => 'Updates',
        'singular_name'      => 'Update',
        'menu_name'          => 'Updates',
        'name_admin_bar'     => 'Update',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Update',
        'new_item'           => 'New Update',
        'edit_item'          => 'Edit Update',
        'view_item'          => 'View Update',
        'all_items'          => 'All Updates',
        'search_items'       => 'Search Updates',
        'parent_item_colon'  => 'Parent Updates:',
        'not_found'          => 'No updates found.',
        'not_found_in_trash' => 'No updates found in Trash.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true, 
        'has_archive'        => true, 
        'show_in_rest'       => true,  
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'), 
        'taxonomies'         => array('category', 'post_tag'),  
        'rewrite'            => array('slug' => 'updates'), 
        'menu_icon'          => 'dashicons-megaphone',  
        'show_in_rest'       => true, 
        'capability_type'    => 'post',
        'hierarchical'       => false,
    );

    register_post_type('update', $args);
}

add_action('init', 'create_updates_post_type');