document.addEventListener('DOMContentLoaded', function () {
	new Splide('#logos-slider', {
		type: 'loop', // Loop through the slides
		perPage: 4,   // Number of slides visible at once
		perMove: 1,   // Slides to move at a time
		autoplay: false, // Enable autoplay
		interval: 3000, // Autoplay interval in ms
		pagination: false, // Disable pagination
		breakpoints: {
			1024: { perPage: 3 },
			768: { perPage: 2 },
			480: { perPage: 1 },
		},
	}).mount();
});
