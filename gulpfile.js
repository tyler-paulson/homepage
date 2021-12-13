const { src, dest, watch } = require('gulp');
const sass = require('gulp-sass')(require('sass'));

function css() {
  return src('src/app.scss')
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(dest('public/dist'))
};

exports.watch = function() {
  watch('src/*.scss', css);
};

exports.default = css;
