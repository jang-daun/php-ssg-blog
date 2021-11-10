var swiper = new Swiper('#main-visual .swiper', {
    spaceBetween: 30,
    effect: 'fade',
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
  });



  var swiper = new Swiper('#main-content-2 .swiper', {
    spaceBetween: 30,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });