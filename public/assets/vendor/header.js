function dropDown(x) {
  if (x.matches) {
  } else {
    $("ul.nav li.dropdown").hover(
      function () {
        $(this).find(".dropdown-menu").stop(true, true).delay(100).fadeIn(300);
      },
      function () {
        $(this).find(".dropdown-menu").stop(true, true).delay(100).fadeOut(300);
      },
    );
  }
}

var x = window.matchMedia("(max-width: 991px)");

dropDown(x); // Call listener function at run time

x.addListener(dropDown); // Attach listener function on state changes
var navBar = document.querySelector("#myNavbar");
var outNav = document.querySelector("#myNavbar .outside_nav");
var innerNav = document.querySelector("#myNavbar .innersite_nav");
var checktrans;

document.querySelector(".extra_menu").addEventListener("click", function () {
  checktrans = outNav.style.left;
  if (checktrans === "" || checktrans === "0px") {
    document.querySelector(".extra_menu").style.pointerEvents = "none";
    navBar.style.cssText = "overflow: hidden !important";
    outNav.style.left = "880px";
    setTimeout(function () {
      innerNav.style.display = "block";
    }, 10);
    setTimeout(function () {
      innerNav.style.right = "0px";
      document.querySelector(".extra_menu").style.pointerEvents = "auto";
    }, 300);
    checktrans = outNav.style.left;
  } else {
    document.querySelector(".extra_menu").style.pointerEvents = "none";
    innerNav.style.right = "-290px";
    outNav.style.display = "block";
    setTimeout(function () {
      outNav.style.left = "0px";
    }, 200);
    setTimeout(function () {
      navBar.style.cssText = "overflow:  visible !important";
      innerNav.style.display = "none";
      document.querySelector(".extra_menu").style.pointerEvents = "auto";
    }, 1000);
  }
});

document.querySelector(".navbar-toggle").addEventListener("click", function () {
  if (document.querySelector("body").style.overflowY === "hidden") {
    document.querySelector("body").style.cssText = "overflow-y:auto;";
    document.querySelector("body").style.cssText = "overflow-y:auto;";
  } else {
    document.querySelector("body").style.cssText = "overflow-y:hidden;";
  }
});
$(document).ready(function () {
  $(".nav-icon4").click(function () {
    $(this).toggleClass("open");
  });
});

window.onscroll = function () {
  topheaderscroll();
};

function topheaderscroll() {
  var topHeader = document.getElementById("topheader");
  var myHeader = document.getElementById("myHeader");

  if (!topHeader || !myHeader) return;

  var topHeaderHeight = topHeader.offsetHeight;

  if (document.body.scrollTop > 15 || document.documentElement.scrollTop > 15) {
    // Stick BOTH headers to the top as a combined fixed bar
    topHeader.style.position = "fixed";
    topHeader.style.top = "0";
    topHeader.style.left = "0";
    topHeader.style.width = "100%";
    topHeader.style.zIndex = "100001";

    myHeader.style.position = "fixed";
    myHeader.style.top = topHeaderHeight + "px"; // Sit below the topheader
    myHeader.style.left = "0";
    myHeader.style.width = "100%";
    myHeader.style.zIndex = "100000";
  } else {
    // Release both back to normal flow
    topHeader.style.position = "relative";
    topHeader.style.top = "";
    topHeader.style.width = "";
    topHeader.style.zIndex = "";

    myHeader.style.position = "relative";
    myHeader.style.top = "";
    myHeader.style.width = "";
    myHeader.style.zIndex = "";
  }
}
