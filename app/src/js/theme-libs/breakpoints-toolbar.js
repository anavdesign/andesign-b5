/**
 * Theme Breakpoints Toolbar
 *
 */

// https://developer.mozilla.org/en-US/docs/Web/API/Window/innerWidth
const widthOutput = document.querySelector(".theme-breakpoints-toolbar__width i");
const heightOutput = document.querySelector(".theme-breakpoints-toolbar__height i");
function updateSize() {
  heightOutput.textContent = window.innerHeight;
  widthOutput.textContent = window.innerWidth;
}
updateSize();
window.addEventListener("resize", updateSize);
