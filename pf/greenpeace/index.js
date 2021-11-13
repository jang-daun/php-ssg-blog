var swiper = new Swiper('#main-visual .swiper', {
    spaceBetween: 30,
    effect: 'fade',
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
  });


  var swiper = new Swiper('#main-content-2 .swiper', {
    
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });


  var swiper = new Swiper('#main-content-3 .swiper', {
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });



const Timeline__Section5__1 = gsap.timeline({
    scrollTrigger: {
      trigger: "#main-content-1",
      start: "-=100 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section5__1.from(
    "#main-content-1 .campaign__title",
    {
      x: 20,
      opacity:0,
      duration: 0.55
    },
    "-=.5"
  );
  
  const Timeline__Section6__1 = gsap.timeline({
    scrollTrigger: {
      trigger: "#main-content-2",
      start: "-=100 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section6__1.from(
    "#main-content-2 .campaign__title",
    {
      x: 20,
      opacity:0,
      duration: 0.55
    },
    "-=.5"
  );

    
  const Timeline__Section7__1 = gsap.timeline({
    scrollTrigger: {
      trigger: "#main-content-3",
      start: "-=50 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section7__1.from(
    "#main-content-3 .campaign__title",
    {
      x: 20,
      opacity:0,
      duration: 0.55
    },
    "-=.5"
  );


      
  const Timeline__Section8__1 = gsap.timeline({
    scrollTrigger: {
      trigger: "#main-content-4",
      start: "-=100 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section8__1.from(
    "#main-content-4 .campaign__title",
    {
      y: 20,
      opacity:0,
      duration: 0.55
    },
    "-=.5"
  );


        
  const Timeline__Section9__1 = gsap.timeline({
    scrollTrigger: {
      trigger: "#main-content-5",
      start: "-=50 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section9__1.from(
    "#main-content-5 .behavior__box:first-of-type",
    {
      opacity:0,
      height:0,
      duration: 0.55
    },
    "-=.5"
  );

  Timeline__Section9__1.from(
    "#main-content-5 .behavior__box:nth-of-type(2)",
    {
      opacity:0,
      height:0,
      duration: 0.55
    },
  );
  Timeline__Section9__1.from(
    "#main-content-5 .behavior__box:nth-of-type(3)",
    {
      opacity:0,
      height:0,
      duration: 0.55
    },
  );
  Timeline__Section9__1.from(
    "#main-content-5 .behavior__box:nth-of-type(4)",
    {
      opacity:0,
      height:0,
      duration: 0.55
    },
  );

  const Timeline__Section10__1 = gsap.timeline({
    scrollTrigger: {
      trigger: "#main-content-6",
      start: "-=100 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section10__1.from(
    "#main-content-6 .campaign__title",
    {
      y: 20,
      opacity:0,
      duration: 0.55
    },
    "-=.5"
  );
  Timeline__Section10__1.from(
    "#main-content-6 .partici__content",
    {
      y: 20,
      opacity:0,
      duration: 0.55
    },
    "-=.5"
  );
