<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> >

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap cf">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<p id="logo"><a href="<?php echo esc_url( home_url() ); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<p id='strap'> <?php bloginfo('description');?> </p>

						<div id="contact-icons">
							
							<?php 
							$twitter = stripslashes(get_option('twitter-link'));
							$contact = stripslashes(get_option('contact-link')); 

							// figure out the first URL segment to switch languages
						    $uri = $_SERVER['REQUEST_URI'];
						    $elements = explode('/', $uri) ;
						    $lang = $elements[1] ; // For the first segment ?>

							<a href="<?php echo esc_url( $twitter ); ?>" alt="Twitter"><i class="icon-twitter"></i></a>
							<a href="<?php echo esc_url( $contact ); ?>" alt="Get In Touch" ><i class="icon-envelope"></i></a>
							<?php
							if ($lang == 'en') { ?>
								<a href="<?php echo esc_url ( site_url() ) . "/es/"; ?>" alt="Espa&ntilde;ol" ><i class="icon-flag"></i></a>
							<?php }
							else { ?>
								<a href="<?php echo esc_url ( site_url() ) . "/en/"; ?>" alt="English" ><i class="icon-flag"></i></a>
							<?php } ?>
						</div><!-- end contact icons -->

				</div>

				<?php get_template_part('nav'); ?>

			</header>