<?
$uri = $_SERVER['REQUEST_URI'];
$elements = explode('/', $uri) ;
$lang = $elements[1] ; // For the first segment

if ($lang == "en" ) {
	$readmore = "Continue Reading";
}
else {
	$readmore = "Seguir Leyendo";
} ?>

<div class="frame">
	<div class="bit-1">
		<article class='home-art'>
			<h2 class="art-title"> <a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
			<p class="art-date"><i class="icon-calendar"></i><?php echo get_the_date('d F Y'); ?></p>
			<p class="art-tag"><?php the_excerpt(); ?></p>	
			<a class="continue" href="<?php the_permalink(); ?>"><?php echo $readmore; ?></a>
		</article>
	</div>
</div>