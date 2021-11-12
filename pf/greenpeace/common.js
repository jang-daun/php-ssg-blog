const Timeline__Section1__1 = gsap.timeline({
    scrollTrigger: {
      trigger: "body",
      markers: true,
      start: "+=10 top",
      end: "top top",
      onEnter: function () {
        // 위에서 아래로 내려오다가 트리거 엘리먼트의 정수리를 발견했을 때
        $("#gnb").addClass("white");
        $("#gnb .con > .menu-bar > .menu-bar__menu > li > a").addClass("black");
        $("#gnb .con > .menu-bar > .menu-bar__util-box > .menu-bar__sns a").addClass("black");
        $("#gnb .con > .menu-bar > .menu-bar__util-box > .menu-bar__lang a").addClass("black");
      },
      onEnterBack: function () {
        // 위에서 아래로 내려오다가 트리거 엘리먼트의 정수리를 발견했을 때
        $("#gnb").removeClass("white");
        $("#gnb .menu-bar__menu > li > a").removeClass("black");
        $("#gnb .menu-bar__util-box a").removeClass("black");
        $("#gnb .menu-bar__util-box i").removeClass("black");
      }
    }
  });