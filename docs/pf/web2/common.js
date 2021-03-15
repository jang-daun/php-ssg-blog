//메뉴바 드롭다운
$(function () {
    var $firstMenu = $(".section-1 .menu-box nav"),
      $section = $(".section-1");
  
    $firstMenu
      .mouseenter(function () {
        $section.stop().animate({ height: "400px" }, 250);
      })
      .mouseleave(function () {
        $section.stop().animate({ height: "70px" }, 250);
      });
  });