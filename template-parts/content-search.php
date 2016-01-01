<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kanec
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->

		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php kanec_entry_meta(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>

	</div>
</article><!-- #post-## -->
