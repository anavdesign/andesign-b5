'use strict';

import gulp from 'gulp';
const { src, dest } = gulp;
import changed from 'gulp-changed';
import * as dartSass from 'sass';
import gulpSass from 'gulp-sass';
const sass = gulpSass(dartSass);
import sassGlob  from 'gulp-sass-glob';

function sassBootstrap() {
  const sassSrc = [
    './src/sass/bootstrap/bootstrap.scss'
  ];
  const sassDest = '../css';

  return src(sassSrc)
    .pipe(changed(sassDest))
    .pipe(sassGlob())
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(dest(sassDest));
};

export default sassBootstrap;
