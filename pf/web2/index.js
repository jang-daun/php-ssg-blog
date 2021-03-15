$('.section-1').addClass('display');
$('.header').addClass('display');

const Timeline__Section1__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-3",
      markers: false,
      start: "top top",
      end: "-=10 top",
      onEnter: function () {
        // 위에서 아래로 내려오다가 트리거 엘리먼트의 정수리를 발견했을 때
        $(".section-1").addClass("fixed");
        $(".section-1").removeClass("display");
      },
      onEnterBack: function () {
        
        $(".section-1").removeClass("fixed");
        $(".section-1").addClass("display");
      }
    }
  });



$(".section-3 img:nth-of-type(4)").mouseover(function () {
    $(".section-3 img:nth-of-type(3)").css("opacity", "0");
    $(".section-3 img:nth-of-type(5)").css("opacity", "1");
});

$(".section-3 img:nth-of-type(4)").mouseleave(function () {
    $(".section-3 img:nth-of-type(5)").css("opacity", "0");
    $(".section-3 img:nth-of-type(3)").css("opacity", "1");
});


$(".section-4 .outer img:nth-of-type(2)").mouseover(function () {
    $(".section-4 .outer img:first-of-type").css("opacity", "0");
    $(".section-4 .outer img:last-of-type").css("opacity", "1");
});

$(".section-4 .outer img:nth-of-type(2)").mouseleave(function () {
    $(".section-4 .outer img:first-of-type").css("opacity", "1");
    $(".section-4 .outer img:last-of-type").css("opacity", "0");
});


$(".section-4 .dress img:nth-of-type(4)").mouseover(function () {
    $(".section-4 .dress img:nth-of-type(1)").css("opacity", "0");
    $(".section-4 .dress img:nth-of-type(2)").css("opacity", "0");
    $(".section-4 .dress img:nth-of-type(3)").css("opacity", "0");
    $(".section-4 .dress img:nth-of-type(5)").css("opacity", "1");
    $(".section-4 .dress img:nth-of-type(6)").css("opacity", "1");
    $(".section-4 .dress img:nth-of-type(7)").css("opacity", "1");
});

$(".section-4 .dress img:nth-of-type(4)").mouseleave(function () {
    $(".section-4 .dress img:nth-of-type(1)").css("opacity", "1");
    $(".section-4 .dress img:nth-of-type(2)").css("opacity", "1");
    $(".section-4 .dress img:nth-of-type(3)").css("opacity", "1");
    $(".section-4 .dress img:nth-of-type(5)").css("opacity", "0");
    $(".section-4 .dress img:nth-of-type(6)").css("opacity", "0");
    $(".section-4 .dress img:nth-of-type(7)").css("opacity", "0");
});

$(".section-6 .denim").mouseover(function () {
    $(".section-6 .denim > span").css("height", "100%");
    $(".section-6 .denim > span").css("transition", ".4s");
});

$(".section-6 .denim").mouseleave(function () {
    $(".section-6 .denim > span").css("height", "0%");
    $(".section-6 .denim > span").css("transition", ".4s");
});


$(".section-6 .qul").mouseover(function () {
    $(".section-6 .qul > span").css("height", "100%");
    $(".section-6 .qul > span").css("transition", ".4s");
});

$(".section-6 .qul").mouseleave(function () {
    $(".section-6 .qul > span").css("height", "0%");
    $(".section-6 .qul > span").css("transition", ".4s");
});

$(".section-6 .ch").mouseover(function () {
    $(".section-6 .ch > span").css("height", "100%");
    $(".section-6 .ch > span").css("transition", ".4s");
});

$(".section-6 .ch").mouseleave(function () {
    $(".section-6 .ch > span").css("height", "0%");
    $(".section-6 .ch > span").css("transition", ".4s");
});