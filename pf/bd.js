
const Timeline__Section1__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".process__main",
      start: "-=180 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section1__1.from(
    ".process__main .con",
    {
      opacity: 0,
      y: 70,
      duration: 1.2
    },
  );


  const Timeline__Section2__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".process__over_view",
      start: "-=250 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section2__1.from(
    ".process__over_view .con",
    {
      opacity: 0,
      y: 70,
      duration: .65
    },
  );

  Timeline__Section2__1.from(
    ".process__design_concept .con",
    {
      opacity: 0,
      y: 70,
      duration: .65
    },
  );
  Timeline__Section2__1.from(
    ".process__Typo .con",
    {
      opacity: 0,
      y: 70,
      duration: .65
    },
  );


  const Timeline__Section3__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".process__color_system",
      start: "-=180 center",
      end: "bottom top"
    }
  });
  

  Timeline__Section3__1.from(
    ".process__color_system .con",
    {
      opacity: 0,
      x: 70,
      duration: .65
    },
  );


  Timeline__Section3__1.from(
    ".process__logo_system .con",
    {
      opacity: 0,
      x: -70,
      duration: .65
    },
  );


  

  const Timeline__Section4__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".pages_intro",
      start: "-=100 center",
      end: "bottom top"
    }
  });
  

  Timeline__Section4__1.from(
    ".pages_intro__main-page",
    {
      opacity: 0,
      x: 50,
      duration: .65
    },
  );

  Timeline__Section4__1.from(
    ".pages_intro__page_titlejs",
    {
      opacity: 0,
      x: -50,
      duration: .65
    },
  );
  Timeline__Section4__1.from(
    ".pages_intro__about-page .pages_intro__page_img",
    {
      opacity: 0,
      y: 50,
      duration: .65
    },
  );


  const Timeline__Section5__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".pages_intro__port-page",
      start: "-=150 center",
      end: "bottom top"
    }
  });
  

  Timeline__Section5__1.from(
    ".pages_intro__port-pagejs",
    {
      opacity: 0,
      x: 50,
      duration: .65
    },
  );

  Timeline__Section5__1.from(
    ".pages_intro__port-page .pages_intro__page_img",
    {
      opacity: 0,
      y: 50,
      duration: .65
    },
  );


  const Timeline__Section6__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".pages_intro__etc-page",
      start: "-=150 center",
      end: "bottom top"
    }
  });
  

  Timeline__Section6__1.from(
    ".pages_intro__etc-pagejs",
    {
      opacity: 0,
      x: -50,
      duration: .65
    },
  );

  Timeline__Section6__1.from(
    ".pages_intro__etc-page .pages_intro__page_img",
    {
      opacity: 0,
      y: 50,
      duration: .65
    },
  );


  const Timeline__Section7__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".pages_intro__partici-page",
      start: "-=180 center",
      end: "bottom top"
    }
  });
  

  Timeline__Section7__1.from(
    ".pages_intro__partici-page",
    {
      opacity: 0,
      y: 50,
      duration: .65
    },
  );