			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap cf">

					<div class="frame">
						<nav role="navigation">
							<?php wp_nav_menu(array(
	    					'container' => '',                              // remove nav container
	    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
	    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
	    					'menu_class' => 'footer-nav cf',    	        // adding custom nav class
	    					'theme_location' => 'footer-links',             // where it's located in the theme
	    					'before' => '',                                 // before the menu
	        				'after' => '',                                  // after the menu
	        				'link_before' => '',                            // before each link
	        				'link_after' => '',                             // after each link
	        				'depth' => 0,                                   // limit the depth of the nav
	    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
							)); ?>
						</nav>
					</div><!-- end frame -->
					<div class="frame">
						<div class="bit-2">
							<p class="site-by">Site by <a href="http://www.jontyjago.com">Jonathan Evans</a></p>
						</div>
						<div class="bit-2">
							<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
						</div>
					</div><!-- end frame -->

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
	</body>
	
</html> <!-- end of site. what a ride! -->
