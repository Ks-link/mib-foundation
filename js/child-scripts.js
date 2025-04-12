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