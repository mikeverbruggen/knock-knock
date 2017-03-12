<div class="message span8">
	<div class="message-header">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> (Content Single)</h3>
	</div>

	<?php if ( has_post_thumbnail() ) { ?>
	<div class="images-body">
		<div id="myCarousel2228" class="carousel slide" data-pause="hover">
			<div class="carousel-inner">
				<div class="item active">

	<?php the_post_thumbnail( array(620, 620) ); ?>
	
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	
	<div class="message-body">
		 <?php the_content(); ?>
	</div>
	<div class="message-footer">
		Geplaatst door <a href=""><?php the_author(); ?></a>
		op <?php the_date(); ?> 
	</div>
</div>