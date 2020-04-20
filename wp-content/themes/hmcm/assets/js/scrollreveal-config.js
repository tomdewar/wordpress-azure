	'use strict';

	// Changing the defaults
	window.sr = ScrollReveal({
		reset: true
	});

	/**
	 * GLOBAL
	 */
	sr.reveal(
		'.section-header .section-header__title',
		{
			duration: 2000,
			origin: 'bottom',
			delay: 100,
			distance: '45px',
			opacity: 0,
			scale: 1,
			easing: 'ease-in-out',
			reset: false,
		}
	);

	sr.reveal(
		'.section-header p',
		{
			duration: 2000,
			origin: 'bottom',
			delay: 200,
			distance: '45px',
			opacity: 0,
			scale: 1,
			easing: 'ease-in-out',
			reset: false,
		}
	)


	/**
	 * HOMEPAGE
	 */
	// Section Hero
	sr.reveal(
		'.home-header .home-header__title',
		{
			duration: 2000,
			origin: 'top',
			delay: 100,
			distance: '45px',
			opacity: 0,
			scale: 1,
			easing: 'ease-in-out',
			reset: false,
		}
	);

	sr.reveal(
		'.home-header .btn',
		{
			duration: 2000,
			origin: 'bottom',
			delay: 150,
			distance: '45px',
			opacity: 0,
			scale: 1,
			easing: 'ease-in-out',
			reset: false,
		}
	);

	/**
	 * DATA WORK
	 */
	sr.reveal(
		'.section-data-work',
		{
			duration: 2000,
			origin: 'bottom',
			distance: '45px',
			opacity: 0,
			easing: 'ease-in-out',
			reset: false,
			scale: 0,
		},
		450
	);

	/**
	 * HOME DIVIDE ONE
	 */
	sr.reveal( 
		'.home-divide-one .section-header__title',
		{
			duration: 2000,
			origin: 'left',
			delay: 100,
			distance: '45px',
			opacity: 0,
			scale: 1,
			easing: 'ease-in-out',
			reset: false,
		}
	);

	sr.reveal(
		'.home-divide-one .section-header__image',
		{
			duration: 2000,
			origin: 'left',
			delay: 100,
			distance: '45px',
			opacity: 0,
			scale: 1,
			easing: 'ease-in-out',
			reset: false,
		}
	);

	sr.reveal(
		'.home-divide-one .section-content p',
		{
			duration: 2000,
			origin: 'left',
			distance: '45px',
			opacity: 0,
			easing: 'ease-in-out',
			reset: false,
			scale: 0
		},
		350
	);

	// BRAND
	sr.reveal(
		'.section-brand-homepage .brand-slider__wrapper',
		{
			duration: 2000,
			origin: 'bottom',
			distance: '45px',
			opacity: 0,
			easing: 'ease-in-out',
			reset: false,
			scale: 0
		}
	);