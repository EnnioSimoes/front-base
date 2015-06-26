var gulp = require('gulp');
var concat = require('gulp-concat');
var minifyCss = require('gulp-minify-css');
var notify = require("gulp-notify");
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');
var stylus = require('gulp-stylus');

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
    //.pipe( notify( 'Javascript unificado com sucesso!' ));
});

//Cria torna css's na pasta css minificado
gulp.task('minify-css', function() {
    return gulp.src('./../assets/css/*.css') //Arquivos Originais
    .pipe(minifyCss({compatibility: 'ie8'}))
    .pipe(gulp.dest('./../assets/css'))
    //.pipe( notify( 'CSS OK!' ));
});

//Otimizar imagens na pasta img
gulp.task('imagemin', function () {
    return gulp.src(['./../assets/img/*.jpg','./../assets/img/*.png'])    
    .pipe(imagemin({
        progressive: true,
        svgoPlugins: [{removeViewBox: false}],
        use: [pngquant()]
    }))
    .pipe(gulp.dest('./../assets/img'));
});

//Otimza JS CSS IMG
gulp.task( 'otimizar-site', function() {
    gulp.run('scripts', 'minify-css', 'imagemin');
});

//Observa stylus/main.styl e gera css/main.css no formato compress (compress: true/false)
gulp.task('stylus', function () {
  gulp.src('./../assets/stylus/main.styl')
    .pipe(stylus({
      compress: true
    }))
    .pipe(gulp.dest('./../assets/css'));
});

//Roda watch no stylus
//Para instalar stylus global use $ npm install stylus -g Pronto!
gulp.task( 'default', function() {
    gulp.watch('./../assets/stylus/*.styl', ['stylus']);
});