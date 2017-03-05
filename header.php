
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

   <?php wp_head(); ?>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="/asset/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/asset/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/asset/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/asset/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/asset/ico/apple-touch-icon-57-precomposed.png">

    <script src="<?php bloginfo('template_directory');?>/js/jquery.js"></script>

  </head>

  <body data-spy="scroll" data-target=".subnav" data-offset="50">


  <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top first" style=" z-index: 20;">
      <div class="navbar-inner">
        <div class="container">
			<a class="brand" href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a>

            <ul class="nav pull-right">
			  <li class="dropdown">
			    <a href="#"
			          class="dropdown-toggle"
			          data-toggle="dropdown">
			          <?php echo get_option('say_hello'); ?> Mike Verbruggen
			          <b class="caret"></b>
			    </a>
			    <ul class="dropdown-menu">
	                <li><a href="/bewoners/mike-verbruggen">Profiel bekijken</a></li>
	                <li><a href="/profiel">Profiel bewerken</a></li>
	                <li><a href="/wachtwoord-aanpassen">Wachtwoord aanpassen</a></li>
	                <li class="divider"></li>
	                <li><a href="http://intranet.klopvaart.nl/?ACT=22">Uitloggen</a></li>
			    </ul>
			  </li>


            </ul>
        </div>
      </div>
    </div>


	  <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top second" style="top: -5px; z-index: 10;">
      <div class="navbar-inner">
        <div class="container">

            <ul class="nav">
<?php wp_list_pages( '&title_li=' ); ?>

				<li class="dropdown">
				  <a href="#"
				        class="dropdown-toggle"
				        data-toggle="dropdown">
				        Bewoners
				        <b class="caret"></b>
				  </a>
				  <ul class="dropdown-menu">
						<li><a href="/bewoners/per-huis">Per huis</a></li>
						<li><a href="/bewoners/">Fotopagina</a></li>
						<li><a href="/bewoners/contactgegevens">Contactgegevens</a></li>
						<li><a href="/bewoners/vraag-en-antwoord">Vraag en antwoord</a></li>
				  </ul>
				</li>
            </ul>



<form class="navbar-search pull-right" method="post" action="http://intranet.klopvaart.nl/"  >
<div class='hiddenFields'>
<input type="hidden" name="ACT" value="12" />
<input type="hidden" name="XID" value="07b0611f021189fb1ed117e2878a254ad12b283a" />
<input type="hidden" name="RES" value="" />
<input type="hidden" name="meta" value="qe/QBPqulxDZg1u/ygqYHKSLjaAy0TO2yZuawr6vFl5d9YFcqOsnCfC+POo6hEhyeIquNflAtFe+jEHpNFL1H8ZKZ11SvFDb8O2J3pk1LhFTbo/92MdGlhpcsiKX0PpTekgVpdZsRYUQai84QB/kOJO8tJSK6IE5vre+fK2ELOtAt4tFqbCWIHt729LkxYilt6NatmppqtDNWbvSDpIe1PqVQWp7Td8JTmmb1XeAEe9X0YUsdxENBqZKdOntHU3vnmw5UQCRNc8rgt+RclGhEUMcAqw9QpqIVe4KeW3U8EbyXx6tvk2lpWST8SPa23UWDrBvB5f3V5yG15zZdZ518LKPMO+Rykr2hpotSz4kxdB4curtOPO5jbKsGKh7CtQtTgw5EM6gBS9WEe0NBDXWiZhgF3RikPHMvKjHRibOSVlK+UZnyRxq3wkDxOOhn44D/FUqynLKFwVD19/1TBkXJQ==" />
<input type="hidden" name="site_id" value="1" />
</div>


 <input type="text" value="" autocomplete="off" name="keywords" id="keywords" class="search-query span4" placeholder="Zoeken..." data-provide="typeahead" data-items="10" data-source="[&quot;Joanne de Vletter&quot;,&quot;Niels Niessen&quot;,&quot;Juliet Campfens&quot;,&quot;Nima Madzjubi&quot;,&quot;Martha Vogel&quot;,&quot;Martin van Els&quot;,&quot;Nikki Mousset&quot;,&quot;Catalina von Hildebrand&quot;,&quot;Frank Donkers&quot;,&quot;Barbara Roessingh&quot;,&quot;Annemarie Slot&quot;,&quot;Anna Vala Olafsdóttir&quot;,&quot;Doenja Abel&quot;,&quot;test&quot;,&quot;Simon Haazen&quot;,&quot;Composthoop&quot;,&quot;Inkomensgrens&quot;,&quot;Doorverhuizen&quot;,&quot;Op zoek naar een nieuwe bewoner&quot;,&quot;Olaf Haverink&quot;,&quot;Kim van Rijthoven&quot;,&quot;Jascha  van de Bunt&quot;,&quot;Hidde Albers&quot;,&quot;Fred Vogelzang&quot;,&quot;boekjaar 2016&quot;,&quot;Carolien Teunisse&quot;,&quot;Elma Roelvink&quot;,&quot;Beleidsplan 2015-2016&quot;,&quot;Naomi Naomgaandeimail&quot;,&quot;Petra Jungblut&quot;,&quot;Roos Ribbens&quot;,&quot;Omgaan met conflicten&quot;,&quot;Theatersport cursus&quot;,&quot;Anke Hans&quot;,&quot;Donja Verlaan&quot;,&quot;Portefeuilles bestuur 2015/16&quot;,&quot;boekjaar 2015&quot;,&quot;Jonathan Straatman&quot;,&quot;Elvira Klaassen&quot;,&quot;Michelle de Zeeuw&quot;,&quot;Eefje Wielders&quot;,&quot;Dirk-Jan Evers&quot;,&quot;Anne-Marije Verweij&quot;,&quot;Mariëlle Groenendijk&quot;,&quot;boekjaar 2014&quot;,&quot;boekjaar 2013&quot;,&quot;boekjaar 2012&quot;,&quot;boekjaar 2011&quot;,&quot;boekjaar 2010&quot;,&quot;Klopvaart Film Lustrum&quot;,&quot;Afspraken over vuur en geluid in de tuin&quot;,&quot;Begroting en jaarrekening&quot;,&quot;Jorga Lok&quot;,&quot;ALV notulisten overzicht&quot;,&quot;Bestuurshandboek: financiën&quot;,&quot;Bestuurshandboek&quot;,&quot;Robert Kersbergen&quot;,&quot;Klopvaart.nl email adressen&quot;,&quot;Vacaturelijst&quot;,&quot;Groter of kleiner wonen in je huis&quot;,&quot;Intranet wensenlijstjes&quot;,&quot;Floor Haalboom&quot;,&quot;Foto&#8217;s&quot;,&quot;Inkomensgrens&quot;,&quot;[tip] Makkelijk auto’s uitlenen tussen bekenden met SnappClubs&quot;,&quot;[Opgelost] Problemen met E-mail van de klopvaart&quot;,&quot;Martijn Blom&quot;,&quot;Olav Kaspers&quot;,&quot;Mail gestuurd naar huispenningmeesters&quot;,&quot;Onderhoudsklachten: Portaal of zelf doen?&quot;,&quot;Izhar Elias&quot;,&quot;Anja van Balen&quot;,&quot;Maandag 4 februari geen werkplek in de projectruimte.&quot;,&quot;VoCo zoekt: Uitpakker(s)&quot;,&quot;Foto&#8217;s: Eerste Editie: Vaarders-werkplek&quot;,&quot;Privégebruik projectruimte&quot;,&quot;introductiefilmpje klopvaart website/open dag&quot;,&quot;Huiskamerconcert 2013&quot;,&quot;Gevonden: Blauw, oranje Nokia&quot;,&quot;Nieuw: Vraag en antwoord&quot;,&quot;Foto&#8217;s: IJspretdag&quot;,&quot;Afbeeldingen toevoegen aan berichten&quot;,&quot;Welkomstavond 11 december gaat niet door&quot;,&quot;Huurtoeslag&quot;,&quot;Uitslag &#8220;Boer zoekt Vrouw&#8221;-competitie; eclatant succes voor Hans Artz&quot;,&quot;tof Mike ziet er goed uit&quot;,&quot;gelukt&quot;,&quot;Wouw!&quot;,&quot;Navigatiebalk verbeterd&quot;,&quot;Femke Huizinga&quot;,&quot;Gerben den Adel&quot;,&quot;wachtwoord aanpassen&quot;,&quot;Wiki?&quot;,&quot;Wouter  van der Wal&quot;,&quot;Welkom op het intranet. De nieuwe bewoners omgeving voor Klopvaart bewoners.&quot;,&quot;Foto&#8217;s van de Klopvaart en omgeving in het Utrechts Archief&quot;,&quot;Onderhoudsproject 2009&quot;,&quot;In- en uitschrijven bestuursleden&quot;,&quot;Declareren&quot;,&quot;Huishoudelijk Reglement&quot;,&quot;Filmsuggesties&quot;,&quot;Schuiframen gebruiksaanwijzing&quot;,&quot;Tafeltennistafel&quot;,&quot;Projectruimte standaard&quot;,&quot;Notulen ALV&quot;,&quot;Groenonderhoud&quot;,&quot;Hans de Groot&quot;,&quot;Software Licenties&quot;,&quot;Huiscontract&quot;,&quot;Inbraakpreventie&quot;,&quot;Beamer&quot;,&quot;Activiteiten&quot;,&quot;Notulen bestuursvergadering&quot;,&quot;Internetcommissie&quot;,&quot;Hoofdkraan afsluiten&quot;,&quot;Esra Berting&quot;,&quot;Lasse Klijn&quot;,&quot;Isa Schulte&quot;,&quot;Nola Buijs&quot;,&quot;Projectruimte&quot;,&quot;Paasbrunch April 2011&quot;,&quot;Esmée Tiemens&quot;,&quot;Edwin (Ed) Schulte&quot;,&quot;Frank Pohlmann&quot;,&quot;Sacha Husken&quot;,&quot;Projectruimte huren door niet-CWer&quot;,&quot;Privé-activiteiten&quot;,&quot;Anna van Gessel&quot;,&quot;Reserveren projectruimte&quot;,&quot;Onderhoudswerkzaamheden chronologisch&quot;,&quot;Ventilatie&quot;,&quot;Douche&quot;,&quot;Esther Bruijn&quot;,&quot;Ymkje van den Dobbelsteen&quot;,&quot;Boormachine&quot;,&quot;Lotte Saan&quot;,&quot;Mike Verbruggen&quot;,&quot;Hans van der Mispel&quot;,&quot;Radiatoren&quot;,&quot;Rookmelders&quot;,&quot;WC&quot;,&quot;Overzicht van inbraken&quot;,&quot;Boiler&quot;,&quot;Verwarmingsketel&quot;,&quot;Beveiliging van de schuiframen&quot;,&quot;Merijn de Dreu&quot;,&quot;Trappenhuis schilderen&quot;,&quot;Technische specificaties stroommeter&quot;,&quot;Stroomtarieven&quot;,&quot;Pooltafel&quot;,&quot;Speeltoestellen&quot;,&quot;Films downloaden voor filmcommissie&quot;,&quot;Samenwonen&quot;,&quot;VoCo vrijwilligers&quot;,&quot;Bakfiets&quot;,&quot;Dartboard&quot;,&quot;Stroommeter&quot;,&quot;Willem Roest&quot;,&quot;Duurzame Goederen Eetcafé&quot;,&quot;EAN-codes van de huizen&quot;,&quot;Beheercommissie&quot;,&quot;Gegevens oud-bewoners&quot;,&quot;Joachim Obrie&quot;,&quot;Emmanuel Obrie&quot;,&quot;Adres vereniging&quot;,&quot;Tuinhok&quot;,&quot;Sinterklaasspullen&quot;,&quot;Eetcafé November 2008&quot;,&quot;Eetcafé December 2008&quot;,&quot;KvK-klantgegevens handelsregister online&quot;,&quot;Huisbewaarderschap&quot;,&quot;Draaiboek ALV&quot;,&quot;Tips voor de gesprekken met kandidaten&quot;,&quot;Bestuursoverdracht&quot;,&quot;KvK-nummer&quot;,&quot;Zonneboiler&quot;,&quot;Steekwagen&quot;,&quot;Vloerbedekking trappenhuizen&quot;,&quot;Rondzendmail&quot;,&quot;Welkommissie&quot;,&quot;E-mailadressen van de vereniging&quot;,&quot;Wachtlijstcommissie&quot;,&quot;Peter Assink&quot;,&quot;Els Smits&quot;,&quot;Adella Ike&quot;,&quot;Diny van Oostveen&quot;,&quot;Joris van Waveren&quot;,&quot;Angelique Martens&quot;,&quot;Nanda van Koutrik&quot;,&quot;Marjo Aelbers&quot;,&quot;Jan  Verstraten&quot;,&quot;Evert van As &quot;,&quot;Joost  Verduin&quot;,&quot;Remco Dapper&quot;,&quot;Pelle Berting&quot;,&quot;Alex Buijs&quot;,&quot;Alexander de Keijzer&quot;,&quot;Sebas Smits&quot;,&quot;Arthur van Waveren&quot;,&quot;Jasper Terpstra&quot;,&quot;Floor van Orsouw&quot;,&quot;Joanna Donk&quot;,&quot;Jayani Kleintjes&quot;,&quot;Marjet Duenk&quot;,&quot;Elske Altena&quot;,&quot;Ulrich Grün&quot;,&quot;Giel Claessens&quot;,&quot;Frederike Vervelde&quot;,&quot;Conrad Obrie&quot;,&quot;Minke Wentzel&quot;,&quot;Roald Penning&quot;,&quot;Loeke Peereboom&quot;,&quot;Anahi Kühnemann&quot;,&quot;Susanne Kühnemann&quot;,&quot;Commissies&quot;,&quot;Barcommissie&quot;,&quot;Sleutel projectruimte&quot;,&quot;Kascommissie&quot;,&quot;Opzeggen van de huur&quot;,&quot;Statuten&quot;,&quot;Financiën&quot;,&quot;Bestuur 2015/16&quot;,&quot;Contributie&quot;,&quot;Wie-doet-wat lijst&quot;,&quot;TL-buisjes&quot;,&quot;Reparaties en onderhoud&quot;,&quot;Inboedelverzekering&quot;,&quot;Filmcommissie&quot;,&quot;Eetcafé&quot;,&quot;De Klopper&quot;,&quot;Tuincommissie&quot;,&quot;Algemene Ledenvergadering&quot;,&quot;Vereniging&quot;,&quot;Portaal&quot;,&quot;VoCo&quot;,&quot;Samenwerkingsovereenkomst met Portaal&quot;,&quot;Bestuursvergadering&quot;,&quot;ALV&quot;,&quot;Infomiddag&quot;,&quot;Bestuursvergadering&quot;,&quot;Bestuursvergadering&quot;,&quot;Infomiddag&quot;,&quot;Bestuursvergadering&quot;,&quot;Bestuursvergadering&quot;,&quot;Bestuursvergadering&quot;,&quot;Bestuursvergadering&quot;,&quot;Ademoefengroep&quot;,&quot;ALV&quot;,&quot;Infomiddag&quot;,&quot;Ademoefengroep&quot;,&quot;Bestuursvergadering&quot;,&quot;Ademoefengroep&quot;,&quot;Zen 24-uurs&quot;,&quot;Zen 24-uurs&quot;,&quot;Verjaardag Lasse&quot;,&quot;Verjaardag Ymkje&quot;,&quot;Verjaardag Lasse&quot;,&quot;Ademoefengroep&quot;,&quot;Bestuursvergadering&quot;,&quot;gaat niet door&quot;,&quot;feestje&quot;,&quot;Ademoefengroep&quot;,&quot;Mindfullness (incidenteel 2 bijeenkomsten) besloten commercieel; niet CW&quot;,&quot;Infomiddag&quot;,&quot;Tango&quot;,&quot;Mindfullness (incidenteel 2 bijeenkomsten) besloten commercieel; niet CW&quot;,&quot;Bestuursvergadering&quot;,&quot;gaat niet door&quot;,&quot;Tango&quot;,&quot;Ademcursus&quot;,&quot;training&quot;,&quot;Ademcursus&quot;,&quot;training&quot;,&quot;Tango&quot;,&quot;&#8220;De Klopvaart werkt&#8221; (ook voor een kopje thee)&quot;,&quot;Filmavond: El abrazo de la serpiente&quot;,&quot;Yoga&quot;,&quot;Ademcursus&quot;,&quot;Ademcursus&quot;,&quot;Yoga&quot;,&quot;&#8220;De Klopvaart werkt&#8221; (ook voor een kopje thee)&quot;,&quot;Opstellingendag&quot;,&quot;Tango&quot;,&quot;Yoga&quot;,&quot;Ademcursus&quot;,&quot;Bestuursvergadering&quot;,&quot;&#8220;De Klopvaart werkt&#8221; (ook voor een kopje thee)&quot;,&quot;Sangha&quot;,&quot;Slaapfeestje Nola&quot;,&quot;Tuindag&quot;,&quot;Filmavond: Perfetti sconosciuti&quot;,&quot;Tango&quot;,&quot;Yoga&quot;,&quot;Ademcursus&quot;,&quot;Ademcursus&quot;,&quot;penningmeesters overleg&quot;,&quot;Yoga&quot;,&quot;Creatiedag&quot;,&quot;training&quot;,&quot;Repetitie en concert zang - gitaar&quot;,&quot;Opstellingen&quot;,&quot;Opening expositie schilderijen Frank Donkers&quot;,&quot;Opstellingen&quot;,&quot;Yoga&quot;,&quot;Ademcursus&quot;,&quot;Yoga&quot;,&quot;opruimen  hartenexpositie  van Marjet&quot;,&quot;Infomiddag&quot;,&quot;Filmavond: Snowden&quot;,&quot;Tango&quot;,&quot;Yoga&quot;,&quot;Ademcursus&quot;,&quot;Ademcursus&quot;,&quot;Yoga&quot;,&quot;marjet/harten expositie&quot;,&quot;harten expositie marjet&quot;,&quot;harten expositie marjet&quot;,&quot;Ademcursus&quot;,&quot;Yoga!&quot;,&quot;Creatieochtend&quot;,&quot;De Klopvaart Werkt&quot;,&quot;De Klopvaart Werkt&quot;,&quot;Creatiedag&quot;,&quot;Nieuwjaarsborrel&quot;,&quot;Filmavond: Victoria&quot;,&quot;Tango&quot;,&quot;Ademcursus&quot;,&quot;Ademcursus&quot;,&quot;Yoga!&quot;,&quot;Training&quot;,&quot;Training&quot;,&quot;De Klopvaart Werkt&quot;,&quot;sangha&quot;,&quot;2001: A Space Odyssey&quot;,&quot;Tango&quot;,&quot;filmmiddag verjaardag susanne&quot;]" onclick="javascript:_gaq.push(['_trackEvent','Zoeken','Veld']);">
</form>


        </div>
      </div>
    </div>


    <div class="container page">
