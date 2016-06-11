'use strict';

var path = require('path');
var ignore = require('gulp-ignore');
var gulp = require('gulp');
var less = require('gulp-less');
var rimraf = require('gulp-rimraf');
//CONFIG PATHS
var config = {
	build: 'css'
};

gulp.task('default', ['watch']);

gulp.task('watch', function () {
    gulp.watch('./less/**/*.less', function(file){
        gulp.src(file.path)
            .pipe(less({
                paths: ['./less/']
            }))
            .on('error', function(error) {
                console.log(error);
            })
            .pipe(gulp.dest("./" + config.build));
    });
});

//gulp.task('less',['clean'], function () {
//  gulp.src('/less/**/*.less')
//    .pipe(less({
//      paths: ['/less/']
//    }))
//    .pipe(gulp.dest("/" + config.build));
//});


gulp.task('clean', function(cb){
	return gulp.src( "./" + config.build + '/**/*.css', { read: false }) // much faster
  	.pipe(ignore('bootstrap.min.css'))
  	.pipe(rimraf());
});

