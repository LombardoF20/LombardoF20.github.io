// JS
import './js/'

// SCSS
import './assets/scss/main.scss'

// CSS (example)
// import './assets/css/main.css'

var swiper = new Swiper('.swiper-container', {
  lazyLoading: true,
  slidesPerView: 4,
  spaceBetween: 23,
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

var swiper = new Swiper('.swiper-container-object', {
  lazyLoading: true,
  slidesPerView: 3,
  spaceBetween: 70,
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next-object',
    prevEl: '.swiper-button-prev-object',
  },
});
var swiper = new Swiper('.swiper-container-catalog', {
  lazyLoading: true,
  slidesPerView: 4,
  spaceBetween: 32,
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next-catalog',
    prevEl: '.swiper-button-prev-catalog',
  },
});
var swiper = new Swiper('.swiper-container-complementary', {
  lazyLoading: true,
  slidesPerView: 4,
  spaceBetween: 32,
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next-complementary',
    prevEl: '.swiper-button-prev-complementary',
  },
});
