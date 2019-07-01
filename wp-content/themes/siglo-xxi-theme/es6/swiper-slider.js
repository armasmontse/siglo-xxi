var swiper = new Swiper('.home__citas', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 6000,
        disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
});

var swiper = new Swiper('.filosofia__slider', {
    slidesPerView: 3,
    breakpoints: {
        620:  {
        slidesPerView: 1,
        },
    },
    loop: true,
    spaceBetween: 20,
    centeredSlides: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: true,
    },
    pagination: {
    el: '.swiper-pagination',
    clickable: true,
    },

});
