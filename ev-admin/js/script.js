const currentLocation = location.href;
const menuItem = document.querySelectorAll("a");
const menuItem2 = document.querySelectorAll(".a");
const main = document.getElementById("main");
const menuLength = menuItem.length;
const menuLength2 = menuItem2.length;

for (let i = 0; i < menuLength; i++) {
  if (menuItem[i].href === currentLocation) {
    menuItem[i].className = "active";
  }
}

for (let i = 0; i < menuLength2; i++) {
  if (menuItem2[i].href === currentLocation) {
    menuItem2[i].className = "active2";
  }
}

//toggle sidebar
const sidebar = document.getElementById("sidebar");
const reicon = document.getElementById("reicon");
const close = document.getElementById("close");

reicon.addEventListener("click", () => {
  sidebar.style.transform = "translate(0px, 0px)";
  sidebar.style.flex = "1";
  reicon.style.display = "none";
  sidebar.style.height = "90vh";
});
close.addEventListener("click", () => {
  sidebar.style.transform = "translate(-273px, 0px)";
  sidebar.style.flex = "0";
  setTimeout(() => {
    reicon.style.display = "block";
  }, 100);
});

//for disable main website scroll bar because firefox body height:100vh is now work
function disableScroll() {
  // Get the current page scroll position
  scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  (scrollLeft = window.pageXOffset || document.documentElement.scrollLeft),
    // if any scroll is attempted, set this to the previous value
    (window.onscroll = function () {
      window.scrollTo(scrollLeft, scrollTop);
    });
}
disableScroll();
