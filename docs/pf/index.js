
const Timeline__Section1__1 = gsap.timeline({
    scrollTrigger: {
      trigger: "#main-page",
      start: "-=180 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section1__1.from(
    ".main-page__slogan2",
    {
      opacity: 0,
      y: 20,
      duration: 1.6
    },
  );
