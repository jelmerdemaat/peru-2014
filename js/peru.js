$(window).load(function () {


	$('.no-svg img[src$=".svg"]').each(function (i, svg) {
		var imgsrc = svg.getAttribute('src'),
				newimgsrc = imgsrc.replace(/\.svg/, '.png');
		svg.setAttribute('src', newimgsrc);
	});


	$.localScroll({
		duration: 550,
		onBefore: function (e, elem) {
			// _trackEvent(category, action, opt_label, opt_value, opt_noninteraction);
			// _gaq.push([ '_trackEvent', 'Local links', e.type, e.toElement.innerText, e.toElement.href  ]);
		}
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