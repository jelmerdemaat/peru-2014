$(window).load(function () {

	var $fancyImages = $('.fancy-image'),
			$nav = $('nav');

	var	scrollTop,
			navOffsetTop;

	$('.no-svg img[src$=".svg"]').each(function (i, svg) {
		var imgsrc = svg.getAttribute('src'),
				newimgsrc = imgsrc.replace(/\.svg/, '.png');
		svg.setAttribute('src', newimgsrc);
	});

	function fitIt () {
		$('.goals h2').fitText(0.65, {
			minFontSize: '37px',
			maxFontSize: '60px'
		});
	}

	fitIt();

	function fancySetup () {
		$fancyImages.each(function (i, obj) {
			var $img = $(obj).children('img'),
					offsetTop = $img.offset().top,
					imgHeight = $img.outerHeight();

			// $img.attr('data-top', offsetTop).parent().css({ height: imgHeight });

			imagesLoaded($img, function (){
				offsetTop = $img.offset().top,
				imgHeight = $img.outerHeight();

				$img.attr('data-top', offsetTop).parent().css({ height: imgHeight });

				$(window).trigger('scroll');
			});
		});
	};

	fancySetup();

	function navSetup () {
		navOffsetTop = $nav.offset().top;
	}

	navSetup();

	function fixNav () {
		// if(navOffsetTop < scrollTop) {
		// 	$nav.addClass('fixed');
		// } else {
		// 	$nav.removeClass('fixed');
		// }
	}

	fixNav();

	var $objects = {};

	$(window).scroll(function(scrollevent){
		$fancyImages.each(function(i, obj) {
			var $img = $(obj).children('img'),
					offsetTop = $img.attr('data-top'),
					fixedOrNot = scrollTop > offsetTop ? true : false;

			scrollTop = $(window).scrollTop();

			// $objects[i] = {"scrollTop": scrollTop, "offsetTop": offsetTop, "fixed?": fixedOrNot };

			if(offsetTop < scrollTop) {
				$img.addClass('fancy-fixed');
			} else {
				$img.removeClass('fancy-fixed');
			}
		});

		// console.clear();
		// console.table($objects);

		fixNav();
	});

	$.localScroll({
		duration: 550
	});


	$(window).smartresize(function () {
		fitIt();
		fancySetup();
		navSetup();
	});


	// Tracking hashes
	// http://stackoverflow.com/questions/4811172/is-it-possible-to-track-hash-links-like-pages-with-google-analytics

	$(window).hashchange( function(){
	    _gaq.push(['_trackPageview',location.pathname + location.search  + location.hash]);
	})


}); // doc.ready



// usage: log('inside coolFunc',this,arguments);
// http://paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/

window.log = function (){
	log.history = log.history || [];   // store logs to an array for reference
	log.history.push(arguments);
	if(this.console){
		console.log( Array.prototype.slice.call(arguments) );
	}
};