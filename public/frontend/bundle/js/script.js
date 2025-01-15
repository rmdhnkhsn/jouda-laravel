
let sidebar = document.querySelector(".sidebar");
let backdrop = document.querySelector("#backdrop");
let navToggeSide = document.querySelector(".nav-toggle.side i");
let navToggeNav = document.querySelector(".nav-toggle.nav i");

navToggeSide.addEventListener("click", ()=>{
  sidebar.classList.toggle("close");
  navToggeSide.classList.toggle("bx-menu-alt-left");
  backdrop.classList.toggle("sidebar-backdrop");
});

navToggeNav.addEventListener("click", ()=>{
  sidebar.classList.toggle("close");
  navToggeNav.classList.toggle("bx-menu-alt-left");
  backdrop.classList.toggle("sidebar-backdrop");
});

$(".hideBar").on("click", function(){
  $(".sidebar").addClass("close");
  $("#backdrop").removeClass("sidebar-backdrop");
  $(".nav-toggle.side i").removeClass("bx-menu-alt-left");
  $(".nav-toggle.side i").addClass("bx-menu");
  $(".nav-toggle.nav i").removeClass("bx-menu-alt-left");
  $(".nav-toggle.nav i").addClass("bx-menu");
});


// MENU ACTIVE FUNCTION
// $(".submenu-link").on("click", function(){
//   $(".submenu-link").removeClass("active");
//   $(this).addClass("active");

//   $(".menu-link").on("click", function(){
//     $(".submenu-link").removeClass("active");
//   });
// });

// $(".menu-link").on("click", function(){
//   $(".menu-link").removeClass("active");
//   $(this).addClass("active");

//   $(".submenu-link").on("click", function(){
//     $(".menu-link").removeClass("active");
//   });
// });


$(document).ready(function () {
  var swiper = new Swiper(".swiperBanner", {
      slidesPerView: 1, 
      loop: true,
      slideToClickedSlide: false,
      spaceBetween: 30,
      slidesPerGroup: 1,
      effect: "fade",
      autoplay: {
          delay: 4000,
      },
      breakpoints: {
          1000: {
              slidesPerView: 1,
          },
          860: {
              slidesPerView: 1,
          },
          400: {
              slidesPerView: 1,
          },
          200: {
              slidesPerView: 1,
          },
      },
      pagination: {
          el: ".news-pagination",
          dynamicBullets: true,
      },
      navigation: {
          nextEl: ".navNewsBtn .swiper-button-next",
          prevEl: ".navNewsBtn .swiper-button-prev",
      },
  });

  var swiper = new Swiper(".swiperImgDetail", {
      slidesPerView: 1, 
      loop: true,
      slideToClickedSlide: false,
      spaceBetween: 30,
      slidesPerGroup: 1,
      autoplay: {
          delay: 4000,
      },
      breakpoints: {
          1000: {
              slidesPerView: 1,
          },
          860: {
              slidesPerView: 1,
          },
          400: {
              slidesPerView: 1,
          },
          200: {
              slidesPerView: 1,
          },
      },
      pagination: {
          el: ".detail-pagination",
          dynamicBullets: true,
      },
      navigation: {
          nextEl: ".navDetailBtn .swiper-button-next",
          prevEl: ".navDetailBtn .swiper-button-prev",
      },
  });

  var swiper = new Swiper(".swiperRelatedProduct", {
      slidesPerView: 4, 
      loop: true,
      slideToClickedSlide: false,
      spaceBetween: 30,
      slidesPerGroup: 1,
      autoplay: {
          delay: 4000,
      },
      breakpoints: {
          1000: {
              slidesPerView: 4,
          },
          860: {
              slidesPerView: 3,
          },
          400: {
              slidesPerView: 2,
          },
          200: {
              slidesPerView: 1,
          },
      },
  });

  var query = window.location;
  var url = new URL(query);
  var type = url.searchParams.get("type");
  
  if (type == 'register') {
    $('#loginView').hide()
    $('#registerView').show()
    
  } else {
    $('#loginView').show()
    $('#registerView').hide()
    
  }
})

$(".searchPanel").click(function(){
  // $('body').css('overflow', 'hidden');
  $(".containerSearch").css('visibility', 'visible').css('opacity', '1');
  $(".closeSearch").fadeIn(500);
});

$(".closeSearch").click(function(){
  // $('body').css('overflowY', 'scroll');
  $(".containerSearch").css('visibility', 'hidden').css('opacity', '0');
});

// $(".containerSearch").click(function(){
//   // $('body').css('overflowY', 'scroll');
//   $(".containerSearch").css('visibility', 'hidden').css('opacity', '0');
// });

// ACCORDION SIDE BAR
let accHeading = document.querySelectorAll(".menu-down");
let accPanel = document.querySelectorAll(".submenu");

// for (let i = 0; i < accHeading.length; i++) {
//     accHeading[i].onclick = function() {
//         if (this.nextElementSibling.style.maxHeight) {
//            hidePanels();
//         } else {
//            showPanel(this);
//         } 
//     };
// }

for (let i = 0; i < accHeading.length; i++) {
  accHeading[i].addEventListener("mouseover", function () {
      showPanel(this);
  });

  accHeading[i].addEventListener("mouseout", function () {
      hidePanels();
  });
}

// function showPanel(elem) {
//   hidePanels();
//   elem.classList.add("active");
//   elem.nextElementSibling.style.maxHeight = elem.nextElementSibling.scrollHeight + "px";
// }
// function hidePanels() {
//   for (let i = 0; i < accPanel.length; i++) {
//       accPanel[i].style.maxHeight = null;
//       accHeading[i].classList.remove("active");
//   }
// }

function showPanel(elem) {
  hidePanels(); // Remove `active` from all
  const arrowLink = elem.querySelector(".arrow-link"); // Find `.arrow-link` inside `.menu-down`
  if (arrowLink) {
    arrowLink.classList.add("active"); // Add `active` class to `.arrow-link`
  }
  const submenu = elem.querySelector(".submenu"); // Find `.submenu` inside `.menu-down`
  if (submenu) {
    submenu.style.maxHeight = submenu.scrollHeight + "px"; // Expand the submenu
  }
}

function hidePanels() {
  for (let i = 0; i < accPanel.length; i++) {
      accPanel[i].style.maxHeight = null; // Collapse all submenus
  }
  const arrowLinks = document.querySelectorAll(".arrow-link");
  for (let i = 0; i < arrowLinks.length; i++) {
      arrowLinks[i].classList.remove("active"); // Remove `active` class from all `.arrow-link`
  }
}