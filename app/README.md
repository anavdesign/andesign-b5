# andesign Bootstrap 5 Drupal Theme

Drupal 10 theme using Bootstap 5 and gulp

## Gulp Commands
```
# Switch PHP
$ sphp 8.1

# Install App dependencies
$ npm i

# Run gulp after making changes to gulpfile.js
$ gulp

# Run gulp build to watch the files for changes and reload browser
$ gulp build
```

## SVG Sprite
Add icons to the icons.ai file. Export the icons to svg in illustrator. 
```
# Run gulp to generate the svg sprite file icons.svg.
$ gulp or gulp svg

# Use SVG Icons
<svg width="30" height="30" viewBox="0 0 16 16">
  <use xlink:href="#icon-nav"></use>
</svg>
```

## Fonts
1. Select fonts from [Google Fonts](https://fonts.google.com/)
2. Update fonts in the theme.libraries.yml
3. Update fonst in the app/src/sass/settings/variables/_typography.scss

## Resources

**Gulp**
* [Gulp Reference](https://gulpjs.com/docs/en/getting-started/quick-start)
* [Gulp 4: Sample Project](https://sharkcoder.com/tools/gulp)
* [Gulp 4: ES6 gulpfile example](https://gist.github.com/timothyis/cc7d79d1dad0622a9f9c)
* [Moving gulpfile from CommonJS (CJS) to ECMAScript Modules (ESM)](https://gist.github.com/noraj/007a943dc781dc8dd3198a29205bae04)
* [Gulp 4: Splitting gulpfile.js into multiple files](https://stackoverflow.com/questions/68981941/trouble-with-splitting-gulpfile-js-into-multiple-files-in-gulp-4)
* [Gulp 4: Splitting up main gulpfile.js](https://stackoverflow.com/questions/55283120/gulp-4-splitting-up-main-gulpfile-js)
* [ES6 import module with Gulp](https://stackoverflow.com/questions/47632435/es6-import-module-with-gulp)

**BrowserSync**
* [BrowserSync Options](http://www.browsersync.io/docs/options)
* [Gulp 4: ES6 BrowserSync+sass.](https://gist.github.com/townivan/9dd4e55ab19f6eca5be8066e0da58bf5)

**Bootstrap**
* [Bootstrap](https://getbootstrap.com)

**Styles**
* [AOS](https://www.npmjs.com/package/aos)
* [AOS Demo](http://michalsnik.github.io/aos/)

**Javascript**
* [Jump.js Smooth Scrolling Library](https://github.com/callmecavs/jump.js)
* [Smooth Scrolling](https://www.youtube.com/watch?v=bwNGfJu-T2k)
* [Simple Parallax](https://simpleparallax.com)
* [Swiper](https://swiperjs.com/get-started)
* [Swiper Demos](https://swiperjs.com/demos)

**Twig**
* [Twig Documentation](https://twig.symfony.com/doc/3.x/)
* [Twig Filters](https://twig.symfony.com/doc/3.x/filters/index.html)

**Fonts**
* [How To Add Google Fonts](https://www.youtube.com/watch?v=4W8RGfMpVQ0)
