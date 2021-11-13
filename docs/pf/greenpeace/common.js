
  //메뉴바 드롭다운
  $(function () {
    var $firstMenu = $("#gnb"),
      $section = $("#gnb");
    $firstMenu
      .mouseenter(function () {
        $(this).addClass("whitebg");
        $("#gnb > .con > .menu-bar > .menu-bar__menu > li > a").addClass("black");
        $("#gnb .con > .menu-bar > .menu-bar__util-box > .menu-bar__sns a").addClass("black");
        $("#gnb .con > .menu-bar > .menu-bar__util-box > .menu-bar__lang a").addClass("black");
        $("#gnb .con > .menu-bar > .menu-bar__util-box i").addClass("black");
      })    
      $firstMenu
      .mouseenter(function () {
        $(this).addClass("whitebg");
        $("#gnb > .con > .menu-bar > .menu-bar__menu > li > a").addClass("black");
        $("#gnb .con > .menu-bar > .menu-bar__util-box > .menu-bar__sns a").addClass("black");
        $("#gnb .con > .menu-bar > .menu-bar__util-box > .menu-bar__lang a").addClass("black");
        $("#gnb .con > .menu-bar > .menu-bar__util-box i").addClass("black");
      })    
  });
  


const Timeline__Section1__1 = gsap.timeline({
    scrollTrigger: {
      trigger: "#main-visual",
      markers: false,
      start: "+=10 top",
      end: "top top",
      onEnter: function () {
        // 위에서 아래로 내려오다가 트리거 엘리먼트의 정수리를 발견했을 때
        $("#gnb").addClass("whitebg");
        $("#gnb > .con > .menu-bar > .menu-bar__menu > li > a").addClass("black");
        $("#gnb .con > .menu-bar > .menu-bar__util-box > .menu-bar__sns a").addClass("black");
        $("#gnb .con > .menu-bar > .menu-bar__util-box > .menu-bar__lang a").addClass("black");
        $("#gnb .con > .menu-bar > .menu-bar__util-box i").addClass("black");
      },
      onEnterBack: function () {
        // 위에서 아래로 내려오다가 트리거 엘리먼트의 정수리를 발견했을 때
        $("#gnb").removeClass("whitebg");
        $("#gnb .menu-bar__menu > li > a").removeClass("black");
        $("#gnb .menu-bar__util-box a").removeClass("black");
        $("#gnb .menu-bar__util-box i").removeClass("black");
      }
    }
  });


  $(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 500) {
            $('#MOVE_TOP_BTN').fadeIn();
        } else {
            $('#MOVE_TOP_BTN').fadeOut();
        }
    });
    
    $("#MOVE_TOP_BTN").click(function() {
        $('html, body').animate({
            scrollTop : 0
        }, 400);
        return false;
    });
});
