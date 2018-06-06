var autoprefixer = require('gulp-autoprefixer');
var gulp = require('gulp');
var image = require('gulp-image');
var minifyCSS = require('gulp-csso');
var sourcemaps = require('gulp-sourcemaps');

var path = {
  src: {
    css: `src/css/`,
    img: `src/img/`,
  },
  dist: {
    css: 'dist/css/',
    img: 'dist/img/',
  }
}

gulp.task('css', function(){
  return gulp.src(`${path.src.css}*.css`)
    .pipe(sourcemaps.init())
      .pipe(minifyCSS())
      .pipe(autoprefixer({
        cascade: false
      }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(path.dist.css))
});

gulp.task('img', function(){
  return gulp.src(`${path.src.img}*`)
    .pipe(image())
    .pipe(gulp.dest(path.dist.img))
});

gulp.task('default', ['css', 'img']);
