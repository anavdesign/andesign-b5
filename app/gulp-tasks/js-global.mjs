'use strict';

import gulp from 'gulp';
const { src, dest } = gulp;
import include from 'gulp-include';
import concat from 'gulp-concat';
import changed from 'gulp-changed';
import uglify from 'gulp-uglify';
import browserSync from 'browser-sync';

function jsGlobal() {
  const jsSrc = './src/js/global/*.js';
  const jsDest = '../js';

  return src(jsSrc)
    .pipe(changed(jsDest))
    .pipe(include())
    .pipe(concat('scripts.js'))
    .pipe(uglify())
    .pipe(dest(jsDest))
    .pipe(browserSync.stream());
};

export default jsGlobal;
