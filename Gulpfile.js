// Basic Gulp tasks for teting Bourbon Neat stuff

var gulp         = require( 'gulp' );
var browserSync  = require( 'browser-sync' ).create();
var cache        = require( 'gulp-cached' );
var sass         = require( 'gulp-sass' );
var scssLint     = require( 'gulp-scss-lint' );
var sourcemaps   = require( 'gulp-sourcemaps' );

// CSS pre-processing
gulp.task( 'sass', function() {
	return gulp.src( 'assets/styles/*.scss' )
		.pipe( sourcemaps.init() )
		.pipe( sass({
			includePaths: [
				'bower_components/bourbon/app/assets/stylesheets/',
				'bower_components/neat/app/assets/stylesheets/'
			]
		}).on('error', sass.logError) )
		.pipe( sourcemaps.write( '.', {
			sourceRoot: 'assets/styles/'
		}) )
		.pipe( gulp.dest( 'dist' ) )
		.pipe( browserSync.stream({ match: '**/*.css' }) );
});

// SCSS Lint
// Make sure the ruby scss_lint package is installed for this to work.
// See https://github.com/brigade/scss-lint
gulp.task( 'scss-lint', function() {
	return gulp.src( 'assets/styles/**/*.scss' )
		.pipe( cache( 'scssLint' ) )
		.pipe( scssLint() );
});

// Main build task
gulp.task( 'build', [ 'scss-lint', 'sass' ] );

// Watch files and run BrowserSync
gulp.task( 'watch', ['build'], function() {
	browserSync.init({
		server: '.'
	});
	gulp.watch( 'assets/styles/*.scss', ['build'] );
	gulp.watch( '*.html' ).on( 'change', browserSync.reload );
});
