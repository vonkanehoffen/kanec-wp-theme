// Basic Gulp tasks for teting Bourbon Neat stuff

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
		.pipe( cache( 'scssLint' ) )
		.pipe( scssLint() );
});

// Icon Font
var runTimestamp = Math.round(Date.now()/1000);
gulp.task('icons', function(){
	return gulp.src(['assets/icons/*.svg'])
		.pipe(iconfont({
			fontName: 'kanec-icons', // required 
			appendUnicode: true, // recommended option 
			formats: ['ttf', 'eot', 'woff'], // default, 'woff2' and 'svg' are available 
			timestamp: runTimestamp, // recommended to get consistent builds when watching files 
		}))
			.on('glyphs', function(glyphs, options) {
				// CSS templating, e.g. 
				console.log(glyphs, options);
			})
		.pipe( gulp.dest('dist') );
});

// Main build task
gulp.task( 'build', [ 'sass' ] );

// Watch files and run BrowserSync
gulp.task( 'watch', ['build'], function() {
	browserSync.init({
		proxy: 'http://kanec.loc',
	});
	gulp.watch( 'assets/styles/**/*.scss', ['build'] );
	gulp.watch( '**/*.php' ).on( 'change', browserSync.reload );
});
