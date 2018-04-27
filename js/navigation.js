/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
(function() {
  var container, mainMenu, button, menu, links, i, len;

  container = document.getElementById("site-navigation");
  if (!container) {
    return;
  }

  mainMenu = document.getElementById("mainNav");
  if (!mainMenu) {
    return;
  }

  button = document.getElementById("button");
  if ("undefined" === typeof button) {
    return;
  }

  menu = container.getElementsByTagName("ul")[0];

  // Hide menu toggle button if menu is empty and return early.
  if ("undefined" === typeof menu) {
    button.style.display = "none";
    return;
  }

  menu.setAttribute("aria-expanded", "false");
  if (-1 === menu.className.indexOf("nav-menu")) {
    menu.className += " nav-menu";
  }

  button.onclick = function() {
    if (-1 !== mainMenu.className.indexOf("toggled")) {
      mainMenu.className = mainMenu.className.replace(" toggled", "");
      button.setAttribute("aria-expanded", "false");
      menu.setAttribute("aria-expanded", "false");
    } else {
      mainMenu.className += " toggled";
      button.setAttribute("aria-expanded", "true");
      menu.setAttribute("aria-expanded", "true");
    }
  };

  /**
   * Toggles `focus` class to allow submenu access on tablets.
   */
 var touchStartFn,
	 i,
	 parentLink = container.querySelectorAll(
		 ".menu-item-has-children > a, .page_item_has_children > a"
	 );
  function touchStartFn(e) {

    var menuItem = this.parentNode,
      i;

    if (!menuItem.classList.contains("focus")) {
      e.preventDefault();
      for (i = 0; i < menuItem.parentNode.children.length; ++i) {
        if (menuItem === menuItem.parentNode.children[i]) {
          continue;
        }
        menuItem.parentNode.children[i].classList.remove("focus");
      }
      menuItem.classList.add("focus");
    } else {
      menuItem.classList.remove("focus");
    }
  }

  for (i = 0; i < parentLink.length; ++i) {
    parentLink[i].addEventListener("click", touchStartFn, false);
  }
})();

// stickyHead: Make the navigation and header sticky after scrolling past
function stickyHead() {
  var headerWrapper, fullNav, navHeight;

  headerWrapper = document.getElementById('header-wrapper');
  masterHeader = document.getElementById('mastHead');
  siteNav = document.getElementById('site-navigation');
  navHeight = headerWrapper.offsetHeight;

  headerWrapper.style.height = navHeight + "px";

  if (window.pageYOffset >= navHeight + 50) {
    siteNav.classList.add("sticky");
  }
  else if (window.pageYOffset < navHeight - 50) {
    siteNav.classList.remove("sticky");
  }
}
$(window).on("scroll", stickyHead);

$('.search-wrapper').click(function(event) {
  var e = window.event;
  this.classList.add('focused');
  e.stopPropagation();
});
$(document).click(function(event){
    $(".search-wrapper").removeClass('focused');
});
