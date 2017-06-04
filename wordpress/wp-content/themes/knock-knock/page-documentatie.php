<?php /* Template Name: Documentatie */ ?>
<?php get_header(); ?>

<section id="grid-system">

	<div class="page-header">
		<h1>Pagina's</h1>
	</div>

	<div class="row">
		<!-- Content -->
		<div class="span12">
			
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

			get_template_part( 'content-page', get_post_format() );

		endwhile; endif; ?>

		</div><!-- /Content -->



	</div>

</section>

<?php get_footer(); ?>