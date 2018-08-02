$(document).ready(function () {
	"use strict";

	/*==================================
* Author        : "ThemeSINE"
* Template Name : Zombiz HTML Template
* Version       : 1.0
==================================== */




	/*=========== TABLE OF CONTENTS ===========
1. Scroll To Top 
2. hcsticky 
3. Counter
4. owl carousel
5. vedio player
======================================*/

	// 1. Scroll To Top 
	$(window).on('scroll', function () {
		if ($(this).scrollTop() > 600) {
			$('.return-to-top').fadeIn();
		} else {
			$('.return-to-top').fadeOut();
		}
	});
	$('.return-to-top').on('click', function () {
		$('html, body').animate({
			scrollTop: 0
		}, 1500);
		return false;
	});


	// 2 . hcsticky 

	$('#menu').hcSticky();


	// 3. counter
	$(window).on('load', function () {
		$('.counter').counterUp({
			delay: 10,
			time: 3000
		});
	});


	// 4. owl carousel


	$('.play').on('click', function () {
		owl.trigger('play.owl.autoplay', [1000])
	})
	$('.stop').on('click', function () {
		owl.trigger('stop.owl.autoplay')
	})


  // Events Carousel Start
	$('#up-events').owlCarousel({
		items: 1,
		margin: 20,
		loop: true,
		smartSpeed: 1000,
		autoplay: true,
		autoplayHoverPause: false,
		responsive: {
			500: {
				items: 1
			},
			768: {
				items: 1
			},
			1024: {
				items: 1
			},
			1440: {
				items: 1
			},
			1366: {
				items: 1
			},
			2560: {
				items: 1
			}
		}
	});


	$('.play').on('click', function () {
		owl.trigger('play.owl.autoplay', [1000])
	})
	$('.stop').on('click', function () {
		owl.trigger('stop.owl.autoplay')
	})

	$('#past-events').owlCarousel({
		items: 1,
		margin: 20,
		loop: true,
		smartSpeed: 1000,
		autoplay: true,
		autoplayHoverPause: false,
		responsive: {
			500: {
				items: 1
			},
			768: {
				items: 1
			},
			1024: {
				items: 1
			},
			1440: {
				items: 1
			},
			1366: {
				items: 1
			},
			2560: {
				items: 1
			}
		}
	});

	// Events Carousel End


	$('.play').on('click', function () {
		owl.trigger('play.owl.autoplay', [1000])
	})
	$('.stop').on('click', function () {
		owl.trigger('stop.owl.autoplay')
	})



	// 5. vedio player
	$('.vedio-play-icon').magnificPopup({

		type: 'video'

	});

	// 6. animation support

	$(window).load(function () {

		$(".single-slide-item-content h2, .single-slide-item-content p").removeClass("animated fadeInUp").css({
			'opacity': '0'
		});
		$(".single-slide-item-content button").removeClass("animated fadeInLeft").css({
			'opacity': '0'
		});
	});

	$(window).load(function () {

		$(".single-slide-item-content h2, .single-slide-item-content p").addClass("animated fadeInUp").css({
			'opacity': '0'
		});
		$(".single-slide-item-content button").addClass("animated fadeInLeft").css({
			'opacity': '0'
		});

	});


	// 6. Smooth Scroll spy

	// $('.header-area').sticky({
	//    topSpacing:0
	// });

	//=============

	$('li.smooth-menu a').bind("click", function (event) {
		event.preventDefault();
		var anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top - -1
		}, 1200, 'easeInOutExpo');
	});

	$('body').scrollspy({
		target: '.navbar-collapse',
		offset: 0
	});

	$('.event-past-link').on("click", function () {
		$(".event-past-link").addClass("selected");
		$(".event-up-link").removeClass("selected");
		$("#up-events").addClass("hide");
		$("#past-events").removeClass("hide");
	});
	$('.event-up-link').on("click", function () {
		$(".event-up-link").addClass("selected");
		$(".event-past-link").removeClass("selected");
		$("#past-events").addClass("hide");
		$("#up-events").removeClass("hide").fadeIn(3000);
	});

});