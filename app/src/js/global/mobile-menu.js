/**
 * Mobile Menu
 *
 */

// Mobile Menu Toggle Buttons
document.querySelectorAll(".mobile-menu-toggle").forEach(function(button) {
  button.addEventListener("click", function() {
    document.documentElement.classList.toggle('js-mobile-menu-active');
  });
});
