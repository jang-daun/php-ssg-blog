

console.clear();

function Fullpage__init() {
  var myFullpage = new fullpage('#fullpage', {
    // verticalCentered:false, // 수직중앙정렬
    anchors: ['section1', 'section2', 'section3', 'section4', 'section5'],
    navigation: true,
    navigationPosition: 'right',
    navigationTooltips: ['no.1 - web', 'no.2 - web', 'no.3 - UI|UX'],
    responsiveWidth: 1100,
    afterResponsive: function(isResponsive){
      console.log(isResponsive);
    }
  });
}

Fullpage__init();

$('#fullpage section:nth-of-type(2)').mouseenter(function(){
  $('.menu-bar ul li a').addClass('white');
});

$('#fullpage section:nth-of-type(2)').mouseleave(function(){
  $('.menu-bar ul li a').removeClass('white');
});

