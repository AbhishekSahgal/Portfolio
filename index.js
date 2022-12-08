
//swiper js code

 new Swiper(".mySwiper", {
  slidesPerView: 2,
  spaceBetween: 30,
  autoplay:{
    delay:2500,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});


// -----------------------------------responsive navbar-----------------------------------------

const mobile_nav = document.querySelector(".mobile-navbar-btn");
const headerElem = document.querySelector(".header");

mobile_nav.addEventListener('click' , () => {
  headerElem.classList.toggle("active");
});


// // swiper 

// const myJsmedia = (widthSize) => {
//   if(widthSize.matches){
//      new Swiper(".mySwiper", {
//       slidesPerView: 1,
//       spaceBetween: 30,
//       autoplay:{
//         delay:2500,
//       },
//       pagination: {
//         el: ".swiper-pagination",
//         clickable: true,
//       },
//     }); 
//   }else{
//     new Swiper(".mySwiper", {
//       slidesPerView: 2,
//       spaceBetween: 30,
//       autoplay:{
//         delay:2500,
//       },
//       pagination: {
//         el: ".swiper-pagination",
//         clickable: true,
//       },
//     });
//   }
// }

// const widthSize = window.matchMedia("(max-width:780px)");

// widthSize(widthSize);

// widthSize.addEventListener("change", myJsmedia);


// ========================================
function myFunction(widthSize) {
  if (widthSize.matches) {
      // If media query matches
      const swiper = new Swiper(".swiper", {
          slidesPerView: 1,
          spaceBetween: 30,
          autoplay: {
              delay: 2500,
              disableOnInteraction: false,
          },

          pagination: {
              el: ".swiper-pagination",
              clickable: true,
          },
      });
  } else {
      const swiper = new Swiper(".swiper", {
          slidesPerView: 2,
          spaceBetween: 30,
          autoplay: {
              delay: 2500,
              disableOnInteraction: false,
          },
          pagination: {
              el: ".swiper-pagination",
              clickable: true,
          },
      });
  }
}

const widthSize = window.matchMedia("(max-width: 780px)");
// Call listener function at run time
myFunction(widthSize);
// Attach listener function on state changes
widthSize.addEventListener(myFunction);



// dark theme
var icon = document.getElementById("icon");

icon.onclick = function(){
  document.body.classList.toggle("dark-theme");
  if(document.body.classList.contains("dark-theme")){
    icon.src = "images/icon/sun.png";
  }else{
    icon.src = "images/icon/moon.png";
  }
}




let themeswitch = document.querySelector('.themeswitch');
let body = document.querySelector('body');
themeswitch.onclick = function(){
  themeswitch.classList.toggle('active');
  body.classList.toggle('dark');
}



