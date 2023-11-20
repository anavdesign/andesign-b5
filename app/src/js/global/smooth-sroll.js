/**
 * Smooth Scroll
 * https://github.com/callmecavs/jump.js
 * http://callmecavs.com/jump.js/
 *
 * Usage
 * data-smooth-scroll="target: #selector, duration: 150, offset: 0"
 *
 */

//=require ../../../node_modules/jump.js/dist/jump.js

const $ssButtons = document.querySelectorAll('[data-smooth-scroll]');

$ssButtons.forEach((button) => {
  let btnValue = button.getAttribute('data-smooth-scroll');
  const btnOptions = {}, re = new RegExp('(.*?):(.*?)(?:,|$)','g');
  btnValue.replace(re, (_, key, value) => btnOptions[key.trim()] = value.trim());

  const scrollTarget = btnOptions.target ? btnOptions.target : null;
  if (scrollTarget) {
    const scrollDuration = btnOptions.duration ? btnOptions.duration : 500;
    const scrollOffset = btnOptions.offset ? btnOptions.offset : 0;

    // console.log(btnOptions)
    // console.log('Target: ' + scrollTarget)
    // console.log('Duration: ' + scrollDuration)
    // console.log('Offset: ' + scrollOffset)

    button.addEventListener('click', (e) => {
      Jump(scrollTarget, {
        duration: scrollDuration,
        offset: scrollOffset,
      })
      e.preventDefault();
    });
  }
});
