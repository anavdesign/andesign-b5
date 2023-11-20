'use strict';

import gulp from 'gulp';
const { src, dest } = gulp;
import changed from 'gulp-changed';
import * as dartSass from 'sass';
import gulpSass from 'gulp-sass';
const sass = gulpSass(dartSass);
import sassGlob  from 'gulp-sass-glob';
import autoprefixer from 'gulp-autoprefixer';
import gcmq from 'gulp-group-css-media-queries';
import cleanCSS from 'gulp-clean-css';
import sourcemaps from 'gulp-sourcemaps';
import browserSync from 'browser-sync';

function sassGlobal() {
  const sassSrc = [
    './src/sass/styles/components/components.scss',
    './src/sass/styles/layout/layout.scss',
    './src/sass/styles/paragraph/paragraph.scss',
    './src/sass/styles/print/print.scss',
    './src/sass/styles/theme/theme.scss',
    './src/sass/styles/theme-libs/*.scss',
  ];
  const sassDest = '../css';

  return src(sassSrc)
    .pipe(changed(sassDest))
    .pipe(sassGlob())
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(autoprefixer({
      overrideBrowserslist: ['last 2 versions'],
      cascade: false
    }))
    .pipe(gcmq())
    .pipe(cleanCSS())
    .pipe(sourcemaps.init())
    .pipe(sourcemaps.write())
    .pipe(dest(sassDest))
    .pipe(browserSync.stream());
};

export default sassGlobal;
