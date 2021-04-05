function Circle1__init() {
    const circleType = new CircleType($('.circle-6 > .txt').get(0));
  
    // Set the text radius and direction. Note: setter methods are chainable.
    circleType.radius(parseInt($('.circle-6').width() / 2));
    
    setTimeout(function() {
      $('.circle-6').addClass('active');
    }, 1000);
  }
  
  Circle1__init();
  
