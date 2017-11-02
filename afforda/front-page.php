<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>

	 <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/plugins/bootstrap/css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/plugins/slick/slick/slick.css">
	 <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/plugins/slick/slick/slick-theme.css">
	 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	 <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/contents/css/style.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<section id="bannerSlick">
				<div id="banner2">
				</div>
				<div id="banner3">
				</div>
				<div id="banner4">
				</div>
			</section>
		</div>
	</div>

	<nav class="navbar navbar-inverse navbar-fixed-top opaque-navbar">
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
				//$section_id = empty( $post->ancestors ) ? $post->ID : end( $post->ancestors );
				$locations = get_nav_menu_locations();
				$menu = wp_get_nav_menu_object( $locations[ 'primary' ] ); // 'primary' is our nav menu's name
				$menu_items = wp_get_nav_menu_items( $menu->term_id, array( 'post_parent' => $section_id ) );
				if( !empty( $menu_items ) ) {
				echo '<ul class="nav navbar-nav nav-center">';
				$count = 0;
				foreach( $menu_items as $menu_item ) {
					if ($menu_item->ID == $menu_items[$count + 1]->menu_item_parent) {
						echo "<li>children</li>";
					}
					// if ($menu_item->title == 'Logo') {
					// 	$logo = "<li><a href='http://localhost/wordpress/'><div id='affordaLogo'><img src=";
					// 	$logo .= "'http://localhost/wordpress/wp-content/themes/afforda/contents/images/ribbon-banner.png' alt='Logo Ribbon' class='logoRibbon'><img src=";
					// 	$logo .= "'http://localhost/wordpress/wp-content/themes/afforda/contents/images/logo.png' alt='Afforda Logo' class='logo'>";
					// 	$logo .= "</div></a></li>";
					// 	echo $logo;
					// }else if($menu_item->title == "HOME"){
					// 	echo '<li class="active menu-item"><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
					// }else{
					// 	echo '<li class="menu-item"><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
					// }
					$count++;
				}
				echo '</ul>';
				}
			?>
		  </div>
		</div>
	</nav>
	
	<div class="container">
		<section id="slogan">
			<div class="row text-center">
				<div class="col-md-12">
					<h1 class="text-center">Makes Every Occassion<br>a Classy Celebration</h1>
					<a href="about.html"><h2 class="cta">Learn More</h2></a>
				</div>
			</div>
		</section>
	</div>

	<section class="about">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="about-img-1 photo"></div>
					<div class="about-img-2 photo"></div>
					<div class="about-img-3 photo"></div>
				</div>
				<div class="col-md-6">
					<div class="about-ribbon"></div>
					<div class="about-content">
						<p>AFFORDA is a business partnership established in the year 2013.</p>
						<p>Based in Leyte, Philippines, AFFORDA is committed to give the best taste to the masses in its products ranging from variety of ice cream flavors to customized theme cakes. It also offers “balloon and deco services” to fully meet client and customer preference and party requirements. AFFORDA is growing at a healthy pace currently covering Southern Leyte and has robust plans to further expand.</p>
						<p>Managed by its owner and business partners, AFFORDA products are manufactured with the highest quality assurance standards and hygiene prioritizing clients’ and customers’ satisfaction at its Bato, Leyte base plant.</p>
						</br></br></br>
						<a href="about.html" class="readMore">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="container-fluid product-tabs">
		<div class="row">
			<div class="products col-md-12">
				<h1>PRODUCTS</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-offset-2 col-md-2 tab"><a data-toggle="tab" href="#cakes" class="product-tab">Cakes<span class="hover-pointer"></span></a></div>
			<div class="col-md-2 tab"><a data-toggle="tab" href="#frozendelights" class="product-tab">Frozen Delights</a></div>
			<div class="col-md-2 tab"><a data-toggle="tab" href="#pastries" class="product-tab">Pastries</a></div>
			<div class="col-md-2 tab"><a data-toggle="tab" href="#lechon" class="product-tab">Lechon</a></div>
		</div>
	</div>

	<div class="container-fluid individual-products-details"> 
		<div class="tab-content">
			<div id="cakes" class="tab-pane fade in active row">
				<div class="product-description">
					<h3>CAKES</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit repudiandae enim, dicta architecto perferendis alias dignissimos corporis, cupiditate fuga, quo ex totam quasi quas unde perspiciatis hic ipsum. Tempora, rem. Exercitationem sapiente tempora perferendis possimus rerum, aperiam temporibus optio accusantium, voluptate saepe, dolorum modi veniam perspiciatis placeat vitae illo enim quaerat dolorem. At, voluptas. Autem aut, aperiam saepe ad facere, atque nostrum odit doloremque velit impedit corrupti necessitatibus cumque culpa quisquam reprehenderit veniam ea ex nobis neque adipisci vitae nam optio dolore ratione. Necessitatibus, quos. Veniam, cum! Molestiae officia molestias ut ducimus veniam doloremque repudiandae est saepe, praesentium nulla asperiores.</p>
				</div>
				<div class="product-carousel">
					<div class="cakepix1 product-carousel-pic"></div>
					<div class="cakepix2 product-carousel-pic"></div>
					<div class="cakepix3 product-carousel-pic"></div>
					<div class="cakepix4 product-carousel-pic"></div>
					<div class="cakepix5 product-carousel-pic"></div>
					<div class="cakepix6 product-carousel-pic"></div>
					<div class="cakepix7 product-carousel-pic"></div>
					<div class="cakepix8 product-carousel-pic"></div>
					<div class="cakepix9 product-carousel-pic"></div>
					<div class="cakepix10 product-carousel-pic"></div>
					<div class="cakepix11 product-carousel-pic"></div>
					<div class="cakepix12 product-carousel-pic"></div>
				</div>
			</div>
			<div id="frozendelights" class="tab-pane fade">
				<div class="product-description">
					<h3>FROZEN DELIGHTS</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit repudiandae enim, dicta architecto perferendis alias dignissimos corporis, cupiditate fuga, quo ex totam quasi quas unde perspiciatis hic ipsum. Tempora, rem. Exercitationem sapiente tempora perferendis possimus rerum, aperiam temporibus optio accusantium, voluptate saepe, dolorum modi veniam perspiciatis placeat vitae illo enim quaerat dolorem. At, voluptas. Autem aut, aperiam saepe ad facere, atque nostrum odit doloremque velit impedit corrupti necessitatibus cumque culpa quisquam reprehenderit veniam ea ex nobis neque adipisci vitae nam optio dolore ratione. Necessitatibus, quos. Veniam, cum! Molestiae officia molestias ut ducimus veniam doloremque repudiandae est saepe, praesentium nulla asperiores.</p>
				</div>
				<div class="product-carousel">
					<div class="frozen1 product-carousel-pic"></div>
					<div class="frozen2 product-carousel-pic"></div>
					<div class="frozen3 product-carousel-pic"></div>
					<div class="frozen4 product-carousel-pic"></div>
					<div class="frozen5 product-carousel-pic"></div>
					<div class="frozen6 product-carousel-pic"></div>
					<div class="frozen7 product-carousel-pic"></div>
					<div class="frozen8 product-carousel-pic"></div>
					<div class="frozen9 product-carousel-pic"></div>
					<div class="frozen10 product-carousel-pic"></div>
					<div class="frozen11 product-carousel-pic"></div>
					<div class="frozen12 product-carousel-pic"></div>
				</div>
			</div>
			<div id="pastries" class="tab-pane fade">
				<div class="product-description">
					<h3>PASTRIES</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit repudiandae enim, dicta architecto perferendis alias dignissimos corporis, cupiditate fuga, quo ex totam quasi quas unde perspiciatis hic ipsum. Tempora, rem. Exercitationem sapiente tempora perferendis possimus rerum, aperiam temporibus optio accusantium, voluptate saepe, dolorum modi veniam perspiciatis placeat vitae illo enim quaerat dolorem. At, voluptas. Autem aut, aperiam saepe ad facere, atque nostrum odit doloremque velit impedit corrupti necessitatibus cumque culpa quisquam reprehenderit veniam ea ex nobis neque adipisci vitae nam optio dolore ratione. Necessitatibus, quos. Veniam, cum! Molestiae officia molestias ut ducimus veniam doloremque repudiandae est saepe, praesentium nulla asperiores.</p>
				</div>
				<div class="product-carousel">
					<div class="pastries1 product-carousel-pic"></div>
					<div class="pastries2 product-carousel-pic"></div>
					<div class="pastries3 product-carousel-pic"></div>
					<div class="pastries4 product-carousel-pic"></div>
					<div class="pastries5 product-carousel-pic"></div>
					<div class="pastries6 product-carousel-pic"></div>
					<div class="pastries7 product-carousel-pic"></div>
					<div class="pastries8 product-carousel-pic"></div>
					<div class="pastries9 product-carousel-pic"></div>
					<div class="pastries0 product-carousel-pic"></div>
					<div class="pastries1 product-carousel-pic"></div>
					<div class="pastries2 product-carousel-pic"></div>
				</div>
			</div>
			<div id="lechon" class="tab-pane fade">
				<div class="product-description">
					<h3>LECHON</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit repudiandae enim, dicta architecto perferendis alias dignissimos corporis, cupiditate fuga, quo ex totam quasi quas unde perspiciatis hic ipsum. Tempora, rem. Exercitationem sapiente tempora perferendis possimus rerum, aperiam temporibus optio accusantium, voluptate saepe, dolorum modi veniam perspiciatis placeat vitae illo enim quaerat dolorem. At, voluptas. Autem aut, aperiam saepe ad facere, atque nostrum odit doloremque velit impedit corrupti necessitatibus cumque culpa quisquam reprehenderit veniam ea ex nobis neque adipisci vitae nam optio dolore ratione. Necessitatibus, quos. Veniam, cum! Molestiae officia molestias ut ducimus veniam doloremque repudiandae est saepe, praesentium nulla asperiores.</p>
				</div>
				<div class="product-carousel">
					<div class="lechon1 product-carousel-pic"></div>
					<div class="lechon2 product-carousel-pic"></div>
					<div class="lechon3 product-carousel-pic"></div>
					<div class="lechon4 product-carousel-pic"></div>
					<div class="lechon5 product-carousel-pic"></div>
					<div class="lechon6 product-carousel-pic"></div>
					<div class="lechon7 product-carousel-pic"></div>
					<div class="lechon8 product-carousel-pic"></div>
					<div class="lechon9 product-carousel-pic"></div>
					<div class="lechon10 product-carousel-pic"></div>
					<div class="lechon11 product-carousel-pic"></div>
					<div class="lechon12 product-carousel-pic"></div>		
				</div>
			</div>
		</div>
	</div>

	<section class="contactMap">
		<div class="API-map">
			<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245.32959014957518!2d124.79080542807314!3d10.319987847725523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x609831b50c18cd26!2sAfforda!5e0!3m2!1sen!2sph!4v1505305169947" width="100%" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</section>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script  src="<?php bloginfo('stylesheet_directory'); ?>/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/plugins/slick/slick/slick.min.js"></script>
	<script  src="<?php bloginfo('stylesheet_directory'); ?>/script/script.js"></script>

</body>
</html>