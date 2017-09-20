<?php /* Template Name: Agenda */ ?>
<?php require_login(); ?>
<?php get_header(); ?>

<section id="grid-system">
  <div class="page-header">
    <h1>Agenda</h1>
  </div>

  <div class="row">
	<div class="span8">
		<?php $posts = get_posts(array(
			'posts_per_page'	=> -1,
	     	'orderby'     => 'meta_value',
	        'meta_key' => 'start',
            'order' => 'DESC',
			'post_type'			=> 'agenda'
		)); if( $posts ): ?>

		<?php foreach( $posts as $post ): setup_postdata( $post ); ?>
		<div class="message span8">

			<div class="message-header">
			<h3><?php the_title(); ?></h3>
			<p><strong><?php the_field( 'start' ); ?> tot <?php the_field( 'einde' ); ?></strong> <span style="color: #ddd;">.</span></p>
			</div>

			<div class="message-footer">
			<img src="<?php the_field( 'resident_profile_image', 'user_'. $post->post_author ); ?>" width="40" height="40" alt="" />
			Organisator: <?php echo the_author_firstname( $post->post_author ); ?> <?php echo the_author_lastname( $post->post_author ); ?> -

			<?php if ( get_the_modified_date() == get_the_date() ) {  /* Als het bericht nieuw is */  ?>
				 Aangemaakt op <?php the_modified_date(''); ?> om <?php the_modified_date('H:i'); ?>
			<?php } else {  /* Als het bericht is aangepast */  ?>
				Aangepast op <?php the_modified_date(''); ?> om <?php the_modified_date('H:i'); ?>
			<?php } ?>
			</div>

		</div>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>

		<?php endif;    /* Einde Agenda */  ?>

    </div>

	<div class="span4">

		<div class="alert alert-info">
		  This is a dummy tekst.
		</div>

	</div>
</div>


</section>

<?php get_footer(); ?>
