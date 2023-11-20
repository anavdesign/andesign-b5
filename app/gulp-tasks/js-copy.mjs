'use strict';

import gulp from 'gulp';
const { src, dest } = gulp;
import changed from 'gulp-changed';

function jsCopy() {
  const jsSrc = [
    // './node_modules/bootstrap/dist/js/bootstrap.js',
    // './node_modules/bootstrap/dist/js/bootstrap.js.map',
    // './node_modules/swiper/swiper-bundle.min.js',
    // './node_modules/aos/dist/aos.js'
  ];
  const jsDest = '../js';

  return src(jsSrc)
    .pipe(changed(jsDest))
    .pipe(dest(jsDest));
};

export default jsCopy;
