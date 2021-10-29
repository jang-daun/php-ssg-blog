const Timeline__Section1__1 = gsap.timeline({
    scrollTrigger: {
      trigger: "#event-section",
      start: "-=480 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section1__1.from(
    ".moon",
    {
      opacity: 0,
      y:50,
      duration: 2
    },
    "-=.5"
  );
  const Timeline__Section2__1 = gsap.timeline({
    scrollTrigger: {
      trigger: "#event-section",
      start: "-=480 center",
      end: "bottom top"
    }
  });
  Timeline__Section2__1.from(
    ".ghost1",
    {
      opacity: 0,
     x:-50,
      duration: 1
    },
  );
  const Timeline__Section2__2 = gsap.timeline({
    scrollTrigger: {
      trigger: "#event-section",
      start: "-=480 center",
      end: "bottom top"
    }
  });
  Timeline__Section2__2.from(
    ".ghost2",
    {
      opacity: 0,
     x:50,
      duration: 1
    },
  );
  const Timeline__Section2__3 = gsap.timeline({
    scrollTrigger: {
      trigger: "#event-section",
      start: "-=480 center",
      end: "bottom top"
    }
  });
  Timeline__Section2__3.from(
    ".bat1, .bat2, .bat3",
    {
      opacity: 0,
      scale:1.3,
      duration: 1
    },
  );

  const Timeline__Section4__1 = gsap.timeline({
    scrollTrigger: {
      trigger: "#event-section",
      start: "-=480 center",
      end: "bottom top"
    }
  });
  Timeline__Section4__1.from(
    ".aboutmint",
    {
      opacity: 0,
     x:20,
      duration: 1
    },
  );
  Timeline__Section4__1.from(
    ".title",
    {
      opacity: 0,
     scale:0,
      duration: 1
    },
  );

  const Timeline__Section5__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".halloween",
      start: "-=280 center",
      end: "bottom top"
    }
  });
  Timeline__Section5__1.from(
    ".halloween",
    {
      opacity: 0,
     y:20,
      duration: 0.55
    },
  );
  Timeline__Section5__1.from(
    ".trickormint",
    {
      opacity: 0,
      x:20,
      duration: 0.55
    },
  );
  Timeline__Section5__1.from(
    ".text",
    {
      opacity: 0,
      y:20,
      duration: 0.55
    },
  );

  const Timeline__Section6__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".text",
      start: "-=80 center",
      end: "bottom top"
    }
  });
  Timeline__Section6__1.from(
    ".eventtxt",
    {
      opacity: 0,
      duration: 0.55
    },
  );

  const Timeline__Section7__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".eventtxt",
      start: "-=180 center",
      end: "bottom top"
    }
  });
  Timeline__Section7__1.from(
    ".step",
    {
      opacity: 0,
      y:20,
      duration: 0.8
    },
  );
  const Timeline__Section8__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".step",
      start: "-=180 center",
      end: "bottom top"
    }
  });
  Timeline__Section8__1.from(
    ".step1",
    {
      opacity: 0,
      y:20,
      duration: 0.5
    },
  );
  Timeline__Section8__1.from(
    ".step2",
    {
      opacity: 0,
      y:20,
      duration: 0.5
    },
  );
  Timeline__Section8__1.from(
    ".step3",
    {
      opacity: 0,
      y:20,
      duration: 0.5
    },
  );
  Timeline__Section8__1.from(
    ".tag",
    {
      opacity: 0,
      x:20,
      duration: 0.5
    },
  );

  const Timeline__Section9__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".gift",
      start: "-=180 center",
      end: "bottom top"
    }
  });
  Timeline__Section9__1.from(
    ".gifttxt",
    {
      opacity: 0,
      duration: 0.5
    },
  );

  Timeline__Section9__1.from(
    ".win1",
    {
      opacity: 0,
      rotateY:-180,
      duration: 0.55
    },
  );
  Timeline__Section9__1.from(
    ".win2",
    {
      opacity: 0,
      rotateY:-180,
      duration: 0.55
    },
  );
  Timeline__Section9__1.from(
    ".win3",
    {
      opacity: 0,
      rotateY:-180,
      duration: 0.55
    },
  );