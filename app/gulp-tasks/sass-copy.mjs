'use strict';

import gulp from 'gulp';
const { src, dest } = gulp;
import changed from 'gulp-changed';

function sassCopy() {
  const sassSrc = [
    // './node_modules/aos/dist/aos.css',
    // './node_modules/swiper/swiper-bundle.min.css'
  ];
  const sassDest = '../css';

  return src(sassSrc)
    .pipe(changed(sassDest))
    .pipe(dest(sassDest));
};

export default sassCopy;
