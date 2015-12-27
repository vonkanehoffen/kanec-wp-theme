<?php
/**
 * The Front Page
 * Hard coded. ...because nobody else is going to be editing this are they!
 *
 * @package kanec
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="video-bg">
			<video autoplay loop poster="<?= get_template_directory_uri() ?>/assets/images/splash.jpg">
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
			<a href="#main" class="enter">
				<i class="icon icon-nav-down"></i>
			</a>
		</section>
		<section class="intro">
			<div class="container">
				<div class="slogan">
					<img src="<?= get_template_directory_uri() ?>/assets/images/beauty.svg" alt="Beauty comes from the inside!">
				</div>
				<div class="statement">
					<h3>...and that's why I'm passionate about coding standards as well as harmonious colour palettes.</h3>
					<p>When I was growing up, I got taught how to program a computer by one parent and how to draw by the other. These two disciplines have stayed with me throughout my professional career. </p>

					<p>Starting as a Graphic Designer, I’ve become ever more interested in the role systems and technology have in creating beautiful visuals. Whether it’s the Golden Ratio or the latest streaming build system, I’m passionate about using it to create things of beauty. </p>
				</div>
			</div>
		</section>
		<section class="post-thumbs">
			<header>
				<h2><i class="icon icon-briefcase"></i> Portfolio</h2>
			</header>
			<?php
			// Get first 3 portfolio items
			$query = [
				'no_found_rows'       => true,
				'post_status'         => 'publish',
				'post_type'           => 'portfolio',
				'posts_per_page'      => 3,
			];

			$portfolio = new WP_Query( $query );

			while ( $portfolio->have_posts() ) : $portfolio->the_post();
				get_template_part( 'template-parts/content', 'portfolio-excerpt' );
			endwhile;

			wp_reset_postdata();
			?>			
		</section>
		<hr>
		<section class="post-thumbs">
			<header>
				<h2><i class="icon icon-paper-plane"></i> Latest Blog Posts</h2>
			</header>

			<?php
			// Get first 3 blog posts
			$query = [
				'no_found_rows'       => true,
				'post_status'         => 'publish',
				'post_type'           => 'post',
				'ignore_sticky_posts' => true,
				'posts_per_page'      => 3,
			];

			$blog = new WP_Query( $query );

			while ( $blog->have_posts() ) : $blog->the_post();
				get_template_part( 'template-parts/content', 'blog-excerpt' );
			endwhile;

			wp_reset_postdata();
			?>

		</section>

		<main id="main" class="site-main" role="main">
			<?php
			// while ( have_posts() ) : the_post();

			// 	get_template_part( 'template-parts/content', 'page' );

			// 	// If comments are open or we have at least one comment, load up the comment template.
			// 	if ( comments_open() || get_comments_number() ) :
			// 		comments_template();
			// 	endif;

			// endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
