'use strict';

import gulp from 'gulp';
const { src, dest, parallel, series, watch } = gulp;
import clean from 'gulp-clean';
import twig from './gulp-tasks/twig.mjs';
import sassGlobal from './gulp-tasks/sass-global.mjs';
import sassBootstrap from './gulp-tasks/sass-bootstrap.mjs';
// import sassCopy from './gulp-tasks/sass-copy.mjs';
import jsGlobal from './gulp-tasks/js-global.mjs';
import jsTheme from './gulp-tasks/js-theme-libs.mjs';
// import jsCopy from './gulp-tasks/js-copy.mjs';
import svgIcons from './gulp-tasks/svg-icons.mjs';
import browserSync from 'browser-sync';

// Clean assets
function clear() {
  const source = [
    '../css/*.css',
    '../js/*',
    '../images/icons.svg*'
  ];
  return src(source, { read: false, allowEmpty: true }).pipe(clean({ force: true }));
}

// Build Watch
function buildWatch() {
  watch('../templates/**/*.twig', twig);
  watch(['./src/sass/styles/**/*.scss','./src/sass/settings/**/*.scss'], sassGlobal);
  watch('./src/js/global/**/*.js', jsGlobal);
  watch('./src/js/theme-libs/**/*.js', jsTheme);
}

// BrowserSync
function buildReload() {
  browserSync.init({
    proxy: {
        target: "http://andesign-b5.test",
        ws: true
    },
    browser: 'google chrome',
  });
}

// Build Task
export const build = parallel(buildWatch, buildReload);

// SVG Task
export const svg = svgIcons;

// Dev Task
export const dev = series(clear, parallel(sassGlobal, sassBootstrap, jsGlobal, jsTheme, svgIcons));

// Default
export default dev;
