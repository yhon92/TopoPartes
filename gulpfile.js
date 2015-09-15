'use-stric';
var gulp     = require('gulp'),
    concat   = require('gulp-concat'),
    notify   = require('gulp-notify'),
    plumber  = require('gulp-plumber'),
    stylus   = require('gulp-stylus'),
    uglify   = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    nib      = require('nib');


var paths = {
  src: {
    js    : ['./resources/js/jquery.min.js',
             './resources/js/wowslider.js',
             './resources/js/script.js',
             './resources/js/app.js'
            ],
    css   : './resources/styl/styles.styl',
    img   : './resources/img/**/*.{jpg,jpeg,png,gif}',
  },
  dest: {
    js    : './public/js/',
    css   : './public/css/',
    img   : './public/img/',
    //html  : './client/build/html/'
  }
}


gulp.task('css', function() {
  gulp.src(paths.src.css)
  .pipe(stylus({
      compress: true,
      use: nib()
    }))
  .on('error', function(error){
    return notify().write(error);
  })
  .pipe(gulp.dest(paths.dest.css))
  .pipe(notify("CSS Completo!"))
});


gulp.task('js', function(){
  gulp.src(paths.src.js)
  .pipe(concat('app.js'))
  .pipe(uglify())
  .pipe(plumber())
  .pipe(gulp.dest(paths.dest.js))
  .pipe(notify("JS Completo!"));
});


gulp.task('imagemin', function() {
  gulp.src(paths.src.img)
  .pipe(plumber())
  .pipe(imagemin())
  .pipe(gulp.dest(paths.dest.img))
  .pipe(notify("Imagens Completo!"));
});