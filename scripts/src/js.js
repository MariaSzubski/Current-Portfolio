var senseSpeed = 5;
var previousScroll = 0;
$(window).scroll(function(event){
   var scroller = $(this).scrollTop();
   if (scroller-senseSpeed > previousScroll){
      $("#navA").filter(':not(:animated)').fadeOut(250);
   } else if (scroller+senseSpeed < previousScroll) {
      $("#navA").filter(':not(:animated)').fadeIn(250);
   }
   previousScroll = scroller;
});
