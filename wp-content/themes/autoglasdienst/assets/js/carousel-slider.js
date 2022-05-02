//
// carousel-slider.js
//

$(document).ready(function(){
	
	// Initialize all div with carousel class
	var carousels = bulmaCarousel.attach('.hero-carousel', {
		  autoplay: true,
		  slidesToScroll: 1,
		  slidesToShow: 1,
		  navigation: true,
		  navigationKeys: true,
		  infinite: false,
		  loop: true,
		  effect: 'fade',
		  duration: '1800',
		  autoplaySpeed: '8000',
	});
	
	
	// Loop on each carousel initialized
	for(var i = 0; i < carousels.length; i++) {
		// Add listener to  event
		carousels[i].on('before:show', state => {
			console.log(state);
		});
	}
	
	// Access to bulmaCarousel instance of an element
	var element = document.querySelector('#carousel-slider');
	if (element && element.bulmaCarousel) {
		// bulmaCarousel instance is available as element.bulmaCarousel
		element.bulmaCarousel.on('before-show', function(state) {
			console.log(state);
		});
	}
	
});