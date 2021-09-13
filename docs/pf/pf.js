
const Timeline__Section1__1 = gsap.timeline({
  scrollTrigger: {
    trigger: ".port__section-right",
    start: "-=180 center",
    end: "bottom top"
  }
});

Timeline__Section1__1.from(
  ".port__section-right_img",
  {
    opacity: 0,
    x: 70,
    duration: 0.65
  },
);
