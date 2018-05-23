$(".banner-slideshow > div:gt(0)").hide();

setInterval(function () {
	$('.banner-slideshow > div:first')
		.fadeOut(1000)
		.next()
		.fadeIn(1000)
		.end()
		.appendTo('.banner-slideshow');
}, 3000);