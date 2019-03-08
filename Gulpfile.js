var gulp 		= require( 'gulp' );
var watch 		= require( 'gulp-watch' );
var sass 		= require( 'gulp-sass' );
var sourcemaps 	= require( 'gulp-sourcemaps' );
var rename 		= require("gulp-rename");
var concat 		= require("gulp-concat");
var browserSync = require("browser-sync");
var uglify 		= require('gulp-uglify');

// SASS
var prefixerOptions = {
	browsers: ['last 3 versions']
};
gulp.task( 'sass', function() {
	gulp.src( 'assets/sass/style.scss' )
	.pipe( sourcemaps.init())
	.pipe( sass({outputStyle: 'compressed'}).on('error', sass.logError) )
	.pipe( sourcemaps.write( './assets/maps' ) )
    .pipe( gulp.dest( './' ) );
} );

//JavaScript
var jsFiles = [
	'assets/js/scripts.js'
];
gulp.task( 'javascript', function() {
	gulp.src( jsFiles )
    .pipe(concat('scripts.js'))
	.pipe(uglify({mangle:false}))
    .pipe(gulp.dest('./'));
} );

// Default
gulp.task( 'default', [ 'sass', 'javascript' ] );

// Watch
gulp.task('watch', function() {
    gulp.watch( 'src/assets/sass/**/*.scss', ['sass'] );
    gulp.watch( 'src/assets/sass/style.scss', ['sass'] );
    gulp.watch( jsFiles, ['javascript'] );
} );

gulp.task('browser-sync', function() {
    browserSync.init('', {
		proxy: "http://localhost",
		notify: false
    });
});
