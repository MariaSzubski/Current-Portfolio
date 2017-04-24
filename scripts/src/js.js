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


	// Override nav anchors and scroll to selected item (on index.php)
	var mq = window.matchMedia("handheld, (max-width: 48em)");
	var nav = document.getElementById("nav");
	nav.addEventListener('click', function(e){
		var clicked = e.target || e.srcElement;
		var target = clicked.getAttribute('href');

		if (target != null && target.indexOf('#') > -1){
			e.preventDefault(); // Override anchors

			// Prevent #anchors from being added to browser history (fixes back button issue)
			if(!document.getElementById('idxContainer')){
				window.location.replace("index.php" + target);
			}

			// Scroll to section. No visible animation on handheld devices.
			if(mq.matches){
				$('html, body').animate({
					scrollTop: $(target).offset().top
				}, 0);
			} else{
				$('html, body').animate({
					scrollTop: $(target).offset().top
				}, 250);
			}
		}

		// If device is handheld, correct menu height on after link click
		if (mq.matches){
			var menuHeight = $("#nav").css("max-height");
			if (menuHeight == "340px") {
				$("#nav").fadeOut(0);
				$("#nav").css("max-height", "56px");
			} else {
				$("#nav").css("max-height", "340px");
			}
		}

	}, false);

});
