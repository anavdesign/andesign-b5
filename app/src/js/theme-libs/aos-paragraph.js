/**
 * Paragraph AOS (Animation on Scroll)
 * https://michalsnik.github.io/aos/
 */

// Set AOS Animations using Class Name
function setAosAttr(aosObject, aosStyle) {
  // AOS Attributes
  const aosAttr = {
    'data-aos': aosStyle,
    'data-aos-once': 'false',
    'data-aos-duration': '600',
  }
  // AOS Element Setter
  for (let i = 0; i < aosObject.length; i++) {
    Object.keys(aosAttr).forEach(attr => {
      aosObject[i].setAttribute(attr, aosAttr[attr]);
    });
  }
}

// Fade Up
const $aosFadeUp = document.querySelectorAll(' \
  .paragraph.aos-fade-up, \
  .paragraph__image.aos-fade-up .media img, \
  .paragraph__content.aos-fade-up\
');
setAosAttr($aosFadeUp, 'fade-up');

// Fade Right
const $aosFadeRight = document.querySelectorAll(' \
  .paragraph.aos-fade-right, \
  .paragraph__image.aos-fade-right .media img, \
  .paragraph__content.aos-fade-right\
');
setAosAttr($aosFadeRight, 'fade-right');

// Fade Left
const $aosFadeLeft = document.querySelectorAll(' \
  .paragraph.aos-fade-left, \
  .paragraph__image.aos-fade-left .media img, \
  .paragraph__content.aos-fade-left\
');
setAosAttr($aosFadeLeft, 'fade-left');

AOS.init({
  // disable: window.innerWidth < 768,
  useClassNames: true,
  easing: 'ease-in-sine',
  delay: 100,
});
