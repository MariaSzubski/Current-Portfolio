$(function(){
	
	// Animate Nav Bar (Show/Hide)
		var senseSpeed = 5;
		var previousScroll = 0;
		$(window).scroll(function(event){
			var scroller = $(this).scrollTop();
			if (scroller-senseSpeed > previousScroll){
				$("#nav").filter(':not(:animated)').fadeOut(250);
			} else if (scroller+senseSpeed < previousScroll) {
				$("#nav").filter(':not(:animated)').fadeIn(250);
			}
			previousScroll = scroller;
		});


	// Override anchors and scroll to selected item (on home page)
	var nav = document.getElementById("nav");
	nav.addEventListener('click', function(e){
		var clicked = e.target || e.srcElement;
		var target = clicked.getAttribute('href');
		if (target != null && target.indexOf('#') > -1){

			if(document.getElementById('idxContainer')){
				e.preventDefault();
				$('html, body').animate({
				    scrollTop: $(target).offset().top
				}, 250);
			} else {
				e.preventDefault();
				window.location.replace("index.html" + target);
				$('html, body').animate({
				    scrollTop: $(target).offset().top
				}, 250);
			}
		}
	}, false);

});
