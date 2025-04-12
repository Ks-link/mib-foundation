// Reference: https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_navbar_hide_scroll

let prevScrollpos = window.scrollY;

window.onscroll = function() {

let currentScrollPos = window.scrollY;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("masthead").style.top = "0";
  } else {
    document.getElementById("masthead").style.top = "-100%";
  }
  prevScrollpos = currentScrollPos;
}

// Select all <li> elements
const menuItems = document.querySelectorAll('li.menu-item');

// Add a click event listener to each <li>
menuItems.forEach(item => {
 
  item.addEventListener('click', () => {
    // Find the element with the 'menu-toggle' class
    const menuToggleElement = document.getElementById("site-navigation");

    const expandedBtn = document.getElementsByClassName("menu-toggle")
    const expandedElement = document.getElementById("top-menu")
    
    // Remove the 'menu-toggle' class if it exists
    if (menuToggleElement) {
      menuToggleElement.classList.remove('toggled');
    }

    // Toggle the aria-expanded attribute on the expandedElement
    if (expandedElement) {
      const isExpanded = expandedElement.getAttribute('aria-expanded') === 'true';
      expandedElement.setAttribute('aria-expanded', !isExpanded);
    }
    if (expandedBtn) {
      const isExpandedBtn = expandedBtn[0].getAttribute('aria-expanded') === 'true';

      expandedBtn[0].setAttribute('aria-expanded', !isExpandedBtn);
    }
  });
});
