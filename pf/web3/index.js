function mainSlide(){
    var swiper = new Swiper('#slide .swiper-container', {
        loop: true,
        effect: 'fade',
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
          }
      });
}


mainSlide();


  //tab
var tabBtn = $(".tab-btn > ul > li");
var tabCont = $(".tab-cont > div");

tabCont.hide().eq(0).show();




function promoSlide() {
    const swiper = new Swiper('.promotion .swiper-container', {
        // Optional parameters
        loop: true,
        // Navigation arrows
        navigation: {
          nextEl: '.promotion .button-next',
          prevEl: '.promotion .button-prev',
        },
        effect: 'fade',
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
          }
      });
  }
  promoSlide();