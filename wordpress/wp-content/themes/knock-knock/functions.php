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
	'key' => 'group_59208fde0a223',
	'title' => 'Bewoner',
	'fields' => array (
		array (
			'key' => 'field_5915150e50e48',
			'label' => 'Huis',
			'name' => 'huis',
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
				'Haiti 3' => 'Haiti 3',
				'Cuba 6' => 'Cuba 6',
			),
			'default_value' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'return_format' => 'value',
		),
		array (
			'key' => 'field_59151b9d02ad3',
			'label' => 'Pasfoto',
			'name' => 'pasfoto',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'return_format' => 'array',
			'min_width' => 0,
			'min_height' => 0,
			'min_size' => 0,
			'max_width' => 0,
			'max_height' => 0,
			'max_size' => 0,
			'mime_types' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'user_role',
				'operator' => '==',
				'value' => 'all',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'permalink',
		1 => 'the_content',
		2 => 'excerpt',
		3 => 'custom_fields',
		4 => 'discussion',
		5 => 'comments',
		6 => 'revisions',
		7 => 'slug',
		8 => 'author',
		9 => 'format',
		10 => 'featured_image',
		11 => 'categories',
		12 => 'tags',
		13 => 'send-trackbacks',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_59208fde2c2ad',
	'title' => 'Documentatie',
	'fields' => array (
		array (
			'key' => 'field_59208e8dfe7b3',
			'label' => 'Titel',
			'name' => 'documentatie_titel',
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
			'formatting' => 'html',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59208e6dfe7b2',
			'label' => 'Inhoud',
			'name' => 'documentatie_inhoud',
			'type' => 'textarea',
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
			'maxlength' => '',
			'rows' => '',
			'new_lines' => 'br',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'documentatie',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_59208fde38f20',
	'title' => 'Bewoners',
	'fields' => array (
		array (
			'key' => 'field_591486a1dc8d9',
			'label' => 'Basis',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_59146b1a8faa9',
			'label' => 'Voornaam',
			'name' => 'resident_first_name',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
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
			'formatting' => 'html',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59146bb58faaa',
			'label' => 'Achternaam',
			'name' => 'resident_last_name',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
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
			'formatting' => 'html',
			'maxlength' => '',
		),
		array (
			'key' => 'field_5914894e0fc84',
			'label' => 'Details',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_591470f935367',
			'label' => 'Pasfoto',
			'name' => 'resident_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'return_format' => 'id',
			'min_width' => 0,
			'min_height' => 0,
			'min_size' => 0,
			'max_width' => 0,
			'max_height' => 0,
			'max_size' => 0,
			'mime_types' => '',
		),
		array (
			'key' => 'field_591488e4316c3',
			'label' => 'Geboortedatum',
			'name' => 'geboortedatum',
			'type' => 'date_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'first_day' => 1,
			'return_format' => 'd/m/Y',
			'display_format' => 'd/m/Y',
		),
		array (
			'key' => 'field_591859eaebeca',
			'label' => 'Geslacht',
			'name' => 'sex',
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
				'male' => 'Man',
				'female' => 'Vrouw',
				'other' => 'Anders',
			),
			'default_value' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'return_format' => 'value',
		),
		array (
			'key' => 'field_5914896f0fc85',
			'label' => 'Via',
			'name' => 'via',
			'type' => 'user',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'role' => '',
			'allow_null' => 0,
			'multiple' => 0,
		),
		array (
			'key' => 'field_591489850fc86',
			'label' => '',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'esc_html' => 0,
			'new_lines' => 'wpautop',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'residents',
			),
		),
	),
	'menu_order' => 2,
	'position' => 'acf_after_title',
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
		7 => 'format',
		8 => 'featured_image',
		9 => 'categories',
		10 => 'tags',
		11 => 'send-trackbacks',
	),
	'active' => 1,
	'description' => '',
));

endif;