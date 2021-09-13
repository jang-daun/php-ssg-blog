function mainSlider__init() {
    var swiper = new Swiper(".section-2 > .swiper-container", {
      loop: true,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true
      }
    });
  }
  
  //메뉴바 드롭다운
  $(function () {
    var $firstMenu = $(".section-1 > .menu-box > nav"),
      $section = $(".section-1");
  
    $firstMenu
      .mouseenter(function () {
        $section.stop().animate({ height: "350px" }, 250);
      })
      .mouseleave(function () {
        $section.stop().animate({ height: "60px" }, 250);
      });
  });
  
  // 메뉴 색
  function menu_revert() {
    $(".section-4 > div > .top-bar > .menu-box > nav >  ul > li > a").removeClass(
      "active-color"
    );
  }
  
  function menu__init() {
    $(".section-4 > div > .top-bar > .menu-box > nav >  ul > li > .color1").click(
      function () {
        menu_revert();
        $(
          ".section-4 > div > .top-bar > .menu-box > nav >  ul > li > .color1"
        ).addClass("active-color");
      }
    );
  
    $(".section-4 > div > .top-bar > .menu-box > nav >  ul > li > .color2").click(
      function () {
        menu_revert();
        $(
          ".section-4 > div > .top-bar > .menu-box > nav >  ul > li > .color2"
        ).addClass("active-color");
      }
    );
  }
  
  $(".section-4 > div > .top-bar > .menu-box > nav >  ul > li > .color3").click(
    function () {
      menu_revert();
      $(
        ".section-4 > div > .top-bar > .menu-box > nav >  ul > li > .color3"
      ).addClass("active-color");
    }
  );
  $(".section-4 > div > .top-bar > .menu-box > nav >  ul > li > .color4").click(
    function () {
      menu_revert();
      $(
        ".section-4 > div > .top-bar > .menu-box > nav >  ul > li > .color4"
      ).addClass("active-color");
    }
  );
  
  menu__init();
  
  //food menu
  function foodMenuSlide() {
    var swiper = new Swiper(".section-6 .swiper-container", {
      slidesPerView: 4,
      spaceBetween: 30,
      slidesPerGroup: 4,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".section-6 .swiper-pagination",
        clickable: true
      },
      navigation: {
        nextEl: ".section-6 .button-next",
        prevEl: ".section-6 .button-prev"
      }
    });
  }
  mainSlider__init();
  foodMenuSlide();
  