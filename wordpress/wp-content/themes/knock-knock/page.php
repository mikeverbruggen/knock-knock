<?php get_header(); ?>
<?php /* Template Name: Homepage */ ?>

	<div class="jumbotron">
      <div class="container">
        <h1><?php wp_title(''); ?></h1>
      </div>
    </div>

<div class="container">

  <div class="row">
    <div class="col-8">

		<!-- Content -->
		<div class="span12">
			
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

			get_template_part( 'content-page', get_post_format() );

		endwhile; endif; ?>

		</div><!-- /Content -->

    </div>
    <div class="col">

		<ul class="list-group">
		  <li class="list-group-item justify-content-between">
		   <i class="fa fa-camera-retro fa-1x"></i> Cras justo odio
		    <span class="badge badge-default badge-pill">14</span>
		  </li>
		  <li class="list-group-item justify-content-between">
		    Dapibus ac facilisis in
		    <span class="badge badge-default badge-pill">2</span>
		  </li>
		  <li class="list-group-item justify-content-between">
		    Morbi leo risus
		    <span class="badge badge-default badge-pill">1</span>
		  </li>
		</ul>

		<hr>

		<div class="content-box content-box-info" role="content-box">
		  <h4 class="content-box-heading">Laatst gewijzigd</h4>
		  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vel condimentum massa, eu egestas lectus. Morbi at tortor arcu. Nunc feugiat viverra risus nec porta. Maecenas imperdiet nec libero vitae mollis. Morbi tristique diam at risus dignissim auctor. Donec viverra diam in lectus semper vulputate. Pellentesque pretium libero id risus imperdiet egestas. Ut ultricies nibh in volutpat porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed commodo, neque at mattis congue, ligula arcu pulvinar orci, eu sodales turpis tellus mattis tellus. Etiam pretium, quam non interdum semper, nisl tellus ornare massa, at lacinia metus felis ut turpis.</p>
		</div>
		<div class="content-box content-box-info" role="content-box">
		  <h4 class="content-box-heading">Documentenbeheer</h4>
		  <p class="mb-0">This is Knock Knock, the first Cohousing Intranet Wordpress Theme.</p>
		</div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
