<?php

// Add scripts and stylesheets
function knock_knock_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/asset/bootstrap.css' );
	wp_enqueue_style( 'docs', get_template_directory_uri() . '/asset/docs.css' );
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/asset/custom.css' );
	wp_enqueue_style( 'prettify', get_template_directory_uri() . '/asset/prettify.css' );
	wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/js/css/jquery-ui-1.8.21.custom.css' );
}

add_action( 'wp_enqueue_scripts', 'knock_knock_scripts' );

function require_login()
{
	if (!is_user_logged_in()) {
		auth_redirect();
	}
}

// Creat shortcode for first name
function userName() {
    global $current_user;
    return $current_user->first_name;
}

add_shortcode('user_firstname', 'userName');

// WordPress Titles
add_theme_support( 'title-tag' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

// Creat Menu for the Theme
function register_my_menus() {
  register_nav_menus(
    array(
      'menu' => __( 'Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Wordpress balk verbergen voor ingelogde gebruikers
if (!current_user_can(‘edit_posts’)) {
 show_admin_bar(false);
}

// Creat Post Types for Knock Knock
function cptui_register_my_cpts() {

	/**
	 * Post Type: Documenten.
	 */

	$labels = array(
		"name" => __( 'Documenten', '' ),
		"singular_name" => __( 'Document', '' ),
		"menu_name" => __( 'Documentatie', '' ),
		"all_items" => __( 'Alle documenten', '' ),
		"add_new" => __( 'Nieuw (document) toevoegen', '' ),
		"add_new_item" => __( 'Voeg nieuwe document toe', '' ),
		"edit_item" => __( 'Bewerk document', '' ),
		"new_item" => __( 'Nieuw document', '' ),
		"view_item" => __( 'Bekijk docuement', '' ),
		"view_items" => __( 'Toon documenten', '' ),
		"search_items" => __( 'Zoek document', '' ),
		"not_found" => __( 'Geen documenten gevonden', '' ),
	);

	$args = array(
		"label" => __( 'Documenten', '' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "documentatie", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail","author" ),
	);

	register_post_type( "documentatie", $args );

	/**
	 * Post Type: Berichten.
	 */

	$labels = array(
		"name" => __( 'Berichten', '' ),
		"singular_name" => __( 'Bericht', '' ),
	);

	$args = array(
		"label" => __( 'Berichten', '' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "berichten", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "berichten", $args );

	/**
	 * Post Type: Agenda items.
	 */

	$labels = array(
		"name" => __( 'Agenda items', '' ),
		"singular_name" => __( 'Agenda item', '' ),
	);

	$args = array(
		"label" => __( 'Agenda items', '' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "agenda", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "agenda", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
