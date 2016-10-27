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
			<video autoplay loop poster="<?= get_template_directory_uri() ?>/assets/images/splash.jpg" id="splash-video-bg">
				<source src="<?= get_template_directory_uri() ?>/assets/images/splash.webm" type="video/webm">
				<source src="<?= get_template_directory_uri() ?>/assets/images/splash.mp4" type="video/mp4">
			</video>
		</div>
		<section class="splash">
			<div class="inner">
				<div class="container">
					<h1><span>Kane Clover</span> / Manchester, UK</h1>
					<h2><?= get_bloginfo( 'description', 'display' ); ?></h2>
					<a href="#main" class="enter">
						<i class="icon icon-arrow-right"></i>
					</a>
				</div>
			</div>
			
		</section>
		<main id="main" class="site-main" role="main">
			<section class="intro">
				<div class="container">
					<div class="slogan">
						<img src="<?= get_template_directory_uri() ?>/assets/images/beauty.svg" alt="Beauty comes from the inside!">
					</div>
					<div class="statement">
						<h3>I have a background in Graphic Design and art, along with many years experience building the web.</h3>
						<p>I've worked on projects encompassing everything from logo and print design, through video post production, all the way to React JS, Wordpress plugin development, Linux server admin, Ruby on Rails and Node.</p>
						<p>Skills not mastered: Copywriting and personal statements ;-)</p>
					</div>
				</div>
			</section>
			<?php
				
			// Get first 3 portfolio items ----------------------------------------

			$query = [
				'no_found_rows'       => true,
				'post_status'         => 'publish',
				'post_type'           => 'portfolio',
				'posts_per_page'      => 3,
			];

			$portfolio = new WP_Query( $query ); 

			if( $portfolio->have_posts() ) : ?>

				<section class="post-thumbs">
					<header>
						<h2><i class="icon icon-briefcase"></i> Portfolio</h2>
					</header>
					<?php
					while ( $portfolio->have_posts() ) : $portfolio->the_post();
						get_template_part( 'template-parts/content', 'portfolio-excerpt' );
					endwhile;
					?>
				</section>
				<hr>

			<?php endif; // have_posts
			wp_reset_postdata();

			// Get first 3 blog posts ---------------------------------------------

			$query = [
				'no_found_rows'       => true,
				'post_status'         => 'publish',
				'post_type'           => 'post',
				'ignore_sticky_posts' => true,
				'posts_per_page'      => 3,
			];

			$blog = new WP_Query( $query );

			if( $blog->have_posts() ) : ?>

				<section class="post-thumbs">
					<header>
						<h2><i class="icon icon-paper-plane"></i> Blog</h2>
						<a href="<?= get_permalink( get_option('page_for_posts') ); ?>" class="see-all">
							See all posts
							<!-- <i class="icon icon-arrow-right"></i> -->
						</a>
					</header>
					
					<?php
					while ( $blog->have_posts() ) : $blog->the_post();
						get_template_part( 'template-parts/content', 'blog-excerpt' );
					endwhile;
					?>
				</section>
			
			<?php endif; // have_posts
			wp_reset_postdata(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
