<?php if ( post_password_required() ) {
	return;
} ?>



<?php if ( have_comments() ) : ?>
<div class="message span8">
	<div class="message-header">
		<h3>
			<?php
			printf( _nx( 'Eén reactie op “%2$s”', '%1$s comments on “%2$s”', get_comments_number(), 'comments title'),
				number_format_i18n( get_comments_number() ), get_the_title() );
			?>		
	</h3>
	</div>
	<div class="stream-body">

		<?php 
		wp_list_comments( array(
			'short_ping'  => true,
			'avatar_size' => 40,
		) );
		?>

	</div>

</div>
		<?php endif; ?>

		<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
			<p class="no-comments">
				<?php _e( 'Comments are closed.' ); ?>
			</p>
		<?php endif; ?>


<div class="message span8">

	<div class="message-header">
		<h3>Reageren</h3>
	</div>

	<div class="message-body">

		<?php comment_form(); ?>

	</div>

</div>


