var gulp = require('gulp');
var concat = require('gulp-concat');
var minifyCss = require('gulp-minify-css');
var notify = require("gulp-notify");

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
    .pipe(gulp.dest('./../assets/js/'))
    .pipe( notify( 'Javascript unificado com sucesso!' ));
});

//Cria CSS minificado
gulp.task('minify-css', function() {
  return gulp.src('./../assets/css/src/*.css')
    .pipe(minifyCss({compatibility: 'ie8'}))
    .pipe(gulp.dest('./../assets/css'))
    .pipe( notify( 'CSS OK!' ));
});

//Roda watch no css
gulp.task( 'default', function() {
    gulp.watch( './../assets/css/src/*.css', ['minify-css']);
});