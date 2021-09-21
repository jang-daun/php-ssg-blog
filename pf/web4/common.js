
  
  $('.gnb__menu-bar_nav > ul > li').mouseenter(function(){
    let index = $(this).index();
    $('.gnb__menu').attr('data-sel-index', index);
  });
  
  $('.gnb__menu-bar_nav > ul > li').mouseleave(function(){
    $('.gnb__menu').attr('data-sel-index', '');
  });

 





  var tabBtn = $(".main-bord_btn > .btn");
  var tabCont = $(".main-bord_contents");
  
  tabCont.hide().eq(0).show();
  
  tabBtn.click(function(e){
      e.preventDefault();
      var target = $(this);
      var index = target.index();
      tabBtn.removeClass("active");
      target.addClass("active");
      tabCont.css("display", "none");
      tabCont.eq(index).css("display", "flex");
  });
  