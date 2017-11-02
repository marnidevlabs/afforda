<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

	 <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/plugins/bootstrap/css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/plugins/slick/slick/slick.css">
	 <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/plugins/slick/slick/slick-theme.css">
	 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	 <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/contents/css/about.css">
	 <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/contents/css/cakes.css">
	 <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/contents/css/style.css">
     <?php wp_head(); ?>
</head>
<body id="top" data-spy="scroll">
	<section id="scroll" class="scroll-main">
		<a class="scroll-nav" href="#productSection">
			<span></span>
			<span></span>
			<span></span>
			Scroll
		</a>
	</section>
	<nav class="navbar navbar-inverse navbar-fixed-top opaque-navbar" <?php if (is_user_logged_in()) {
	echo "style = 'margin-top:20px;'";
	}?>>
		<div class="container">
		  <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navBarTop">
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span> 
			</button>
		  </div>
		  <div class="collapse navbar-collapse" id="navBarTop">
		  	<?php 
		  		wp_nav_menu(array(
		  			'theme_location' => 'primary',
		  			'container'		 => '',
		  			'menu_class'	 => 'nav navbar-nav navbar-right',
		  			'walker'		 => new wp_bootstrap_navwalker()
		  		));
		  	?>
		  </div>
		</div>
	</nav>