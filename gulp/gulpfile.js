var gulp = require('gulp');
var concat = require('gulp-concat');
var minifyCss = require('gulp-minify-css');
var notify = require("gulp-notify");

var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');

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
  return gulp.src('./../assets/css/sass/*.css') //Arquivos Originais
    .pipe(minifyCss({compatibility: 'ie8'}))
    .pipe(gulp.dest('./../assets/css'))
    .pipe( notify( 'CSS OK!' ));
});

//Junta tudo em all.css
gulp.task('concat-css', function() {
    return gulp.src([
        './../assets/css/bootstrap.min.css',
        './../assets/css/font-awesome.min.css',
        './../assets/css/animate.min.css',
        './../assets/css/responsive.css',
        './../assets/css/main.css',
    ])
    .pipe(concat('all.css'))
    .pipe(gulp.dest('./../assets/css/'))
    .pipe( notify( 'CSS unificado com sucesso!' ));
});

gulp.task('imagemin', function () {
    return gulp.src('./../assets/img/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest('./../assets/img'));
});

//Roda watch no css
gulp.task( 'otimizar-site', function() {
    gulp.run('scripts', 'minify-css', 'concat-css', 'imagemin');
});

//Roda watch no css
gulp.task( 'default', function() {
    gulp.watch( './../assets/css/src/*.css', ['minify-css']);
});