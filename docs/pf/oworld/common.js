$(".menu-bar__menu-box > ul > li").mouseover(function(){
    $(".menu-bar__menu-box > ul > li > ul").stop().slideDown();
});
$(".menu-bar__menu-box > ul > li").mouseleave(function(){
    $(".menu-bar__menu-box > ul > li > ul").stop().slideUp();
});

$(".menu-bar__menu-box > ul > li").mouseover(function(){
    $(".menu-background").stop().slideDown();
});
$(".menu-bar__menu-box > ul > li").mouseleave(function(){
    $(".menu-background").stop().slideUp();
});

