<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>


<?php if ( is_user_logged_in() ) { ?>

      <!-- Main hero unit for a primary marketing message or call to action -->


<?php /*        
		<h2>Hoi <?php $current_user = wp_get_current_user(); echo $current_user->first_name; ?></h2>
*/ ?>
		
		<?php if ( have_posts() ) :  ?>

      <div class="hero-unit-home">
			
		<?php while ( have_posts() ) : the_post(); the_content(); endwhile;  ?>
			
	  </div>		
			
		<?php endif; ?>
		


      <!-- Example row of columns -->
      <div class="row">


	<div class="span8">

		<div class="message span8">
			<div class="message-header">
			<h3>Recente gebeurtenisen</h3>
			</div>
			<div class="stream-body">

				<?php $posts = get_posts(array(
					'posts_per_page'	=> -1,
			     	'orderby'     => 'modified',
		            'order' => 'DESC',
					'post_type'			=> 'any'
				)); if( $posts ): ?>

<!-- hier -->

					<?php foreach( $posts as $post ): setup_postdata( $post ); ?>

						<?php if ( get_post_type( get_the_ID() ) == 'bewoners' ) { ?>
							<div class="stream-item">
								<div class="stream-item-body small">
										<i class="icon-user"></i> Het profiel van <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> is aangepast op <?php the_modified_date(''); ?> om <?php the_modified_date('H:i'); ?>								
								</div>
							</div>
						<?php } ?>

						<?php if ( get_post_type( get_the_ID() ) == 'documentatie' ) { ?>
							<div class="stream-item">
								<div class="stream-item-body small">
										<i class="icon-file"></i> Het document <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> is aangepast op <?php the_modified_date(''); ?> om <?php the_modified_date('H:i'); ?>
								</div>
							</div>
						<?php } ?>

						<?php if ( get_post_type( get_the_ID() ) == 'berichten' ) { ?>
							
							<?php if ( get_the_modified_date() == get_the_date() ) {  /* Als het bericht nieuw is */  ?>
								<div class="stream-item">
									<div class="stream-item-body small">
											<i class="icon-bullhorn"></i> Het bericht <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> is geplaatst op <?php the_modified_date(''); ?> om <?php the_modified_date('H:i'); ?>
									</div>
								</div>
							<?php } else {  /* Als het bericht is aangepast */  ?>
								<div class="stream-item">
									<div class="stream-item-body small">
											<i class="icon-bullhorn"></i> Het bericht <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> is aangepast op <?php the_modified_date(''); ?> om <?php the_modified_date('H:i'); ?>
									</div>
								</div>
							<?php } ?>

						<?php } ?>
						

						<?php if ( get_post_type( get_the_ID() ) == 'agenda' ) { ?>
							
							<?php if ( get_the_modified_date() == get_the_date() ) {  /* Als het bericht nieuw is */  ?>
								<div class="stream-item">
									<div class="stream-item-body small">
											<i class="icon-calendar"></i> De activiteit <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> is aangemaakt op <?php the_modified_date(''); ?> om <?php the_modified_date('H:i'); ?>
									</div>
								</div>
							<?php } else {  /* Als het bericht is aangepast */  ?>
								<div class="stream-item">
									<div class="stream-item-body small">
											<i class="icon-calendar"></i> De activiteit <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> is aangepast op <?php the_modified_date(''); ?> om <?php the_modified_date('H:i'); ?>
									</div>
								</div>
							<?php } ?>

						<?php } ?>
					<?php endforeach; ?>

<!-- hier -->

					<?php wp_reset_postdata(); ?>

				<?php endif; ?>
				
				<!-- End All Posts -->

			</div>
		</div>
	</div>
		
		
		
	<div class="span4">

		<?php /* Start Agenda */  


	// find date time now
	$date_now = date('Y-m-d H:i:s');
	$time_now = strtotime($date_now);


	// find date time in 7 days
	$time_next_week = strtotime('+14 day', $time_now);
	$date_next_week = date('Y-m-d H:i:s', $time_next_week);


	// query events
	$posts = get_posts(array(
		'posts_per_page'	=> -1,
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
	));

		if( $posts ): ?>

		<div class="message span4">
			<div class="message-header">
			<h3><a href="/agenda">Agenda</a></h3>
			</div>
			<div class="message-body">
				<ul class="overview">

			<?php foreach( $posts as $post ): setup_postdata( $post ); ?>

						        <li>
									<i class="icon-calendar"></i>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br/>

									<?php if ( 1 == 0) { ?>
										
										<?php 
										$datestart = get_field('start');
										$datestartday = date("j F", strtotime($datestart));
										$datestarttime = date("H:i", strtotime($datestart));
										
										$dateend = get_field('einde');
										$dateendday = date("j F", strtotime($dateend));
										$dateendtime = date("H:i", strtotime($dateend));
										
										?>

										
						 				<?php echo $datestartday; ?> van <?php echo $datestarttime; ?> tot <?php echo $dateendtime; ?><br>
						
									<?php } else { ?>
										van: <?php the_field( 'start' ); ?><br />
										tot: <?php the_field( 'einde' ); ?>
									<?php } ?>

								</li>
								
			<?php endforeach; ?>

				</ul>
			</div>
		</div>

			<?php wp_reset_postdata(); ?>

		<?php endif;    /* Einde Agenda */  ?>


			<?php /* Start Nieuwe bewoners */  

			$posts = get_posts(array(
				'posts_per_page'	=> -1,
	            'order' => 'DESC',
				'post_type'			=> 'bewoners',
				'order'				=> 'DESC',
				'orderby'			=> 'meta_value',
				'meta_key'			=> 'resident_date_since',
				'meta_type'			=> 'DATETIME'
			));

			if( $posts ): ?>

			<div class="message span4">
				<div class="message-header">
				<h3>Nieuwe bewoners</h3>
				</div>
				<div class="message-body">

				<?php foreach( $posts as $post ): setup_postdata( $post ); ?>

					<div class="float-member-home first">
					
					<div class="member-image">
						<img src="<?php the_field( 'resident_profile_image' ); ?>" width="40" height="40" alt="" />
					</div>
					<div class="member-details">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br />
					<div class="member-details-meta"><?php the_field( 'resident_date_since' ); ?> - <span><?php the_field( 'resident_unit' ); ?></span></div>
					</div>
					</div>
		
				<?php endforeach; ?>

				</div>
			</div>

				<?php wp_reset_postdata(); ?>

			<?php endif;    /* Einde Nieuwe bewoners */  ?>

       </div>
      </div>

	<?php } else { ?>

	<?php } ?>

<?php get_footer(); ?>