/**
 * Simple Parallax
 * https://simpleparallax.com/
 */

//=require ../../../node_modules/simple-parallax-js/dist/simpleParallax.js

// Section Paragraph
const $paraSection = document.querySelectorAll('.paragraph--parallax > .paragraph__bgnd-image img');

if($paraSection.length > 0) {
  new simpleParallax($paraSection);
  // new simpleParallax($paraSection, {
  //   scale: 1.5
  // });
}
