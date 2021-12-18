const Timeline__Section1__1 = gsap.timeline({
  scrollTrigger: {
    trigger: "#branding",
    start: "-=150 center",
    end: "bottom top"
  }
});
Timeline__Section1__1.from(
  ".branding-page__moon1",
  {
    opacity:0,
    duration: 0.55
  },
  "-=.5"
);
Timeline__Section1__1.from(
  ".branding-page__moon2",
  {
    height: 0,
    opacity:0,
    duration: 0.55
  },
);
Timeline__Section1__1.from(
  ".branding-page__moon3",
  {
    height: 0,
    opacity:0,
    duration: 0.55
  },
);


const Timeline__Section2__1 = gsap.timeline({
  scrollTrigger: {
    trigger: ".branding-page__cont1",
    start: "-=50 center",
    end: "bottom top"
  }
});
Timeline__Section2__1.from(
  ".branding-page__cont1",
  {
    y:20,
    opacity:0,
    duration: 0.55
  },
  "-=.5"
);

const Timeline__Section3__1 = gsap.timeline({
  scrollTrigger: {
    trigger: ".branding-page__cont2",
    start: "-=100 center",
    end: "bottom top"
  }
});
Timeline__Section3__1.from(
  ".branding-page__cont2",
  {
    y:20,
    opacity:0,
    duration: 0.55
  },
  "-=.5"
);

const Timeline__Section4__1 = gsap.timeline({
  scrollTrigger: {
    trigger: ".branding-page__cont3",
    start: "-=130 center",
    end: "bottom top"
  }
});
Timeline__Section4__1.from(
  ".branding-page__cont3",
  {
    y:20,
    opacity:0,
    duration: 0.55
  },
  "-=.5"
);

const Timeline__Section5__1 = gsap.timeline({
  scrollTrigger: {
    trigger: ".branding-page__cont4",
    start: "-=130 center",
    end: "bottom top"
  }
});
Timeline__Section5__1.from(
  ".branding-page__cont4",
  {
    y:20,
    opacity:0,
    duration: 0.55
  },
  "-=.5"
);


const Timeline__Section6__1 = gsap.timeline({
  scrollTrigger: {
    trigger: ".branding-page__cont5",
    start: "-=130 center",
    end: "bottom top"
  }
});
Timeline__Section6__1.from(
  ".branding-page__cont5",
  {
    y:20,
    opacity:0,
    duration: 0.55
  },
  "-=.5"
);