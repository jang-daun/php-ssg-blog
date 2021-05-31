//메뉴바 드롭다운
$(function () {
    var $firstMenu = $(".section-1 .menu-box nav > ul > li:nth-of-type(2), .section-1 .menu-box nav > ul > li:nth-of-type(3)"),
      $section = $(".section-1");
  
    $firstMenu
      .mouseenter(function () {
        $section.stop().animate({ height: "130px" }, 250);
      })
      .mouseleave(function () {
        $section.stop().animate({ height: "91px" }, 250);
      });
  });