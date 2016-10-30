var gulp = require('gulp');
var babel = require('gulp-babel');
var plumber = require('gulp-plumber');
var sourcemaps = require("gulp-sourcemaps"); 
//var src = ['develop/js/test.es6.js'];
//var src = ['develop/js/test.es6.js','develop/js/test2.es6.js'];

gulp.task('build', function () {
  //return gulp.src(src)
  return gulp.src('develop/js/*.es6.js')
    .pipe(plumber())
    .pipe(sourcemaps.init()) 
    .pipe(babel())
    .pipe(sourcemaps.write(".")) 
    .pipe(gulp.dest('./public/js/'));
});

gulp.task('watch', function () {
  gulp.watch(src, ['build']);
});

gulp.task('default', ['build']);



var sass = require('gulp-sass');
var postcss = require('gulp-postcss');
var cssnext = require('postcss-cssnext');

var paths = {
  'scss': 'develop/scss/',
  'css': 'public/css/'
}

gulp.task('scss', function() {
  var processors = [
      cssnext()
  ];
  return gulp.src(paths.scss + '**/*.scss')
    .pipe(sass())
    .pipe(postcss(processors))
    .pipe(gulp.dest(paths.css))
});

