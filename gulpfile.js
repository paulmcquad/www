const gulp = require('gulp');
const imagemin = require('gulp-imagemin');
const uglify = require('gulp-uglify');
const sass = require('gulp-sass');
const concat = require('gulp-concat');
/*
  -- TOP LEVEL FUNCTIONS --
  gulp.task - Define tasks
  gulp.src - Point to files to use
  gulp.dest - Point to folder to output
  gulp.watch - watch files and folders for changes

*/

// Logs Message
gulp.task('message', function() {
  return console.log('Gulp is running...');
});

// Copy ALl HTML files
gulp.task('copyHTML', function() {
  gulp.src('src/*.html')
      .pipe(gulp.dest('dist'));
});

// Copy ALl HTML files
gulp.task('copyCSS', function() {
  gulp.src('src/css/*.css')
      .pipe(gulp.dest('dist/css'));
});

// Copy ALl JS files
gulp.task('copyJS', function() {
  gulp.src('src/js/*.js')
      .pipe(gulp.dest('dist/js'));
});



// Optimize Images
gulp.task('imageMin', () =>
	gulp.src('src/img/*')
		  .pipe(imagemin())
		  .pipe(gulp.dest('dist/img'))
);

// Minify JS
gulp.task('minify', function() {
  gulp.src('src/js/*.js')
      .pipe(uglify())
      .pipe(gulp.dest('dist/js'));
});

//Complie Sass
gulp.task('sass', function() {
  gulp.src('src/sass/*.scss')
      .pipe(sass().on('error', sass.logError))
      .pipe(gulp.dest('dist/css'));
});

// scripts
gulp.task('myscripts', function() {
    gulp.src('src/js/showSlides.js')
        .pipe(concat('showSlides.js'))
        .pipe(uglify())
        .pipe(gulp.dest('dist/js'));
});


gulp.task('default', function() {
  return console.log('Gulp is running...');
});

gulp.task('default',['message', 'copyHTML','copyCSS', 'copyJS', 'myscripts', 'imageMin','sass']);

gulp.task('watch', function() {
  gulp.watch('src/js/*.js', ['myscripts']);
  gulp.watch('src/img/*.js', ['imageMin']);
  gulp.watch('src/*.html', ['copyHTML']);
  gulp.watch('src/css/*.css', ['copyCSS']);
  gulp.watch('src/js/*.js', ['copyJS']);
  gulp.watch('src/sass/*.sass', ['sass']);
});
