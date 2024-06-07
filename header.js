/*=============== SHOW MENU ===============*/
const showMenu = (toggleId, navId) => {
  const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId);

  if (toggle && nav) { // Ensure both elements exist
    toggle.addEventListener('click', () => {
      // Add custom-show-menu class to nav menu
      nav.classList.toggle('custom-show-menu');
      // Add custom-show-icon to show and hide menu icon
      toggle.classList.toggle('custom-show-icon');
    });
  }
};

showMenu('nav-toggle', 'nav-menu');

/*=============== SHOW DROPDOWN MENU ===============*/
const dropdownItems = document.querySelectorAll('.custom-dropdown__item');

// Select each dropdown item
dropdownItems.forEach((item) => {
  const dropdownButton = item.querySelector('.custom-dropdown__button');

  if (dropdownButton) { // Ensure dropdownButton exists
    // Select each button click
    dropdownButton.addEventListener('click', () => {
      // Call the toggleItem function
      toggleItem(item);
    });
  }
});

// Create a function to display the dropdown
const toggleItem = (item) => {
  const dropdownContainer = item.querySelector('.custom-dropdown__container');

  if (dropdownContainer) { // Ensure dropdownContainer exists
    // Toggle the custom-show-dropdown class
    item.classList.toggle('custom-show-dropdown');
    // Toggle height of the dropdown container
    dropdownContainer.style.height = item.classList.contains('custom-show-dropdown') ? dropdownContainer.scrollHeight + 'px' : '0';
  }
};

/*=============== DELETE DROPDOWN STYLES ===============*/
const mediaQuery = window.matchMedia('(min-width: 1118px)');
const dropdownContainers = document.querySelectorAll('.custom-dropdown__container');

// Function to remove dropdown styles in mobile mode when browser resizes
const removeStyle = () => {
  // Validate if the media query reaches 1118px
  if (mediaQuery.matches) {
    // Remove the dropdown container height style
    dropdownContainers.forEach((e) => {
      e.style.height = '';
    });

    // Remove the custom-show-dropdown class from dropdown item
    dropdownItems.forEach((e) => {
      e.classList.remove('custom-show-dropdown');
    });
  }
};

window.addEventListener('resize', removeStyle);

/* ======= HEADER DISAPPEAR ======= */

var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();

var didScroll;
// on scroll, let the interval function know the user has scrolled
$(window).scroll(function(event){
  didScroll = true;
});
// run hasScrolled() and reset didScroll status
setInterval(function() {
  if (didScroll) {
    hasScrolled();
    didScroll = false;
  }
}, 250);

function hasScrolled() {
  var st = $(this).scrollTop();
  if (Math.abs(lastScrollTop - st) <= delta)
    return;

  // If current position > last position AND scrolled past navbar...
  if (st > lastScrollTop && st > navbarHeight){
    // Scroll Down
    $('header').removeClass('nav-down').addClass('custom-nav-up');
  } else {
    // Scroll Up
    // If did not scroll past the document (possible on mac)...
    if (st + $(window).height() < $(document).height()) { 
      $('header').removeClass('custom-nav-up').addClass('nav-down');
    }
  }
  lastScrollTop = st;
}
