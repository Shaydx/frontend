const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');

gulp.task('sass', function() {
    return gulp.src(['node_modules/bootstrap/scss/bootstrap.scss',
        'assets/scss/**'])
        .pipe(sass())
        .pipe(gulp.dest('build/css'))
        .pipe(browserSync.stream());
})

gulp.task('js', function() {
    return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.min.js',
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/popper.js/dist/umd/popper.min.js',
        'assets/js/**'])
        .pipe(gulp.dest('build/js'))
        .pipe(browserSync.stream())

})

gulp.task('serve', gulp.series('sass', 'js', function() {
    browserSync.init({
        proxy: 'localhost/fridgo', port: 3000,
        open: false,
    });

    gulp.watch(['assets/scss/**'], gulp.series('sass'));
    gulp.watch(['assets/js/**'], gulp.series('js'));
    gulp.watch('*.php').on('change', browserSync.reload);
}));

gulp.task('default', gulp.series('serve'));