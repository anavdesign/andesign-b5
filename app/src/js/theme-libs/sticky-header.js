/**
 * Theme Sticky Header
 *
 */

if (document.getElementsByClassName('layout-sticky-header')) {
  window.onload = function() {

    if (!document.getElementById('toolbar-bar')) {

      const $body = document.body;
      const $header = document.getElementById('layout-header');
      let headerHeight = $header.offsetHeight;
      var $placeholder = document.createElement('div');
      let timeoutID = '';

      // Add Sticky Class to Root
      $body.classList.add('js-sticky-header', 'js-sticky-header-active');

      // Placeholder Setter
      $placeholder.setAttribute('class','js-sticky-header-placeholder d-print-none');
      $header.after($placeholder);

      // Set sticky header placeholder height
      function setPlaceholderHeight() {
        $placeholder.style.height = headerHeight + 'px';
      }
      setPlaceholderHeight();

      // Adjust sticky header height on window resize
      function resizeHeaderHeight() {
        headerHeight = $header.offsetHeight;
        setPlaceholderHeight()
      }

      // Show/Hide Header on Page Scroll
      let prevScrollPos = window.pageYOffset;
      let currentScrollPos = '';

      window.onscroll = function() {
        currentScrollPos = window.pageYOffset;
        if(prevScrollPos > headerHeight) {
          if(prevScrollPos > currentScrollPos) {
            $body.classList.add('js-sticky-header-active');
            $header.style.top = '0';
          } else {
            $body.classList.remove('js-sticky-header-active');
            $header.style.top = -headerHeight + 'px';
          }
        }
        prevScrollPos = currentScrollPos;
      }

      window.addEventListener("resize", function() {
        clearTimeout(timeoutID);
        timeoutID = setTimeout(resizeHeaderHeight, 500);
      });

    }

  }
}
