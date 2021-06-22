const Timeline__Section2__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-2",
      start: "+=80 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section2__1.from(
    ".section-3 .contents",
    {
      opacity: 0,
      x:-20,
      duration: 0.5
    },
    "-=.5"
  );


  const Timeline__Section3__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-4",
      start: "+=20 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section3__1.from(
    ".section-4 .card img:nth-of-type(1)",
    {
      opacity: 0,
      x:-20,
      duration: 0.3
    },
    "-=.5"
  );
  Timeline__Section3__1.from(
    ".section-4 .card img:nth-of-type(2)",
    {
      opacity: 0,
      x:-20,
      duration: 0.3
    },
  );
  Timeline__Section3__1.from(
    ".section-4 .card img:nth-of-type(3)",
    {
      opacity: 0,
      x:-20,
      duration: 0.3
    },
  );

  const Timeline__Section4__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-5",
      start: "-=10 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section4__1.from(
    ".section-5 .color",
    {
      opacity: 0,
      y:20,
      duration: 0.5
    },
    "-=.5"
  );


  const Timeline__Section5__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-6",
      start: "+=50 center",
      end: "bottom top",
    }
  });
  
  Timeline__Section5__1.from(
    ".section-6 .txt",
    {
      opacity: 0,
      x:-30,
      duration: 0.5
    },
    "-=.5"
  );


  
  const Timeline__Section6__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-8",
      start: "+=50 center",
      end: "bottom top",
    }
  });
  
  Timeline__Section6__1.from(
    ".section-8 .visual-1 > div:nth-of-type(2)",
    {
      opacity: 0,
      x:30,
      duration: 0.4
    },
    "-=.5"
  );
  Timeline__Section6__1.from(
    ".section-8 .visual-2 > div:nth-of-type(2)",
    {
      opacity: 0,
      x:30,
      duration: 0.4
    },

  );

  Timeline__Section6__1.from(
    ".section-8 .visual-3 > div:nth-of-type(2)",
    {
      opacity: 0,
      x:30,
      duration: 0.4
    },

  );
  Timeline__Section6__1.from(
    ".section-8 .service > div:nth-of-type(2)",
    {
      opacity: 0,
      x:30,
      duration: 0.4
    },

  );

  Timeline__Section6__1.from(
    ".section-8 .product > div:nth-of-type(2)",
    {
      opacity: 0,
      x:30,
      duration: 0.4
    },

  );
