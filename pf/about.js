const Timeline__Section1__1 = gsap.timeline({
  scrollTrigger: {
    trigger: "#about",
    start: "-=200 center",
    end: "bottom top"
  }
});

Timeline__Section1__1.from(
  ".about-me-cont1",
  {
    opacity: 0,
    x: -50,
    duration: 2
  },
);

const Timeline__Section2__1 = gsap.timeline({
  scrollTrigger: {
    trigger: ".about-me-cont2-1",
    start: "-=200 center",
    end: "bottom top"
  }
});

Timeline__Section2__1.from(
  ".about-me-cont2-1",
  {
    opacity: 0,
    x: 20,
    duration: 0.55
  },
  
  "-=.5"
);

Timeline__Section2__1.from(
  ".about-me-cont2-3",
  {
    opacity: 0,
    x: 20,
    duration: 0.55
  },
);

Timeline__Section2__1.from(
  ".about-me-cont2-4",
  {
    opacity: 0,
    x: 20,
    duration: 0.55
  },
);

Timeline__Section2__1.from(
  ".about-me-cont2-5",
  {
    opacity: 0,
    x: 20,
    duration: 0.55
  },
);

Timeline__Section2__1.from(
  ".about-me-cont2-6",
  {
    opacity: 0,
    x: 20,
    duration: 0.55
  },
);
Timeline__Section2__1.from(
  ".about-me-cont2-7",
  {
    opacity: 0,
    x: 20,
    duration: 0.55
  },
);

const Timeline__Section3__1 = gsap.timeline({
  scrollTrigger: {
    trigger: ".about-love-this",
    start: "-=300 center",
    end: "bottom top"
  }
});

Timeline__Section3__1.from(
  ".about-love-this-cont",
  {
    opacity: 0,
    x: 20,
    duration: 0.55
  },
);

const Timeline__Section4__1 = gsap.timeline({
  scrollTrigger: {
    trigger: ".about-myability",
    start: "-=200 center",
    end: "bottom top"
  }
});

Timeline__Section4__1.from(
  ".about-myability",
  {
    opacity: 0,
    y: 50,
    duration: 0.55
  },
);