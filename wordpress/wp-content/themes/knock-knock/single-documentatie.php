<?php get_header(); ?>

<?php if ( is_user_logged_in() ) { ?>

<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<section id="grid-system">
	<div class="page-header">
	    <h1><a href="/documentatie">Documentatie</a></h1>
	</div>

	<div class="row">
		<div class="span8">

			<div class="message span8">
				<div class="message-header">
					<h3><?php the_title(); ?> <small></small></h3>
				</div>
				<div class="message-body">
						<?php the_content(); ?>
				</div>

				<div class="message-footer">
				<img src="<?php the_field( 'resident_profile_image', 'user_'. $post->post_author ); ?>" width="40" height="40" alt="" />
				<?php echo the_author_firstname( $post->post_author ); ?> is beheerder van dit document. - 

				<?php if ( get_the_modified_date() == get_the_date() ) {  /* Als het bericht nieuw is */  ?>
					 Aangemaakt op <?php the_modified_date(''); ?> om <?php the_modified_date('H:i'); ?>
				<?php } else {  /* Als het bericht is aangepast */  ?>
					Aangepast op <?php the_modified_date(''); ?> om <?php the_modified_date('H:i'); ?>
				<?php } ?>
				</div>

			</div>

		</div>

		<div class="span4">
		<?php // Document relations
			$post = get_field( 'relatie' );
			if ( $post ):
				setup_postdata( $post ); ?>

				<div class="message span4">
				<div class="message-header">
				<h3>Dit document hoort bij</h3>
				</div>

				<div class="message-body">
					<ul class="overview">
						<li><i class="icon-file"></i><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					</ul>
				</div>

			</div>
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
		<?php // no rows found ?>
		<?php endif; // End document relations ?>


		<div class="message span4">
		<div class="message-header">
		<h3>Gerelateerde Documenten</h3>
		</div>
		<div class="message-body">
		<ul class="overview">

				<?php 

				/*
				*  Query posts for a relationship value.
				*  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
				*/

				$doctors = get_posts(array(
					'post_type' => 'documentatie',
					'meta_query' => array(
						array(
							'key' => 'relatie', // name of custom field
							'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
							'compare' => 'LIKE'
						)
					)
				));

				?>
				<?php if( $relatie ): ?>
					<ul>
					<?php foreach( $relatie as $relatie ): ?>

						<li>
							<a href="<?php echo get_permalink( $relatie->ID ); ?>">
								<?php echo get_the_title( $relatie->ID ); ?>
							</a>
						</li>
					<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			
			</ul>
			</div>
			</div>

			<?php // Download overzicht
			if ( have_rows( 'downloads' ) ) : ?>

				<div class="message span4">

					<div class="message-header">
					<h3>Downloads</h3>
					</div>

					<div class="message-body">
						<ul class="overview">

						<?php while ( have_rows( 'downloads' ) ) : the_row(); ?>
						<?php $bestand = get_sub_field( 'bestand' ); ?>
						<?php if ( $bestand ) { ?>
							<li><i class="icon-file"></i><a href="<?php echo $bestand['url']; ?>"><?php the_sub_field( 'omschrijving' ); ?></a></li>
						<?php } ?>
						<?php endwhile; ?>

						</ul>
					</div>

				</div>

			<?php else : ?>
			<?php // no rows found ?>
			<?php endif; // Einde Download overzicht ?>
	


		</div>

	</div>

</section>

<?php endwhile; ?>

<?php } else { ?>
<?php } ?>

<?php get_footer(); ?>