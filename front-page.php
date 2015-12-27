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
			<!-- <div class="technologies">
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
				<aside class="discipline">
					<img src="<?= get_template_directory_uri() ?>/assets/images/tech/ubuntu.svg" alt=""></dt>
					<div class="info">
						<h5>Ubuntu</h5>
						<p></p>
					</div>
				</aside>
				<aside class="discipline">
					<img src="<?= get_template_directory_uri() ?>/assets/images/tech/php.svg" alt=""></dt>
					<div class="info">
						<h5>PHP</h5>
						<p></p>
					</div>
				</aside>
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
				<aside class="discipline">
					<img src="<?= get_template_directory_uri() ?>/assets/images/tech/cordova.svg" alt=""></dt>
					<div class="info">
						<h5>Apache Cordova</h5>
						<p></p>
					</div>
				</aside>
				<aside class="discipline">
					<img src="<?= get_template_directory_uri() ?>/assets/images/tech/git.svg" alt=""></dt>
					<div class="info">
						<h5>GitLab</h5>
						<p></p>
					</div>
				</aside>
			</div> -->
		</section>
		<section class="portfolio">
			<h2>Portfolio</h2>
			<article>
				<img src="<?= get_template_directory_uri() ?>/assets/images/fs-test1.jpg" alt="">
				<h3>Daisy</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab velit rem quod accusantium recusandae expedita minus, veritatis ex culpa, tempora, autem. Suscipit iusto sit ipsa pariatur in impedit, minus placeat.</p>
				<a href="//localhost:3000/2012/03/15/template-more-tag/#more-996" class="more-link">Continue reading <span class="screen-reader-text">“Template: More Tag”</span> <span class="meta-nav">→</span></a>
			</article>
			<article>
				<img src="<?= get_template_directory_uri() ?>/assets/images/fs-test2.jpg" alt="">
				<h3>Icelolly</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex doloremque rerum beatae soluta molestias tempore optio ipsam, dolor delectus perspiciatis possimus ut itaque, voluptatem eos asperiores assumenda labore excepturi iure!</p>
				<a href="//localhost:3000/2012/03/15/template-more-tag/#more-996" class="more-link">Continue reading <span class="screen-reader-text">“Template: More Tag”</span> <span class="meta-nav">→</span></a>
			</article>
			<article>
				<img src="<?= get_template_directory_uri() ?>/assets/images/fs-test3.jpg" alt="">
				<h3>Anxiety UK</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam debitis repellendus, aliquam blanditiis et libero, quae iste doloribus temporibus quos totam cumque, earum laborum quibusdam eaque repudiandae vel. Doloremque, accusantium.</p>
				<a href="//localhost:3000/2012/03/15/template-more-tag/#more-996" class="more-link">Continue reading <span class="screen-reader-text">“Template: More Tag”</span> <span class="meta-nav">→</span></a>
			</article>
<!-- 			<div class="flexslider">
				<ul class="slides">
					<li>
						<img src="<?= get_template_directory_uri() ?>/assets/images/fs-test1.jpg" />
						<p class="flex-caption">Adventurer Cheesecake Brownie</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri() ?>/assets/images/fs-test2.jpg" />
						<p class="flex-caption">Adventurer Lemon</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri() ?>/assets/images/fs-test3.jpg" />
						<p class="flex-caption">Adventurer Donut</p>
					</li>
					<li>
						<img src="http://placehold.it/350x150" />
						<p class="flex-caption">Adventurer Caramel</p>
					</li>
				</ul>
			</div>			 -->
		</section>
		<hr>
		<section class="portfolio">
			<h2>Latest Blog Posts</h2>
			<article>
				<h3>Golden Ratio Font Sizes</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab velit rem quod accusantium recusandae expedita minus, veritatis ex culpa, tempora, autem. Suscipit iusto sit ipsa pariatur in impedit, minus placeat.</p>
				<a href="//localhost:3000/2012/03/15/template-more-tag/#more-996" class="more-link">Continue reading <span class="screen-reader-text">“Template: More Tag”</span> <span class="meta-nav">→</span></a>
			</article>
			<article>
				<h3>AfterEffects Strobe Expression</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex doloremque rerum beatae soluta molestias tempore optio ipsam, dolor delectus perspiciatis possimus ut itaque, voluptatem eos asperiores assumenda labore excepturi iure!</p>
				<a href="//localhost:3000/2012/03/15/template-more-tag/#more-996" class="more-link">Continue reading <span class="screen-reader-text">“Template: More Tag”</span> <span class="meta-nav">→</span></a>
			</article>
			<article>
				<h3>Anxiety UK</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam debitis repellendus, aliquam blanditiis et libero, quae iste doloribus temporibus quos totam cumque, earum laborum quibusdam eaque repudiandae vel. Doloremque, accusantium.</p>
				<a href="//localhost:3000/2012/03/15/template-more-tag/#more-996" class="more-link">Continue reading <span class="screen-reader-text">“Template: More Tag”</span> <span class="meta-nav">→</span></a>
			</article>
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
