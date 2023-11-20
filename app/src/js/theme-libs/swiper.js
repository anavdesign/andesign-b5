/**
 * Swiper
 * https://swiperjs.com/get-started
 * https://swiperjs.com/demos
 */

//=require ../../../node_modules/swiper/swiper-bundle.js

// Paragraph Swiper
var swiper = new Swiper(".swiper--paragraph", {
  loop: true,
  effect: "fade",
  centeredSlides: true,
  observer: true,
  observeParents: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: true,
  },
  pagination: {
    el: '.swiper-pagination',
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

// Page Title
var swiper = new Swiper(".swiper--title", {
  loop: true,
  effect: "fade",
  centeredSlides: true,
  observer: true,
  observeParents: true,
  autoplay: {
    delay: 5000,
  },
});
