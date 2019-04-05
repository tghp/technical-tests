const gulp = require('gulp');
const notify = require('gulp-notify');
const sass = require('gulp-sass');

// PostCSS
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');
const autoprefixer = require('autoprefixer');

// Directories
const srcSass = './app/sass/styles.scss';
const watchSass = './app/sass/**/*.scss';
const destCss = './public/css/'; // ?

gulp.task('styles', function() {
    return gulp.src(srcSass)
        // ...
        .pipe( gulp.dest(destCss) )
        .pipe( notify({
            message: function () {
                return 'Finished styles task'
            },
            onLast: true
        }) );
});

gulp.task('watch', function () {
    gulp.watch(
        [watchSass, srcSass],
        ['styles']
    );
});
