var swiper = new Swiper(".section-2 .swiper-container", {
    spaceBetween: 30,
    loop: true,
    effect: "fade",
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    },
    navigation: {
      nextEl: ".section-2 .swiper-button-next",
      prevEl: ".section-2 .swiper-button-prev"
    },
    autoplay: {
      delay: 2000,
      disableOnInteraction: false
    }
  });
  
  var swiper = new Swiper(".section-4 .swiper-container", {
    slidesPerView: 3,
    spaceBetween: 140,
    slidesPerGroup: 3,
    loop: true,
    autoplay: {
      delay: 3200,
      disableOnInteraction: false
    },
    navigation: {
      nextEl: ".section-4 .swiper-button-next",
      prevEl: ".section-4 .swiper-button-prev"
    }
  });



  var swiper = new Swiper('.section-5 .swiper-container', {
    slidesPerView: 5,
    spaceBetween: 30,
    slidesPerGroup: 5,
    loopFillGroupWithBlank : true,
    autoplay: {
        delay: 3200,
        disableOnInteraction: false
      },
    loop : true, 
    navigation: {
        nextEl: ".section-5 .swiper-button-next",
      }
  });

  var menu = ['지구를 위한 즐거운 변화', '어스앤러 버추얼 달리기', '기후를 위한 커다란 승리','시민들과 함께 이룬 성과']
  var swiper = new Swiper('.section-6 .swiper-container', {
    spaceBetween: 30,
    loop:true,
    effect: 'fade',
    autoplay: {
      delay: 2400,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      renderBullet: function (index, className) {
        const font = '<i style="" class="fas fa-chevron-right"></i>';
        return '<span class="' + className + '">' + (menu[index]) + font + '</span>';
      },
    },
    navigation: {
      nextEl: '.section-6 .swiper-button-next',
      prevEl: '.section-6 .swiper-button-prev',
    },
  });



  var swiper = new Swiper('.section-7 .swiper-container', {
    slidesPerView: 4,
    spaceBetween: 40,
    loop:true,
    pagination: {
      el: '.section-7 .swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.section-7 .swiper-button-next',
    },
  });