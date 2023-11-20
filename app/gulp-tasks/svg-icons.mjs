'use strict';

import gulp from 'gulp';
const { src, dest } = gulp;
import cheerio from 'gulp-cheerio';
import rename from 'gulp-rename';
import svgmin from 'gulp-svgmin';
import svgstore from 'gulp-svgstore';

function svgIcons() {
  return src('src/svg/*.svg')
    .pipe(rename(function (opt) {
      opt.basename = 'icon-' + opt.basename.split(/_(.+)/)[1];
      return opt;
    }))
    .pipe(svgmin())
    .pipe(svgstore({ inlineSvg: true }))
    .pipe(cheerio({
      run: function ($, file) {
        $('svg').addClass('hidden');
        $('[fill]').removeAttr('fill');
      },
      parserOptions: { xmlMode: true }
    }))
    .pipe(rename('icons.svg'))
    .pipe(dest('../images/'));
};

export default svgIcons;
