<?php get_header(); ?>


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
				
					<img src="/images/made/content/member_photos/temp_file__MG_29551_40_40_all_3_c1.jpg" width="40" height="40" alt="" />
					<a href="http://intranet.klopvaart.nl/bewoners/martijn-blom">Martijn</a> is beheerder van dit document. Laatste wijziging: 27 december om 20:00 

				</div>

			</div>

		<form id="comment_form" method="post" action="http://intranet.klopvaart.nl/documentatie/internetcommissie"  >
<div class='hiddenFields'>
<input type="hidden" name="ACT" value="1" />
<input type="hidden" name="RET" value="http://intranet.klopvaart.nl/documentatie/internetcommissie" />
<input type="hidden" name="URI" value="documentatie/internetcommissie" />
<input type="hidden" name="PRV" value="" />
<input type="hidden" name="XID" value="dd39e0e89dffd99f887899115e29a4ce3b388d89" />
<input type="hidden" name="entry_id" value="938" />
<input type="hidden" name="site_id" value="1" />
</div>


<div class="message span8">
	<div class="message-header">
		<h3>Reageren</h3>
	</div>

	<div class="message-body">

		<textarea class="xlarge" name="comment" cols="30" rows="12"></textarea>

		<div class="well form-inline ">
			<input type="submit" name="submit" class="btn btn-primary" value="Reactie plaatsen" />
			<label class="checkbox"><input type="checkbox" name="notify_me" value="yes"  /> Mail me bij nieuwe reacties<label>
		</div>

	</div>

</div>
</form>

		</div>




		<div class="span4">

		

		

						<div class="message span4">
			<div class="message-header">
			<h3>Gerelateerde Documenten</h3>
			</div>
			<div class="message-body">
			<ul class="overview">
			
			<li><i class="icon-file"></i><a href="/documentatie/intranet-wensenlijstjes">Intranet wensenlijstjes</a></li>

			
		

			
			<li><i class="icon-file"></i><a href="/documentatie/klopvaart.nl-email-adressen">Klopvaart.nl email adressen</a></li>

			
		

			
			<li><i class="icon-file"></i><a href="/documentatie/licenties">Software Licenties</a></li>

						</ul>
			</div>
			</div>
			
		

		

		

			<div class="message span4">
			<div class="message-header">
			<h3>Commissies</h3>
			</div>
			<div class="message-body">
			<ul class="overview">
	
		<li><i class="icon-file"></i><a href="/documentatie/activiteiten">Activiteiten</a></li>
	
		<li><i class="icon-file"></i><a href="/documentatie/barcommissie">Barcommissie</a></li>
	
		<li><i class="icon-file"></i><a href="/documentatie/beheercommissie">Beheercommissie</a></li>
	
		<li><i class="icon-file"></i><a href="/documentatie/klopper">De Klopper</a></li>
	
		<li><i class="icon-file"></i><a href="/documentatie/eetcafe">Eetcafé</a></li>
	
		<li><i class="icon-file"></i><a href="/documentatie/filmcommissie">Filmcommissie</a></li>
	
		<li><i class="icon-file"></i><a href="/documentatie/internetcommissie">Internetcommissie</a></li>
	
		<li><i class="icon-file"></i><a href="/documentatie/intranet-wensenlijstjes">Intranet wensenlijstjes</a></li>
	
		<li><i class="icon-file"></i><a href="/documentatie/kascommissie">Kascommissie</a></li>
	
		<li><i class="icon-file"></i><a href="/documentatie/tuincommissie">Tuincommissie</a></li>
	
		<li><i class="icon-file"></i><a href="/documentatie/wachtlijstcommissie">Wachtlijstcommissie</a></li>
	
		<li><i class="icon-file"></i><a href="/documentatie/welkommissie">Welkommissie</a></li>
	
</ul>
			</div>
			</div>

		

		</div>



	</div>

</section>


<?php get_footer(); ?>