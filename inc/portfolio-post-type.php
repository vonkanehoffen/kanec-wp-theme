<?php
/**
 * Register Portfolio post type
 *
 * @package kanec
 */

add_action( 'init', 'create_portfolio_post_type', 5 );
function create_portfolio_post_type() {
	register_post_type( 'portfolio',
		[
			'labels' => [
				'name' => __( 'Portfolio' ),
				'singular_name' => __( 'Portfolio Item' ),
			],
			'public' => true,
			'has_archive' => false,
			'supports' => [ 'title', 'editor', 'author', 'revisions', 'thumbnail' ],
		]
	);

}
