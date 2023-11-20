'use strict';

import gulp from 'gulp';
const { src } = gulp;
import browserSync from 'browser-sync';

function twig() {
  return src('../templates/*')
    .pipe(browserSync.stream());
};

export default twig;
