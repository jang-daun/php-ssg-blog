$(".slide-wrapper").children("div:gt(0)").hide();
var current = 0;

setInterval(function(){
    var next = (current+1) % 3;
    $(".slide-wrapper").find("div").eq(current).fadeOut();
    $(".slide-wrapper").find("div").eq(next).fadeIn();
    current = next; 
},3000);



const Timeline__Section3__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".line",
      start: "-=10000 top",
      end: "bottom top"
    }
  });
  
  Timeline__Section3__1.from(
    ".down",
    {
      opacity: 0,
      y: -30,
      duration: 0.5
    },
  );
  Timeline__Section3__1.from(
    ".thelist",
    {
      opacity: 0,
      x: 30,
      duration: 0.5
    },
  );