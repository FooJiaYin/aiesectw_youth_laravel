var gulp = require('gulp');
var connect = require('connect');
var connectLivereload = require('connect-livereload');
var opn = require('open');
var gulpLivereload = require('gulp-livereload');
var compass = require('gulp-compass');
//var concat = require('gulp-concat');
//var rename = require("gulp-rename");
var concatreplace = require('gulp-concat-replace');

var config = {
    rootDir: __dirname,
    servingPort: 8080,
    filesToWatch: ['./*.{html,css,js}', '!Gulpfile.js'],
    sass: './sass/*.scss',
    css: './stylesheets/*.css'
};

gulp.task('default', ['watch', 'style']);

gulp.task('watch', function () {
  gulpLivereload.listen();
  gulp.watch(config.filesToWatch,function(file) {
    gulp.src(file.path)
      .pipe(gulpLivereload());
  });
  gulp.watch(config.sass, function(file){
    gulp.src(file.path)
    .pipe(compass({
      config_file: './config.rb',
      css: 'stylesheets',
      sass: 'sass',
      time: 'true'
    }))
    .on('error', function(error) {
      console.log(error);
      gulp.src('./sass/*.scss').pipe(gulpLivereload());
    })
  });
});

gulp.task('style', function () {
  gulp.watch(config.css,function(file) {
    gulp.src(file.path)
      .pipe(gulpLivereload());
  });
});


gulp.task('build', function(){
    gulp.src('index.html')
        .pipe(concatreplace({
            prefix:"concat",
            base:"./",
            output:{
                css:"./css",
                js:"./js"
            }
        }))
        .pipe(gulp.dest('build/'));//html替换后的目录
});