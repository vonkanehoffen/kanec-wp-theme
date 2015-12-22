<?php
/**
 * The Front Page
 * Hard coded. ...because nobody else is going to be editing this are they!
 *
 * @package kanec
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="video-bg">
				<video autoplay loop poster="/assets/images/splash.jpg">
					<source src="<?= get_template_directory_uri() ?>/assets/images/splash.webm" type="video/webm">
					<source src="<?= get_template_directory_uri() ?>/assets/images/splash.mp4" type="video/mp4">
				</video>
			</div>
			<section class="splash">
				<div class="inner">
					<div class="container">
						<h1><span>Kane Clover</span> / Manchester, UK</h1>
						<h2>UX Design &amp; Full Stack Web Development</h2>
					</div>
				</div>
			</section>
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
