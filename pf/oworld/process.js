const Timeline__Section1__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".box1",
      start: "-=200 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section1__1.from(
    ".box1 .cont",
    {
      x: 20,
      opacity:0,
      duration: 0.55
    },
    "-=.5"
  );
  Timeline__Section1__1.from(
    ".box2 .cont",
    {
      x: 20,
      opacity:0,
      duration: 0.55
    },
  );
  Timeline__Section1__1.from(
    ".box3 .cont",
    {
      x: 20,
      opacity:0,
      duration: 0.55
    },
  );
  


  const Timeline__Section2__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".box4",
      start: "-=200 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section2__1.from(
    ".box4 .cont",
    {
      x: 20,
      opacity:0,
      duration: 0.55
    },
    "-=.5"
  );

  const Timeline__Section3__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".box5",
      start: "-=200 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section3__1.from(
    ".box5 .cont div",
    {
      x: 20,
      opacity:0,
      duration: 0.55
    },
    "-=.5"
  );
  Timeline__Section3__1.from(
    ".box5 .cont img",
    {
      y: 20,
      opacity:0,
      duration: 0.55
    },
  );

  
  const Timeline__Section4__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".box7",
      start: "-=200 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section4__1.from(
    ".box7 .main1",
    {
      y: 20,
      opacity:0,
      duration: 0.55
    },
  );

  const Timeline__Section5__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".box7",
      start: "-=100 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section5__1.from(
    ".box7 .main2",
    {
      y: 20,
      opacity:0,
      duration: 0.55
    },
  );

  const Timeline__Section6__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".box8",
      start: "-=100 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section6__1.from(
    ".box8 .img-box1",
    {
      x: -50,
      opacity:0,
      duration: 0.55
    },
  );

  const Timeline__Section7__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".box8",
      start: "-=100 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section7__1.from(
    ".box8 .img-box2",
    {
      x: 50,
      opacity:0,
      duration: 0.55
    },
  ); 

  
  const Timeline__Section10__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".box10",
      start: "-=100 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section10__1.from(
    ".box10 img",
    {
      y: 20,
      opacity:0,
      duration: 0.55
    },
  ); 