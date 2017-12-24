<?php /* Template Name: Agenda */ ?>
<?php require_login(); ?>
<?php get_header(); ?>

<section id="grid-system">
  <div class="page-header">
			<a href="/wp-admin/post-new.php?post_type=agenda" class="btn btn-large pull-right">Agenda item toevoegen</a>
    <h1>Agenda</h1>
  </div>

  <div class="row">
	<div class="span12">
		<?php

	// find date time now
	$date_now = date('Y-m-d H:i:s');
	$time_now = strtotime($date_now);


	// find date time in 7 days
	$time_next_week = strtotime('+200 week', $time_now);
	$date_next_week = date('Y-m-d H:i:s', $time_next_week);

	$posts = get_posts(array(
		'posts_per_page'	=> 100,
		'post_type'			=> 'agenda',
		'meta_query' 		=> array(
			array(
						'key'			=> 'start',
						'compare'		=> 'BETWEEN',
						'value'			=> array( $date_now, $date_next_week ),
						'type'			=> 'DATETIME'
				)
			),
		'order'				=> 'ASC',
		'orderby'			=> 'meta_value',
		'meta_key'			=> 'start',
		'meta_type'			=> 'DATETIME'

		)); if( $posts ): ?>

		<?php foreach( $posts as $post ): setup_postdata( $post ); ?>

		<div class="message span12">

			<div class="message-header">
				<span class="comment-count">
					 <?php edit_post_link( $link, $before, $after, $id, $class ); ?>
				</span>
			<h3><?php the_title(); ?></h3>
			<span style="color:#888;"><?php the_field('type'); ?></span>
			<?php
				$datestart = get_field('start', false, false);
				$datestartday = date_i18n("l j F", strtotime($datestart));
				$datestarttime = date_i18n("H:i", strtotime($datestart));

				$dateend = get_field('einde', false, false);
				$dateendday = date_i18n("l j F", strtotime($dateend));
				$dateendtime = date_i18n("H:i", strtotime($dateend));
			?>

			<p><strong><?php echo ucfirst($datestartday); ?> van <?php echo $datestarttime; ?> tot
			<?php echo ($datestartday != $dateendday) ? $dateendday : ''; ?>
			<?php echo $dateendtime; ?></strong> <span style="color: #ddd;">.</span></p>
			</div>

			<div class="message-footer">
			<img src="<?php the_field( 'resident_profile_image', 'user_'. $post->post_author ); ?>" width="40" height="40" alt="" />
			Organisator: <?php echo the_author_firstname( $post->post_author ); ?> <?php echo the_author_lastname( $post->post_author ); ?> -
			<?php if ( get_the_modified_date('c') == get_the_date('c') ) {  /* Als het bericht nieuw is */  ?>
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
  </div>


</section>

<?php get_footer(); ?>
