<?php
/**
 * Template part for displaying posts.
 * Thumbnail view for front-page
 *
 * @package kanec
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if( has_post_thumbnail() ) : ?>
		<?php the_post_thumbnail( 'medium' ); ?>
	<?php endif; ?>
	<?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
	
	<div class="entry-content">
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink(); ?>" class="more-link">Continue reading <span class="meta-nav">→</span></a>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
