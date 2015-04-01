<div class="wrap cf" id="inner-content">
	
	<nav role="navigation">
		<ul id="menu-tunnard" class="nav top-nav cf">
			
			<?php $uri = $_SERVER['REQUEST_URI'];
			$elements = explode('/', $uri) ;
			$lang = $elements[1] ; // For the first segment

			if ($lang == "en" ) {
				$home = "Home";
				$about_slug = "about";
				$about = "About";
				$contact_slug = "contact";
				$contact = "Contact";
			}
			else {
				$home = "Inicio";
				$about_slug = "quien-soy";
				$about = "Quien Soy";
				$contact_slug = "contact";
				$contact = "Contacto";
			} ?>


			<li id="menu-item-58" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-58">
				<a href="http://www.danieltunnard.com/<?php echo $lang; ?>/"><?php echo $home; ?></a>
			</li>
			<li id="menu-item-56" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-56">
				<a href="http://www.danieltunnard.com/<?php echo $lang; ?>/<?php echo $about_slug; ?>/"><?php echo $about; ?></a>
			</li>
			<li id="menu-item-57" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-57">
				<a href="http://www.danieltunnard.com/en/<?php echo $contact_slug; ?>/"><?php echo $contact; ?></a>
			</li>
		</ul>



	<?php //wp_nav_menu(array(
	// 	'container' => false,                           // remove nav container
	// 	'container_class' => 'menu cf',                 // class of container (should you choose to use it)
	// 	'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
	// 	'menu_class' => 'nav top-nav cf',               // adding custom nav class
	// 	'theme_location' => 'main-nav',                 // where it's located in the theme
	// 	'before' => '',                                 // before the menu
	// 'after' => '',                                  // after the menu
	// 'link_before' => '',                            // before each link
	// 'link_after' => '',                             // after each link
	// 'depth' => 0,                                   // limit the depth of the nav
	// 	'fallback_cb' => ''                             // fallback function (if there is one)
	// 	)); ?>

	</nav>

</div>