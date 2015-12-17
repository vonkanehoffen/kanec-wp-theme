// Basic Gulp tasks for teting Bourbon Neat stuff

var gulp         = require( 'gulp' );
var browserSync  = require( 'browser-sync' ).create();
var sass         = require( 'gulp-sass' );

// CSS pre-processing
gulp.task( 'sass', function() {
	return gulp.src( 'assets/styles/*.scss' )
		.pipe( sass({
			includePaths: [
				'bower_components/bourbon/app/assets/stylesheets/',
				'bower_components/neat/app/assets/stylesheets/'
			]
		}) )
		.pipe( gulp.dest( 'dist' ) )
		.pipe( browserSync.stream() );
});

// Main build task
gulp.task( 'build', [ 'sass' ] );

// Watch files and run BrowserSync
gulp.task( 'watch', ['build'], function() {
	browserSync.init({
		server: '.'
	});
	gulp.watch( 'assets/styles/*.scss', ['build'] );
	gulp.watch( '*.html' ).on( 'change', browserSync.reload );
});
