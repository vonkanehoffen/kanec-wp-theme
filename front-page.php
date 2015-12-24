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
			<div class="statement">
				<h3>Beauty comes from the inside...<br>
				<span>...and that's why I'm passionate about coding standards as well as harmonious colour palettes.</span></h3>
			</div>
			<div class="technologies">
				<aside class="discipline">
					<img src="<?= get_template_directory_uri() ?>/assets/images/tech/creative-cloud.svg" alt=""></dt>
					<div class="info">
						<h5>Adobe Creative Cloud</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis asperiores optio ex dicta non porro voluptas, architecto inventore ab, illo exercitationem dolor, fugit similique eligendi quibusdam hic totam velit a.</p>
					</div>
				</aside>
				<aside class="discipline">
					<img src="<?= get_template_directory_uri() ?>/assets/images/tech/wordpress.svg" alt=""></dt>
					<div class="info">
						<h5>Wordpress</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ratione numquam, adipisci enim nemo molestiae omnis error maiores, totam labore ullam fugit eligendi dicta. Laudantium minus dolores dignissimos, accusamus aut?</p>
					</div>
				</aside>
<!-- 				<aside class="discipline">
					<img src="<?= get_template_directory_uri() ?>/assets/images/tech/ubuntu.svg" alt=""></dt>
					<div class="info">
						<h5>Ubuntu</h5>
						<p></p>
					</div>
				</aside> -->
<!-- 				<aside class="discipline">
					<img src="<?= get_template_directory_uri() ?>/assets/images/tech/php.svg" alt=""></dt>
					<div class="info">
						<h5>PHP</h5>
						<p></p>
					</div>
				</aside> -->
				<aside class="discipline">
					<img src="<?= get_template_directory_uri() ?>/assets/images/tech/sass.svg" alt=""></dt>
					<div class="info">
						<h5>Sass</h5>
						<p></p>
					</div>
				</aside>
				<aside class="discipline">
					<img src="<?= get_template_directory_uri() ?>/assets/images/tech/node-js.svg" alt=""></dt>
					<div class="info">
						<h5>Gulp</h5>
						<p></p>
					</div>
				</aside>
				<aside class="discipline">
					<img src="<?= get_template_directory_uri() ?>/assets/images/tech/new-relic2.svg" alt=""></dt>
					<div class="info">
						<h5>NewRelic</h5>
						<p></p>
					</div>
				</aside>
<!-- 				<aside class="discipline">
					<img src="<?= get_template_directory_uri() ?>/assets/images/tech/cordova.svg" alt=""></dt>
					<div class="info">
						<h5>Apache Cordova</h5>
						<p></p>
					</div>
				</aside> -->
				<aside class="discipline">
					<img src="<?= get_template_directory_uri() ?>/assets/images/tech/git.svg" alt=""></dt>
					<div class="info">
						<h5>GitLab</h5>
						<p></p>
					</div>
				</aside>
			</div>
		</section>
		<main id="main" class="site-main" role="main">
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
