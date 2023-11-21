
var swiper = new Swiper(".slide-content", {
  slidesPerView: 3,
  spaceBetween: 30,
  loop: true,
  centerSlide:'true',
  fade:'true',
  grabCursos:'true',
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    340: {
        slidesPerView: 1,
        spaceBetween: 0,
    },
    520: {
        slidesPerView: 2,
        spaceBetween: 30,
    },
    990: {
        slidesPerView: 3,
        spaceBetween: 30,
    },
    1450: {
        slidesPerView: 4,
        spaceBetween: 30,
    },
},
});
