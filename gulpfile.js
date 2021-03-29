const { src, dest, watch } = require('gulp');
const sass = require('gulp-sass');

function css() {
  return src('src/app.scss')
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(dest('public/dist'))
};

exports.watch = function() {
  watch('css/*.scss', css);
};

exports.default = css;
