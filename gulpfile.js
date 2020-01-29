var gulp = require("gulp");
var browserSync = require("browser-sync").create();
var watch = require("gulp-watch");
var sass = require("gulp-sass");

gulp.task('sass', function() {
  return gulp.src('./src/scss/main.scss')
    .pipe(sass())
    .pipe(gulp.dest('./src/css/'))
    .pipe(browserSync.stream());
});


gulp.task('server', function() {
  browserSync.init({
    server: {
      baseDir: "./src/"
    }
  });
});

gulp.task('watch', function(){
  watch(['./src/*.html', './src/*js'],
    gulp.parallel(browserSync.reload));

  watch('./src/scss/**/*.scss', function(){
    setTimeout( gulp.parallel('sass'), 1000);
  });
});


gulp.task('default', gulp.series('sass', gulp.parallel('server', 'watch')));
