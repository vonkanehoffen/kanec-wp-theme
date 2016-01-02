<?php
/**
 * Template part for displaying portfolio items on the front page.
 *
 * @package kanec
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="portfolio-excerpt" style="background-image: url(<?= kanec_get_post_thumbnail_url() ?>);">
		<div class="entry-content">
			<?php the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?>
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>" class="more-link">Read <i class="icon icon-arrow-right"></i></a>
		</div><!-- .entry-content -->
	</div>


</article><!-- #post-## -->
