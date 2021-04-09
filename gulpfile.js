var gulp = require('gulp');
var postcss = require('gulp-postcss');

gulp.task('default', function () {

    gulp.src('./src/index.html')
        .pipe(gulp.dest('./dest'));
    return gulp
        .src('./src/style.css')
        .pipe(postcss([
            require('postcss-import'),
            require('tailwindcss'),
            require('autoprefixer'),
            require('cssnano')
        ]))
        .pipe(gulp.dest('./dest'));
});
