var gulp = require('gulp');
var concat = require('gulp-concat');
 
//Junta tudo em all.js
gulp.task('scripts', function() {
  return gulp.src([
      './../assets/js/modernizr-2.8.3.min.js',
      './../assets/js/wow.min.js',
      './../assets/js/jquery-1.11.2.min.js',
      './../assets/js/bootstrap.min.js',
      './../assets/js/main.js'
  ])
    .pipe(concat('all.js'))
    .pipe(gulp.dest('./../assets/js/'));
});


gulp.task('default', function() {
    gulp.run('scripts');
});