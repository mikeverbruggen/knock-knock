<?php /* Template Name: Test */ ?>
<?php get_header(); ?>

<section id="grid-system">

	<?php 

	// vars
	$my_post = array(
		'post_title'	=> 'Test 5',
		'post_type'		=> 'bewoners',
		'post_status'	=> 'publish'
	);

	// insert the post into the database
	$post_id = wp_insert_post( $my_post );

	// save a basic text value
	$field_key = "resident_unit";
	$value = "Cubadreef 6";
	update_field( $field_key, $value, $post_id );

	// save a basic text value
	$field_key = "resident_date_since";
	$value = "26/05/2017";
	update_field( $field_key, $value, $post_id );

	// save a basic text value
	$field_key = "resident_phone";
	$value = "0639896153";
	update_field( $field_key, $value, $post_id );

	// save a basic text value
	$field_key = "resident_email";
	$value = "mike@slmmr.nl";
	update_field( $field_key, $value, $post_id );

	// save a basic text value
	$field_key = "resident_profile_image";
	$value = "http://intranet.kv2017.slmmr.nl/wp-content/uploads/sites/2/2017/05/ikke-vierkant-1024-1024x1024.jpg";
	update_field( $field_key, $value, $post_id );

	?>


</section>

<?php get_footer(); ?>