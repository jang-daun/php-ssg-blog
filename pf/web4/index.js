var kaSwiper2 = new Swiper('#ka-swiper2', {
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    type: 'progressbar',
  },
  navigation: {
    nextEl: '.week-book .button-next',
    prevEl: '.week-book .button-prev',
  },
});


/*var kaSwiper2 = new Swiper ('#ka-swiper2', {
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
*/


$(function () {
  $(".week-book .btn__lang").click(function () {
    $(this).addClass("week-active");
  });
});
$(function () {
  $(".week-book .btn__lang").click(function () {
    $(this).removeClass("week-active");
  });
});



$(function () {
  $(".new-book .btn__lang").click(function () {
    $(this).addClass("new-book");
  });
});
$(function () {
  $(".new-book .btn__lang").click(function () {
    $(this).removeClass("new-book");
  });
});





$(".banner .slidelist").children("div:gt(0)").hide();
var current = 0;

setInterval(function(){
    var next = (current+1) % 3;
    $(".banner .slidelist").find("div").eq(current).fadeOut();
    $(".banner .slidelist").find("div").eq(next).fadeIn();
    current = next; 
},2000);





$(".banner2 .slidelist").children("div:gt(0)").hide();
var current = 0;

setInterval(function(){
    var next = (current+1) % 3;
    $(".banner2 .slidelist").find("div").eq(current).fadeOut();
    $(".banner2 .slidelist").find("div").eq(next).fadeIn();
    current = next; 
},2000);

