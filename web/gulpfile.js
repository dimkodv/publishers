const { src, dest, watch, parallel, gulp } = require("gulp");

const scss = require("gulp-sass");
const livereload = require("gulp-livereload");
const autoprefixer = require("gulp-autoprefixer");


function styles() {
    return src('./stylesheet/scss/**/*.scss')
        .pipe(scss({outputStyle: 'compressed'}).on('error', scss.logError))
        .pipe(autoprefixer({
            browsers: ['last 5 versions'],
            cascade: false
        }))
        .pipe(dest('./stylesheet/css'))
        .pipe(livereload());
}

function watching() {
    livereload.listen();
    watch(['./stylesheet/scss/**/*.scss'], styles);
    // watch(['./stylesheet/scss/**/*.scss']).on('change', livereload.changed);
}

exports.styles = styles;
exports.watching = watching;
exports.default = parallel(watching);