

var kaSwiper2 = new Swiper ('#ka-swiper2', {
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    type: 'progressbar',
  },
  navigation: {
    nextEl: '.week-book .button-next',
    prevEl: '.week-book .button-prev',
  },
  paginationClickable: true,
  slidesPerView: 'auto',
  spaceBetween : 20,
  
  onSlideChangeEnd:function(e){
    kaSwiper2.update(true);
  }
});



$(function() {                       
  $(".week-book .btn__lang").click(function() { 
    $(this).addClass("week-active");    
  });
});
$(function() {                       
  $(".week-book .btn__lang").click(function() { 
    $(this).removeClass("week-active");    
  });
});



$(function() {                       
  $(".new-book .btn__lang").click(function() { 
    $(this).addClass("new-book");    
  });
});
$(function() {                       
  $(".new-book .btn__lang").click(function() { 
    $(this).removeClass("new-book");    
  });
});