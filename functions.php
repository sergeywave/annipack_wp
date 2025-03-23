<?php

/**
 * annipack functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package annipack
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function annipack_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on annipack, use a find and replace
		* to change 'annipack' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('annipack', get_template_directory() . '/languages');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_image_size('1200x660', 1200, 660, true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-header' => esc_html__('Меню в шапке', 'annipack'),
			'menu-footer' => esc_html__('Меню в подвале', 'annipack'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
}
add_action('after_setup_theme', 'annipack_setup');



// Delete admin bar inline styles
add_action('get_header', 'remove_admin_bar_inline_styles');

function remove_admin_bar_inline_styles() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}


/**
 * Enqueue scripts and styles.
 */
function annipack_scripts() {

	$style_path = get_template_directory() . '/assets/css/style.css';
	$style_version = file_exists($style_path) ? filemtime($style_path) : '4.0';
	$script_path = get_template_directory() . '/assets/js/main.js';
	$script_version = file_exists($script_path) ? filemtime($script_path) : '4.0';

	wp_enqueue_style('mainstyle', get_template_directory_uri() . '/assets/css/style.css', array(), $style_version);
	wp_enqueue_script('mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), $script_version, true);
}

add_action('wp_enqueue_scripts', 'annipack_scripts');



// change_image_editor
function change_image_editor($image_editors)
{
	$image_editors = ['WP_Image_Editor_GD', 'WP_Image_Editor_Imagick'];
	return $image_editors;
}
add_filter('wp_image_editors', 'change_image_editor');

// не изменять качество при загрузке jpg
function fn_jpeg_quality_load($quality)
{
	return 100;
}
add_filter('jpeg_quality', 'fn_jpeg_quality_load');



// archive title
function my_theme_archive_title( $title ) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	} elseif ( is_tax() ) {
		$title = single_term_title( '', false );
	}
	return $title;
}

add_filter( 'get_the_archive_title', 'my_theme_archive_title' );


// Delete meta-tag WordPress
remove_action('wp_head', 'wp_generator');

// Delete WordPress version
function remove_wp_version_from_assets($src) {
	if (strpos($src, 'ver=')) {
			$src = remove_query_arg('ver', $src);
	}
	return $src;
}
add_filter('style_loader_src', 'remove_wp_version_from_assets', 9999);
add_filter('script_loader_src', 'remove_wp_version_from_assets', 9999);







// Disable comments

add_action('admin_init', function () {

	// Redirect any user trying to access comments page

	global $pagenow;



	if ($pagenow === 'edit-comments.php') {

			wp_safe_redirect(admin_url());

			exit;

	}



	// Remove comments metabox from dashboard

	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');



	// Disable support for comments and trackbacks in post types

	foreach (get_post_types() as $post_type) {

			if (post_type_supports($post_type, 'comments')) {

					remove_post_type_support($post_type, 'comments');

					remove_post_type_support($post_type, 'trackbacks');

			}

	}

});



// Close comments on the front-end

add_filter('comments_open', '__return_false', 20, 2);

add_filter('pings_open', '__return_false', 20, 2);



// Hide existing comments

add_filter('comments_array', '__return_empty_array', 10, 2);



// Disable CF7 auto p

add_filter('wpcf7_autop_or_not', '__return_false');



// Remove comments page in menu

add_action('admin_menu', function () {

remove_submenu_page('themes.php', 'customize.php?return=%2Fwp-admin%2Fedit.php%3Fpost_type%3Dpage');

	remove_menu_page('edit-comments.php');

});



// Remove comments links from admin bar

add_action('init', 'remove_admin_bar_comments_menu');

add_action('admin_init', 'remove_admin_bar_comments_menu');



function remove_admin_bar_comments_menu() {

if (is_admin_bar_showing()) {

		remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);

}

}



// Remove <style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
add_filter('wp_img_tag_add_auto_sizes', '__return_false');
