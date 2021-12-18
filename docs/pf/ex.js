
const Timeline__Section1__1 = gsap.timeline({
    scrollTrigger: {
      trigger: "#ex-page",
      start: "-=180 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section1__1.from(
    ".ex-title-img",
    {
      opacity: 0,
      x: -70,
      duration: 1.5
    },
  );


  
const Timeline__Section2__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".youtue",
      start: "-=140 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section2__1.from(
    ".youtueimgimg",
    {
      opacity: 0,
      x: 70,
      duration: 0.65
    },
  );


  
const Timeline__Section3__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".t-story",
      start: "-=180 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section3__1.from(
    ".t-story .tstoryimg img",
    {
      opacity: 0,
      x: -70,
      duration: 0.65
    },
  );

  const Timeline__Section4__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".calender",
      start: "-=140 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section4__1.from(
    ".calenderimg",
    {
      opacity: 0,
      x: 70,
      duration: 0.65
    },
  );

