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