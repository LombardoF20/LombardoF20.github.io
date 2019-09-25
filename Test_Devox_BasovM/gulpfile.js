var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', async function(){
	gulp.src('./scss/*.scss')
	.pipe(sass())

	.pipe(gulp.dest('./out'));
});

gulp.task('watch', function(){
	gulp.watch('./scss/**/*.scss', gulp.series('sass'));
});
