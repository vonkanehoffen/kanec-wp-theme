<?php
/**
 * Template part for displaying blog post intros
 *
 * @package kanec
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-meta"><?php the_date(); ?></div>
	<?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
	
	<div class="entry-content">
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink(); ?>" class="more-link">Read <i class="icon icon-arrow-right"></i></a>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
