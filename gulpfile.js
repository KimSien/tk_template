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


//foundation
var gulp = require('gulp');
var $    = require('gulp-load-plugins')();

var sassPaths = [
  'node_modules/foundation-sites/scss',
  'node_modules/motion-ui/src'
];

gulp.task('sass', function() {
  return gulp.src('develop/scss/*.scss')
    .pipe($.sass({
      includePaths: sassPaths,
      outputStyle: 'compressed' // if css compressed **file size**
    })
      .on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9']
    }))
    .pipe(gulp.dest('public/css'));
});
