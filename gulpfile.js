var autoprefixer = require('gulp-autoprefixer');
var gulp = require('gulp');
var minifyCSS = require('gulp-csso');
var sourcemaps = require('gulp-sourcemaps');

var path = {
  src: {
    css: `src/css/`
  },
  dist: {
    css: 'dist/css/'
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

gulp.task('default', ['css']);
