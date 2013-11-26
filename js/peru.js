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

	var _gaq = _gaq || [];

	$.localScroll({
		duration: 550,
		onBefore: function (e, elem) {
			// _trackEvent(category, action, opt_label, opt_value, opt_noninteraction);
			_gaq.push([ '_trackEvent', 'Local links', e.type, e.toElement.innerText, e.toElement.href  ]);
		}
	});


	$(window).smartresize(function () {
		fitIt();
		fancySetup();
		navSetup();
	});


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