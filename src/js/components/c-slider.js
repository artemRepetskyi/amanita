// core version + navigation, pagination modules:
import Swiper from 'swiper/bundle';

import 'swiper/swiper-bundle.css';

var galleryThumbs = new Swiper('.gallery-thumbs', {
  spaceBetween: 5,
  slidesPerView: 'auto',
  // loop: true,
    autoHeight: true,
  freeMode: true,
  loopedSlides: 5, //looped slides should be the same
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
    direction: 'vertical',
    lazy: true,

});
var galleryTop = new Swiper('.gallery-top', {
  lazy: true,
  spaceBetween: 10,
  // loop: false,
  loopedSlides: 5, //looped slides should be the same
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  thumbs: {
    swiper: galleryThumbs,
  },
  pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
      },
});