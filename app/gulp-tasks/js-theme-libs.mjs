'use strict';

import gulp from 'gulp';
const { src, dest } = gulp;
import include from 'gulp-include';
import changed from 'gulp-changed';
import uglify from 'gulp-uglify';
import browserSync from 'browser-sync';

function jsTheme() {
  const jsSrc = './src/js/theme-libs/*.js';
  const jsDest = '../js';

  return src(jsSrc)
    .pipe(changed(jsDest))
    .pipe(include())
    .pipe(uglify())
    .pipe(dest(jsDest))
    .pipe(browserSync.stream());
};

export default jsTheme;
