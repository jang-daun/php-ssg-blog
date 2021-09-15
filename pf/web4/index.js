

var kaSwiper2 = new Swiper ('#ka-swiper2', {
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    type: 'progressbar',
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  paginationClickable: true,
  slidesPerView: 'auto',
  spaceBetween : 20,
  
  onSlideChangeEnd:function(e){
    kaSwiper2.update(true);
  }
});