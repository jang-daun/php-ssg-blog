//영수증 뽑기

const Timeline__Section1__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".paper",
      markers: false,
      start: "-=320 10%",
      end: "bottom top"
    }
  });
  
  Timeline__Section1__1.from(
    ".paper > img ",
    {
      height: 0,
      duration: 1
    },
    "-=1"
  );
  
  Timeline__Section1__1.from(".part ", {
    opacity: 0,
    duration: 1
  });
  
  //타이핑
  var typingBool = false;
  var typingIdx = 0;
  var liIndex = 0;
  var liLength = $(".typing-txt>ul>li").length;
  
  // 타이핑될 텍스트를 가져온다
  var typingTxt = $(".typing-txt>ul>li").eq(liIndex).text();
  typingTxt = typingTxt.split(""); // 한글자씩 자른다.
  if (typingBool == false) {
    // 타이핑이 진행되지 않았다면
    typingBool = true;
    var tyInt = setInterval(typing, 100); // 반복동작
  }
  
  function typing() {
    if (typingIdx < typingTxt.length) {
      // 타이핑될 텍스트 길이만큼 반복
      $(".typing").append(typingTxt[typingIdx]); // 한글자씩 이어준다.
      typingIdx++;
    } else {
      //한문장이끝나면
      //다음문장으로.. 마지막문장이면 다시 첫번째 문장으로
      if (liIndex >= liLength - 1) {
        liIndex = 0;
      } else {
        liIndex++;
      }
  
      //다음문장을 타이핑하기위한 셋팅
      typingIdx = 0;
      typingBool = false;
      typingTxt = $(".typing-txt>ul>li").eq(liIndex).text();
  
      //다음문장 타이핑전 1초 쉰다
      clearInterval(tyInt);
      setTimeout(function () {
        $(".typing").html("");
        tyInt = setInterval(typing, 200);
      }, 1000);
    }
  }
  
  //section-1
  
  const Timeline__Section2__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-1",
      markers: false,
      start: "top center",
      end: "bottom top"
    }
  });
  
  Timeline__Section2__1.from(
    ".section-1 .section-1__custom > img",
    {
      scale: 0,
      duration: 0.55
    },
    "-=.5"
  );
  
  Timeline__Section2__1.from(".section-1 .section-1__me > img", {
    scale: 0,
    duration: 0.55
  });
  Timeline__Section2__1.from(".section-1 .section-1__txt", {
    y: 100,
    opacity: 0,
    duration: 0.55
  });
  
  Timeline__Section2__1.to(".section-1 .section-1__price", {
    opacity: 1,
    duration: 0.5
  });
  
  //section-2
  
  const Timeline__Section3__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-2",
      markers: false,
      start: "-=150 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section3__1.from(
    ".section-2 .section-2__intro",
    {
      y: 100,
      opacity: 0,
      duration: 0.55
    },
    "-=.5"
  );
  
  Timeline__Section3__1.from(".section-2 .section-2__product > img", {
    x: -100,
    opacity: 0,
    duration: 0.55
  });
  
  Timeline__Section3__1.to(".section-2 .section-2__price", {
    opacity: 1,
    duration: 0.5
  });
  
  //section-3
  
  const Timeline__Section4__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-3",
      markers: false,
      start: "-=150 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section4__1.from(
    ".section-3 .section-3__title",
    {
      y: 50,
      opacity: 0,
      duration: 0.55
    },
    "-=.5"
  );
  
  Timeline__Section4__1.from(".section-3 .section-3__intro", {
    x: -50,
    opacity: 0,
    duration: 0.55
  });
  
  Timeline__Section4__1.to(".section-3 .section-3__price", {
    opacity: 1,
    duration: 0.5
  });
  
  //section-4
  
  const Timeline__Section5__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-4",
      markers: false,
      start: "-=150 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section5__1.from(
    ".section-4 .section-4__title",
    {
      x: -50,
      opacity: 0,
      duration: 0.55
    },
    "-=.5"
  );
  
  Timeline__Section5__1.from(".section-4 .section-4__intro", {
    y: 50,
    opacity: 0,
    duration: 0.55
  });
  
  Timeline__Section5__1.to(".section-4 .section-4__price", {
    opacity: 1,
    duration: 0.5
  });
  
  //section-5
  
  const Timeline__Section6__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-5",
      markers: false,
      start: "-=150 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section6__1.from(
    ".section-5 .section-5__title > img",
    {
      opacity: 0,
      duration: 0.5
    },
    "-=.5"
  );
  
  Timeline__Section6__1.from(".section-5 .section-5__intro", {
    x: 50,
    opacity: 0,
    duration: 0.55
  });
  
  Timeline__Section6__1.to(".section-5 .section-5__price", {
    opacity: 1,
    duration: 0.5
  });
  
  //section-6
  
  const Timeline__Section7__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-6",
      markers: false,
      start: "-=100 center",
      end: "bottom top"
    }
  });
  
  
  Timeline__Section7__1.from(".section-6 .section-6__title > img", {
    x: 50,
    opacity: 0,
    duration: 0.55
  },"-=.5");
  Timeline__Section7__1.from(
    ".section-6 .section-6__intro",
    {
      y: 50,
      opacity: 0,
      duration: 0.55
    });
  
  
  Timeline__Section7__1.to(".section-6 .section-6__price", {
    opacity: 1,
    duration: 0.5
  });
  
  //section-7
  
  const Timeline__Section8__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-7",
      markers: false,
      start: "-=100 center",
      end: "bottom top",
      onEnter: function () {
        // 위에서 아래로 내려오다가 트리거 엘리먼트의 정수리를 발견했을 때
        $(".section-7__img img:last-of-type").removeClass("opacity");
      }
    }
  });
  
  const Timeline__Section8__2 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-7",
      markers: false,
      start: "+=100 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section8__2.from(
    ".section-7 .section-7__txt",
    {
      opacity: 0,
      y: 50,
      duration: 0.55
    },
    "-=.5"
  );
  
  Timeline__Section8__2.from(".section-7 .section__contents", {
    opacity: 0,
    x: -50,
    duration: 0.55
  });
  
  //section-8
  
  const Timeline__Section9__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-8",
      markers: false,
      start: "-=100 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section9__1.from(
    ".section-8 .section-8__txt",
    {
      opacity: 0,
      x: -50,
      duration: 0.55
    },
    "-=.5"
  );
  
  Timeline__Section9__1.from(".section-8 .section__introduce", {
    opacity: 0,
    y: 50,
    duration: 0.55
  });
  
  //section-9
  
  const Timeline__Section10__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-9",
      markers: false,
      start: "-=100 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section10__1.from(
    ".section-9 .section-9__txt",
    {
      opacity: 0,
      x: -50,
      duration: 0.55
    },
    "-=.5"
  );
  
  Timeline__Section10__1.from(".section-9 .section__introduce", {
    opacity: 0,
    y: 50,
    duration: 0.55
  });
  
  Timeline__Section10__1.from(".section-9 .section-9__plus > img:first-of-type", {
    opacity: 0,
    y: 50,
    duration: 0.55
  });
  
  Timeline__Section10__1.from(".section-9 .section-9__plus > img:last-of-type", {
    opacity: 0,
    x: -50,
    duration: 0.55
  });
  
  //section-10
  
  const Timeline__Section11__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-10",
      markers: false,
      start: "-=100 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section11__1.from(
    ".section-10 .section-10__txt",
    {
      opacity: 0,
      x: -50,
      duration: 0.55
    },
    "-=.5"
  );
  
  Timeline__Section11__1.from(".section-10 .section__introduce", {
    opacity: 0,
    y: 50,
    duration: 0.55
  });
  
  Timeline__Section11__1.from(
    ".section-10 .section-10__img > img:first-of-type",
    {
      opacity: 0,
      y: 50,
      duration: 0.4
    }
  );
  
  Timeline__Section11__1.from(
    ".section-10 .section-10__img > img:nth-of-type(2)",
    {
      opacity: 0,
      y: 50,
      duration: 0.4
    }
  );
  Timeline__Section11__1.from(
    ".section-10 .section-10__img > img:nth-of-type(3)",
    {
      opacity: 0,
      y: 50,
      duration: 0.4
    }
  );
  
  //section-11
  
  const Timeline__Section12__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-11",
      markers: false,
      start: "-=100 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section12__1.from(
    ".section-11 .section-11__txt",
    {
      opacity: 0,
      x: -50,
      duration: 0.55
    },
    "-=.5"
  );
  
  Timeline__Section12__1.from(".section-11 .section__introduce", {
    opacity: 0,
    y: 50,
    duration: 0.55
  });
  
  Timeline__Section12__1.from(".section-11 .section-11__img > img", {
    opacity: 0,
    x: 50,
    duration: 0.55
  });
  
  //section-12
  
  const Timeline__Section13__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-12",
      markers: false,
      start: "-=100 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section13__1.from(
    ".section-12 .section-12__txt",
    {
      opacity: 0,
      x: -50,
      duration: 0.55
    },
    "-=.5"
  );
  
  Timeline__Section13__1.from(".section-12 .section__introduce", {
    opacity: 0,
    y: 50,
    duration: 0.55
  });
  
  Timeline__Section13__1.from(".section-12 .section-12__img > img", {
    opacity: 0,
    scale: 0,
    duration: 0.6
  });
  
  Timeline__Section13__1.to(".section-12 .section-12__price", {
    opacity: 1,
    duration: 0.5
  });
  
  //total
  
  $(function () {
    var count0 = 85000;
  
    timeCounter();
  
    function timeCounter() {
      id0 = setInterval(count0Fn, 0.23445);
  
      function count0Fn() {
        count0++;
        if (count0 > 92590) {
          clearInterval(id0);
        } else {
          $(".number").eq(0).text(count0);
        }
      }
    }
  });
  
  //thx
  
  const Timeline__Section14__1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".bottom-bar",
      markers: false,
      start: "+=100 center",
      end: "bottom top"
    }
  });
  
  Timeline__Section14__1.from(
    ".last-bar .last-bar__content > img",
    {
      opacity: 0,
      scale:0,
      duration: 0.6
    },
  );