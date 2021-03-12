
  var swiper = new Swiper('.section-5 .swiper-container', {
    slidesPerView: 1,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.section-5 .swiper-button-next',
      prevEl: '.section-5 .swiper-button-prev',
    },
  });


  const Timeline__Section3__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-1",
      markers: true,
      start: "-=100 top",
      end: "bottom top"
    }
  });
  
  Timeline__Section3__1.from(
    ".section-3 > img:last-of-type",
    {
      y: 20,
      opacity: 0,
      duration: 0.4
    },
  );
  Timeline__Section3__1.from(
    ".section-3 .intro",
    {
      x: -20,
      opacity: 0,
      duration: 0.6
    },
  );

  var swiper = new Swiper('.section-6 .swiper-container', {
    slidesPerView: 4,
    spaceBetween: 40,
    loop:true,
    pagination: {
      el: '.section-6 .swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.section-6 .swiper-button-next',
    },
  });