<?php get_header();

$uri = $_SERVER['REQUEST_URI'];
$elements = explode('/', $uri) ;
$lang = $elements[1] ; // For the first segment

if ($lang == "en" ) {
	$bio = stripslashes(get_option('home-bio-en'));
	$recent = stripslashes(get_option('latest-en'));
}
else {
	$bio = stripslashes(get_option('home-bio-es'));
	$recent = stripslashes(get_option('latest-es'));
} ?>

<div id="content">

	<div class="bio-wrap">

		<div id="inner-content" class="wrap cf">

			<section>
				<div class='frame'>
					<p id="bio"><?php echo $bio; ?></p>
				</div>
			</section>

		</div>

	</div><!-- end bio wrap -->

	<div id="inner-content" class="wrap cf">

		<section>

			<h4 class='art-header'><?php echo $recent; ?></h4>

				<?php
					// Get some posts
					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
					
					$args = array(
						'posts_per_page' => '10',
						'paged' => $paged, 
						);

			 		$query = new WP_Query( $args );

					if ( $query -> have_posts() ) :

						// Loop through the available records
						while ( $query -> have_posts() ) : $query -> the_post();

							if ( $query->current_post <= 3 ) { ?> <!-- first 4 posts -->
								<div class="frame">
									<?php get_template_part( 'content-home-onecol', get_post_format() ); ?>
								</div><!-- end frame -->
							<?php }
							elseif ( $query->current_post % 2 == 0 ) { ?> <!-- it's even, start of line -->
								<div class="frame">
								<?php get_template_part( 'content-home-twocol', get_post_format() );
								}
							else { //it's odd, end of line
								get_template_part( 'content-home-twocol', get_post_format() ); ?>
								</div><!-- end frame --> 
							<?php }

						endwhile; ?>
			
			<div class="frame pagination">
				<?php 
					$big = 999999999; // need an unlikely integer

					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $query->max_num_pages
					) );

					endif; ?>
			</div><!-- end navi frame -->

		</section>

	</div>

</div>

<?php get_footer(); ?>
