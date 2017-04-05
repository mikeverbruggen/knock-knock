<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo()?></title>
    <script src="https://use.fontawesome.com/6fe4a580f0.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  	<?php wp_head(); ?>
  </head>
  <body>
  	<div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-toggleable-md navbar-inverse bg-primary bg-faded">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
            <?php wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'container'      => false,
                'menu_class'     => 'nav navbar-nav',
                'fallback_cb'    => '__return_false',
                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'          => 2,
                'walker'         => new bootstrap_4_walker_nav_menu()
              )); ?>
          </div>
        </nav>
      </div>
  	</div>
