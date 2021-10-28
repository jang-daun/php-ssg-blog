
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
  );
