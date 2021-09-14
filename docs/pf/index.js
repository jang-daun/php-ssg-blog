
const Timeline__Section1__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".main-page",
      start: "-=180 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section1__1.from(
    ".fade-in-box1",
    {
      opacity: 0,
      x: 30,
      duration: 0.55
    },
  );

    
  Timeline__Section1__1.from(
    ".fade-in-box2",
    {
      opacity: 0,
      x: 30,
      duration: 0.55
    },
  );

    
  Timeline__Section1__1.from(
    ".fade-in-box3",
    {
      opacity: 0,
      x: 30,
      duration: 0.55
    },
  );

  Timeline__Section1__1.from(
    ".fade-in-box4",
    {
      opacity: 0,
      x: 30,
      duration: 0.55
    },
  );



