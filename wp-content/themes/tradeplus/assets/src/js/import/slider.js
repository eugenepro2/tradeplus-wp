import Swiper from 'swiper';

new Swiper('.swiper-container', {
  speed: 1000,
  effect: 'fade',
  autoplay: {
    delay: 4000,
  },
  loop: true,
  fadeEffect: {
    crossFade: true
  },
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true
  },
  breakpoints: {
    // when window width is <= 320px
    768: {
      autoHeight: true
    },

  }

});
