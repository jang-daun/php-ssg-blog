
const Timeline__Section3__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-3",
      start: "-=180 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section3__1.from(
    ".section-3 .contents",
    {
      opacity: 0,
      y: 30,
      duration: 0.45
    },
  );

  const Timeline__Section4__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-4",
      start: "-=150 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section4__1.from(
    ".section-4 .contents",
    {
      opacity: 0,
      y: 30,
      duration: 0.45
    },
  );


  
  const Timeline__Section5__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-5",
      start: "-=150 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section5__1.from(
    ".section-5 .contents",
    {
      opacity: 0,
      scale:0,
      duration: 0.45
    },
  );


  
  const Timeline__Section6__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-6",
      start: "-=150 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section6__1.from(
    ".section-6 .contents",
    {
      opacity: 0,
      x: -50,
      duration: 0.45
    },
  );

  const Timeline__Section7__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-7",
      start: "-=150 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section7__1.from(
    ".section-7 .contents",
    {
      opacity: 0,
      x: 50,
      duration: 0.45
    },
  );