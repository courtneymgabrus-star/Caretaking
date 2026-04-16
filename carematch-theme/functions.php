<?php
/**
 * CareMatch Theme Functions
 *
 * @package CareMatch
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// ─────────────────────────────────────────────
// Theme Setup
// ─────────────────────────────────────────────
function carematch_setup() {
	// Allow WordPress to manage the <title> tag
	add_theme_support( 'title-tag' );

	// Enable featured images
	add_theme_support( 'post-thumbnails' );

	// HTML5 markup support
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );

	// Wide and full alignment for blocks
	add_theme_support( 'align-wide' );

	// Register primary navigation menu
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'carematch' ),
		'footer'  => __( 'Footer Navigation', 'carematch' ),
	) );
}
add_action( 'after_setup_theme', 'carematch_setup' );


// ─────────────────────────────────────────────
// Enqueue Styles & Scripts
// ─────────────────────────────────────────────
function carematch_enqueue_assets() {
	// Google Fonts
	wp_enqueue_style(
		'carematch-fonts',
		'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&display=swap',
		array(),
		null
	);

	// Main stylesheet
	wp_enqueue_style(
		'carematch-style',
		get_stylesheet_uri(),
		array( 'carematch-fonts' ),
		wp_get_theme()->get( 'Version' )
	);

	// Main JS (loaded in footer)
	wp_enqueue_script(
		'carematch-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	// Pass site URL to JS for any AJAX or dynamic use
	wp_localize_script( 'carematch-main', 'careMatchData', array(
		'siteUrl'   => esc_url( home_url() ),
		'ajaxUrl'   => admin_url( 'admin-ajax.php' ),
		'nonce'     => wp_create_nonce( 'carematch_nonce' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'carematch_enqueue_assets' );


// ─────────────────────────────────────────────
// Waitlist Form AJAX Handler
// ─────────────────────────────────────────────
function carematch_handle_waitlist() {
	check_ajax_referer( 'carematch_nonce', 'nonce' );

	$email = isset( $_POST['email'] ) ? sanitize_email( $_POST['email'] ) : '';
	$role  = isset( $_POST['role'] )  ? sanitize_text_field( $_POST['role'] ) : 'family';

	if ( ! is_email( $email ) ) {
		wp_send_json_error( array( 'message' => __( 'Please enter a valid email address.', 'carematch' ) ) );
	}

	// Store the waitlist entry as a custom post
	$post_id = wp_insert_post( array(
		'post_type'   => 'cm_waitlist',
		'post_title'  => $email,
		'post_status' => 'private',
		'meta_input'  => array(
			'cm_email' => $email,
			'cm_role'  => $role,
		),
	) );

	if ( is_wp_error( $post_id ) ) {
		wp_send_json_error( array( 'message' => __( 'Something went wrong. Please try again.', 'carematch' ) ) );
	}

	// Notify admin
	$admin_email = get_option( 'admin_email' );
	$subject     = sprintf( __( 'New CareMatch Waitlist Sign-up: %s', 'carematch' ), $email );
	$message     = sprintf(
		__( "A new person has joined the CareMatch waitlist.\n\nEmail: %s\nRole: %s\n\nLog in to manage: %s", 'carematch' ),
		$email,
		$role,
		admin_url()
	);
	wp_mail( $admin_email, $subject, $message );

	wp_send_json_success( array(
		'message' => __( "🎉 You're on the list! We'll be in touch as we launch in your area.", 'carematch' ),
	) );
}
add_action( 'wp_ajax_carematch_waitlist',        'carematch_handle_waitlist' );
add_action( 'wp_ajax_nopriv_carematch_waitlist', 'carematch_handle_waitlist' );


// ─────────────────────────────────────────────
// Custom Post Type: Waitlist
// ─────────────────────────────────────────────
function carematch_register_cpts() {
	register_post_type( 'cm_waitlist', array(
		'labels'       => array(
			'name'          => __( 'Waitlist Entries', 'carematch' ),
			'singular_name' => __( 'Waitlist Entry', 'carematch' ),
		),
		'public'       => false,
		'show_ui'      => true,
		'show_in_menu' => true,
		'supports'     => array( 'title' ),
		'menu_icon'    => 'dashicons-groups',
	) );
}
add_action( 'init', 'carematch_register_cpts' );


// ─────────────────────────────────────────────
// Custom Admin Column: Role
// ─────────────────────────────────────────────
function carematch_waitlist_columns( $columns ) {
	$columns['cm_role']  = __( 'Role', 'carematch' );
	$columns['cm_email'] = __( 'Email', 'carematch' );
	return $columns;
}
add_filter( 'manage_cm_waitlist_posts_columns', 'carematch_waitlist_columns' );

function carematch_waitlist_column_content( $column, $post_id ) {
	if ( 'cm_role' === $column ) {
		echo esc_html( ucfirst( get_post_meta( $post_id, 'cm_role', true ) ) );
	}
	if ( 'cm_email' === $column ) {
		echo esc_html( get_post_meta( $post_id, 'cm_email', true ) );
	}
}
add_action( 'manage_cm_waitlist_posts_custom_column', 'carematch_waitlist_column_content', 10, 2 );
