'use strict';

var gulp         = require( 'gulp' );
var browserSync  = require( 'browser-sync' ).create();
var cache        = require( 'gulp-cached' );
var iconfont     = require( 'gulp-iconfont' );
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
		.pipe( scssLint() );
});

// Icon Font
var runTimestamp = Math.round(Date.now()/1000);
gulp.task('icons', function(){
	return gulp.src(['assets/icons/*.svg'])
		.pipe(iconfont({
			fontName: 'kanec-icons',
			appendUnicode: true,
			formats: ['ttf', 'eot', 'woff'],
			timestamp: runTimestamp,
			descent: 240 // Fix baseline
		}))
		.pipe( gulp.dest('dist') );
});

// Main build task
gulp.task( 'build', [ 'sass' ] );

// Watch files and run BrowserSync
gulp.task( 'watch', ['build'], function() {
	browserSync.init({
		proxy: 'http://kanec.loc',
	});
	gulp.watch( 'assets/styles/**/*.scss', ['build', 'scss-lint'] );
	gulp.watch( '**/*.php' ).on( 'change', browserSync.reload );
});
