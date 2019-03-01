// const gulp = require('gulp'),
// 	cleanCSS = require('gulp-clean-css'),
// 	sass = require('gulp-sass'),
// 	uglify = require('gulp-uglify');
"use strict";

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    autoprefixer = require('gulp-autoprefixer'),
    htmlmin = require('gulp-htmlmin');
    // minifyjs = require('gulp-js-minify');

gulp.task('jsMinify', function() {
   return gulp.src('src/js/app.js')
               .pipe(uglify())
               .pipe(gulp.dest('js'));
});
// sass
gulp.task('sass', function(){
  return gulp.src('src/sass/style.scss')
  	.pipe(autoprefixer ({
		browsers: ['last 2 versions'], /*Will target the last two versions for each browsers*/
		cascade: false
	}))
    .pipe(sass({outputStyle: "compressed"}))
    .pipe(concat('style.css')) // Using gulp-sass
    .pipe(gulp.dest('css'));
});
// concat and bundle js script files
gulp.task('scripts', function() {
  return gulp.src('src/js/**/*.js')
    .pipe(concat('bundle.js'))
    .pipe(gulp.dest('js'));
});

/*Adds webprefixes*/
// gulp.task('default', function() {
// 	gulp.src('src/sass/style.scss')
// 	.pipe(autoprefixer ({
// 		browsers: ['last 2 versions'], /*Will target the last two versions for each browsers*/
// 		cascade: false
// 	}))
// 	.pipe(gulp.dest('css'))
// });
/*Minifies html code and ignores compressing inbeded php code and place compressed files in folder: site*/
gulp.task('htmltask', function(){
  return gulp.src(['./*.html','./*.php'])
      .pipe(htmlmin({
        collapseWhitespace: true,
        ignoreCustomFragments: [ /<%[\s\S]*?%>/, /<\?[=|php]?[\s\S]*?\?>/ ]
      }))
      .pipe(gulp.dest('./site'));
});
// gulp task watchers, sass, css, html and js scripts
gulp.task('watch', ['jsMinify','sass', 'scripts', 'htmltask'], function (){
  gulp.watch('src/sass/**/*.scss', ['sass']); 
  gulp.watch('src/js/**/*.js', ['scripts']);
  // Other watchers
});