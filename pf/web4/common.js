$('.gnb__menu-bar_nav nav > ul > li').click(function(){
    let index = $(this).index();
    $('.gnb__menu').attr('data-sel-index', index);
  });

  
  $('.gnb__menu-bar_nav > ul > li').mouseenter(function(){
    let index = $(this).index();
    $('.gnb__menu').attr('data-sel-index', index);
  });
  
  $('.gnb__menu-bar_nav > ul > li').mouseleave(function(){
    $('.gnb__menu').attr('data-sel-index', '');
  });