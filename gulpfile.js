const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const concat = require('gulp-concat');

function style() {
    return (
        gulp
            .src("./src/scss/*.scss")
            .pipe(sass())
            .on("error", sass.logError)
 			.pipe(autoprefixer(['last 15 versions']))
            .pipe(concat('styles.concated.css'))
            .pipe(gulp.dest("./css/"))
    );
}
gulp.task('default', function () {
    return gulp.watch('./src/scss/**/*.scss', gulp.series('style'));
});
exports.style = style;




 
