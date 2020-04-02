const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const concat = require('gulp-concat');


// Define tasks after requiring dependencies
function style() {
    // Where should gulp look for the sass files?
    // My .sass files are stored in the styles folder
    // (If you want to use scss files, simply look for *.scss files instead)
    return (
        gulp
            .src("./src/scss/*.scss")
 	
            // Use sass with the files found, and log any errors
            .pipe(sass())
            .on("error", sass.logError)
 			.pipe(autoprefixer(['last 15 versions']))
            // What is the destination for the compiled file?
            .pipe(concat('styles.concated.css'))
            .pipe(gulp.dest("./css/"))
    );
}
gulp.task('default', function () {
    return gulp.watch('./src/scss/**/*.scss', gulp.series('style'));
});
// Expose the task by exporting it
// This allows you to run it from the commandline using
// $ gulp style
exports.style = style;




 
