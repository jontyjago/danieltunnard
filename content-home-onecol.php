<div class="frame">
	<div class="bit-1">
		<article class='home-art'>
			<h2 class="art-title"><?php the_title();?></h2>
			<p class="art-date"><i class="icon-calendar"></i><?php echo get_the_date(); ?></p>
			<p class="art-tag"><?php the_excerpt(); ?></p>	
			<a class="continue" href="<?php the_permalink(); ?>">Continue Reading</a>
		</article>
	</div>
</div>