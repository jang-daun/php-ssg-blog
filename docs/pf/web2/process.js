const Timeline__Section1__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-2",
      markers: ture,
      start: "-=200 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section1__1.from(
    ".section-2 .overview ",
    {
      x: 20,
      opacity: 0,
      duration: 0.55
    },
    "-=.5"
  );
  const Timeline__Section2__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-2",
      markers: ture,
      start: "+=80 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section2__1.from(
    ".section-2 .keyword span:nth-of-type(4), .section-2 .keyword span:nth-of-type(6)",
    {
      opacity: 0,
      scale:0,
      duration: 0.3
    },
    "-=.5"
  );
    
  Timeline__Section2__1.from(
    ".section-2 .keyword span:nth-of-type(3), .section-2 .keyword span:nth-of-type(7)",
    {
      opacity: 0,
      scale:0,
      duration: 0.3
    },
  );
  Timeline__Section2__1.from(
    ".section-2 .keyword span:nth-of-type(2), .section-2 .keyword span:nth-of-type(8)",
    {
      opacity: 0,
      scale:0,
      duration: 0.3
    },
  );
  Timeline__Section2__1.from(
    ".section-2 .keyword span:nth-of-type(1), .section-2 .keyword span:nth-of-type(9)",
    {
      opacity: 0,
      scale:0,
      duration: 0.3
    },
  );

  Timeline__Section2__1.from(
    ".section-2 .stratgy img",
    {
      opacity: 0,
      x: 20,
      duration: .8
    },
  );



  const Timeline__Section3__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-3",
      markers: ture,
      start: "top center",
      end: "bottom top"
    }
  });
  
  Timeline__Section3__1.from(
    ".section-3 .visual",
    {
      opacity: 0,
      x:-20,
      duration: 0.55
    },
    "-=.5"
  );
    
  Timeline__Section3__1.from(
    ".section-3 .gnb",
    {
      opacity: 0,
      x:-20,
      duration: 0.55
    },
  );

 






  const Timeline__Section4__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".contents",
      markers: ture,
      start: "-=150 center",
      end: "bottom top"
    }
  });

  Timeline__Section4__1.from(
    ".section-3 .contents",
    {
      opacity: 0,
      x:-20,
      duration: 0.55
    },
    "-=.5"
  );

  Timeline__Section4__1.from(
    ".section-3 .line",
    {
      opacity: 0,
      height:0,
      duration: 1.4
    },
  );
  Timeline__Section4__1.from(
    ".section-3 .contents-2",
    {
      opacity: 0,
      x:-20,
      duration: 0.55
    },
  );

  Timeline__Section4__1.from(
    ".section-3 .line-2",
    {
      opacity: 0,
      height:0,
      duration: 1.4
    },
  );
  Timeline__Section4__1.from(
    ".section-3 .contents-3",
    {
      opacity: 0,
      x:-20,
      duration: 0.55
    },
  );

  



  const Timeline__Section5__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-4",
      markers: ture,
      start: "-=150 center",
      end: "bottom top"
    }
  });

  Timeline__Section5__1.from(
    ".section-4 .sub1",
    {
      opacity: 0,
      x:-20,
      duration: 0.55
    },
  );
  Timeline__Section5__1.from(
    ".section-4 .sub2",
    {
      opacity: 0,
      x:20,
      duration: 0.55
    },
  );
  Timeline__Section5__1.from(
    ".section-4 .sub3",
    {
      opacity: 0,
      y:20,
      duration: 0.55
    },
  );
  Timeline__Section5__1.from(
    ".section-4 .sub4",
    {
      opacity: 0,
      x:-20,
      duration: 0.55
    },
  );

  Timeline__Section5__1.from(
    ".section-4 .sub5",
    {
      opacity: 0,
      x:20,
      duration: 0.55
    },
  );

  Timeline__Section5__1.from(
    ".section-4 .sub6",
    {
      opacity: 0,
      y:20,
      duration: 0.55
    },
  );
  Timeline__Section5__1.from(
    ".section-4 .sub7",
    {
      opacity: 0,
      y:20,
      duration: 0.55
    },
  );
  Timeline__Section5__1.from(
    ".section-4 .sub8",
    {
      opacity: 0,
      y:20,
      duration: 0.55
    },
  );
