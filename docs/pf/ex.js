
const Timeline__Section1__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".etc__intro",
      start: "-=180 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section1__1.from(
    ".about__youtube .etc_img",
    {
      opacity: 0,
      x: -70,
      duration: 0.65
    },
  );


  
const Timeline__Section2__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".about__t-story",
      start: "-=140 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section2__1.from(
    ".about__t-story .etc_img",
    {
      opacity: 0,
      x: 70,
      duration: 0.65
    },
  );


  
const Timeline__Section3__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".about__subway",
      start: "-=180 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section3__1.from(
    ".about__subway .etc_img",
    {
      opacity: 0,
      x: -70,
      duration: 0.65
    },
  );


  const Timeline__Section4__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".about__calender",
      start: "-=140 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section4__1.from(
    ".about__calender .etc_img",
    {
      opacity: 0,
      x: 70,
      duration: 0.65
    },
  );



  const Timeline__Section5__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".about__sticker",
      start: "-=180 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section5__1.from(
    ".about__sticker .etc_img",
    {
      opacity: 0,
      x: -70,
      duration: 0.65
    },
  );
