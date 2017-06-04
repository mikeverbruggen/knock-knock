<?php

// Add scripts and stylesheets
function klopvaart_intranet_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/asset/bootstrap.css' );
	wp_enqueue_style( 'docs', get_template_directory_uri() . '/asset/docs.css' );
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/asset/custom.css' );
	wp_enqueue_style( 'prettify', get_template_directory_uri() . '/asset/prettify.css' );
	wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/js/css/jquery-ui-1.8.21.custom.css' );
}

add_action( 'wp_enqueue_scripts', 'klopvaart_intranet_scripts' );

// WordPress Titles
add_theme_support( 'title-tag' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

register_nav_menus( array(
	'header' => 'Header',
	'footer' => 'Footer',
) );

// Add posttypes - generated with CPT UI
function cptui_register_my_cpts() {

	/**
	 * Post Type: Bewoners.
	 */

	$labels = array(
		"name" => __( 'Bewoners', '' ),
		"singular_name" => __( 'Bewoner', '' ),
		"menu_name" => __( 'Bewoners', '' ),
		"all_items" => __( 'Alle bewoners', '' ),
		"add_new" => __( 'Nieuwe toevoegen', '' ),
		"add_new_item" => __( 'Voeg een nieuwe bewoner toe', '' ),
		"edit_item" => __( 'Bewerk bewoner', '' ),
		"new_item" => __( 'Nieuwe bewoner', '' ),
		"view_item" => __( 'Bekijk bewoner', '' ),
		"view_items" => __( 'Bekijk bewoners', '' ),
		"search_items" => __( 'Zoek bewoner', '' ),
		"not_found" => __( 'Geen bewoners gevonden', '' ),
	);

	$args = array(
		"label" => __( 'Bewoners', '' ),
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
		"rewrite" => array( "slug" => "bewoners", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "bewoners", $args );

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
		"supports" => array( "title", "editor", "thumbnail" ),
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




// Add posttypes - generated with advanced custom field PRO
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_59232d53107e1',
	'title' => 'Agenda',
	'fields' => array (
		array (
			'key' => 'field_59232d5de71f1',
			'label' => 'Start',
			'name' => 'start',
			'type' => 'date_time_picker',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'd/m/Y g:i a',
			'return_format' => 'j F Y H:i',
			'first_day' => 1,
		),
		array (
			'key' => 'field_59232dade71f2',
			'label' => 'Einde',
			'name' => 'einde',
			'type' => 'date_time_picker',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'd/m/Y g:i a',
			'return_format' => 'j F Y H:i',
			'first_day' => 1,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'agenda',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_5921aaf7eab20',
	'title' => 'Bewoners',
	'fields' => array (
		array (
			'key' => 'field_5921ad0dfa46c',
			'label' => 'Afbeelding',
			'name' => 'resident_profile_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'uploadedTo',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_5921aafdb7a1c',
			'label' => 'Bewoner sinds',
			'name' => 'resident_date_since',
			'type' => 'date_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'd/m/Y',
			'return_format' => 'j F Y',
			'first_day' => 1,
		),
		array (
			'key' => 'field_5921ab89b7a1d',
			'label' => 'Huis',
			'name' => 'resident_unit',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'Cubadreef 2' => 'Cubadreef 2',
				'Cubadreef 4' => 'Cubadreef 4',
				'Cubadreef 6' => 'Cubadreef 6',
				'Haitidreef 1' => 'Haitidreef 1',
				'Haitidreef 3' => 'Haitidreef 3',
				'Haitidreef 5' => 'Haitidreef 5',
				'Haitidreef 7' => 'Haitidreef 7',
				'Haitidreef 9' => 'Haitidreef 9',
				'Haitidreef 11' => 'Haitidreef 11',
				'Granadadreef 1' => 'Granadadreef 1',
				'Granadadreef 3' => 'Granadadreef 3',
				'Granadadreef 5' => 'Granadadreef 5',
			),
			'default_value' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array (
			'key' => 'field_5923e06b4a19b',
			'label' => 'Telefoonnummer',
			'name' => 'resident_phone',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_5923e0bd4a19c',
			'label' => 'E-mailadres',
			'name' => 'resident_email',
			'type' => 'email',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'bewoners',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'excerpt',
		2 => 'custom_fields',
		3 => 'discussion',
		4 => 'comments',
		5 => 'revisions',
		6 => 'slug',
		7 => 'author',
		8 => 'format',
		9 => 'page_attributes',
		10 => 'featured_image',
		11 => 'categories',
		12 => 'tags',
		13 => 'send-trackbacks',
	),
	'active' => 1,
	'description' => '',
));

endif;