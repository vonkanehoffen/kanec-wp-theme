// Basic Gulp tasks for teting Bourbon Neat stuff

var gulp         = require( 'gulp' );
var browserSync  = require( 'browser-sync' ).create();
var lazypipe     = require( 'lazypipe' );
var sass         = require( 'gulp-sass' );

var cssTasks = lazypipe()
	.pipe( sass, {
		includePaths: [
			'bower_components/bourbon/app/assets/stylesheets/',
			'bower_components/neat/app/assets/stylesheets/'
		]
	});

gulp.task( 'build', function() {
	return gulp.src( 'assets/styles/*.scss' )
		.pipe( cssTasks() )
		.pipe( gulp.dest( 'dist' ) )
		.pipe( browserSync.stream() );
});

gulp.task( 'watch', ['build'], function() {
	browserSync.init({
		server: '.'
	});
	gulp.watch( 'assets/styles/*.scss', ['build'] );
	gulp.watch( '*.html' ).on( 'change', browserSync.reload );
});
