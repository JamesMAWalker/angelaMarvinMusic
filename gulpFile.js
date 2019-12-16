const browserSync = require('browser-sync').create(),
      gulp         = require('gulp'),
      sass         = require('gulp-sass'),
      settings     = require('./settings');


// Compiles SASS file in root directory with a .css suffix. Also sets up browserSync to monitor changes.      
function style() {

  return gulp.src('./assets/sass/**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('./'))
    .pipe(browserSync.stream());

}


// Watches for changes to .css file. init() sets the source of the URL, and .watch monitors the specified files for changes, reloading the browser whenver changes are detected (as long as the task is running). 
function watch() {
  browserSync.init({
    // server: {
    //   baseDir: './'
    // }
    notify: false,
    proxy: settings.urlToPreview,
    ghostMode: false
  });
  gulp.watch('./assets/sass/**/*.scss', style)
  gulp.watch('./*.php').on('change', browserSync.reload);
  gulp.watch("./assets/js/*.js").on("change", browserSync.reload);
}

exports.style = style;
exports.watch = watch;