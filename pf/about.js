const Timeline__Section1__1 = gsap.timeline({
  scrollTrigger: {
    trigger: ".about_main",
    start: "-=200 center",
    end: "bottom top"
  }
});


Timeline__Section1__1.from(
  ".about_main .about_main__intro_title, .about_main__intro_shape",
  {
    opacity: 0,
    x: -50,
    duration: .65
  },
);
Timeline__Section1__1.from(
  ".about_main__img_stamp",
  {
    opacity: 0,
    x: -50,
    duration: .65
  },
);
Timeline__Section1__1.from(
  ".about_main__intro_cont2",
  {
    opacity: 0,
    y: 50,
    duration: .65
  },
);

Timeline__Section1__1.from(
  ".about_main__intro_cont1",
  {
    opacity: 0,
    x: 50,
    duration: .65
  },
);
Timeline__Section1__1.from(
  ".about_main__intro_cont3",
  {
    opacity: 0,
    x: -50,
    duration: .65
  },
);



const Timeline__Section2__1 = gsap.timeline({
  scrollTrigger: {
    trigger: ".about__mind",
    start: "-=200 center",
    end: "bottom top"
  }
});


Timeline__Section2__1.from(
  ".about__mind .con",
  {
    opacity: 0,
    y: 50,
    duration: .65
  },
);


const Timeline__Section3__1 = gsap.timeline({
  scrollTrigger: {
    trigger: ".about__mind-map",
    start: "+=250 center",
    end: "bottom top"
  }
});


Timeline__Section3__1.from(
  ".about__mind-map .about_content__list_back img",
  {
    opacity: 0,
    y: 30,
    duration: .65
  },
);



$(function(){
  $('.hover-me').mouseenter(function(){
    $('.hover-me-img').css("display", "block");
    $('.hover-me-img2').css("display", "none");
  });
  $('.hover-me').mouseleave(function(){
    $('.hover-me-img').css("display", "none");
    $('.hover-me-img2').css("display", "block");
  });
});