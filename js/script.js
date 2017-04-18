$(document).ready(function(){
 	$('.hamburger').click(function() {
 		if(!$(this).hasClass('hamburger-exemple')) {
	 		$(this).toggleClass('is-active');
	 		if($(".nav-content").hasClass('showMenu')) {
	 			$(".nav-content").removeClass('showMenu').slideUp('slow');
	 		} else {
	 			$(".nav-content").addClass('showMenu').slideDown('slow');
	 		}
 		} else {
 			if($(this).closest('.nav').find('.nav-exemple').hasClass('showMenu')) {
 				$(this).closest('.nav').find('.nav-exemple').removeClass('showMenu').slideUp('slow');
 			} else {
 				$(".nav-exemple").removeClass('showMenu').slideUp('slow');
				$(this).closest('.nav').find('.nav-exemple').addClass('showMenu').slideDown('slow');
 			}
 		}
 	});

 	setInterval(function() {
 		let now = new Date(),
 			wedding = new Date('2018-10-25T12:00:00'),
 			difference = new Date(wedding - now),
 			days = difference.getDay(),
 			hours = difference.getHours(),
 			month = difference.getMonth(),
 			year = difference.getFullYear(),
 			minutes = difference.getMinutes(),
 			seconds = difference.getSeconds();

 			$('.number-days').text(days + (month * 30));
 			$('.number-hours').text(hours);
 			$('.number-minutes').text(minutes);
 			$('.number-seconds').text(seconds);

 	}, 1000);

 	$(".owl-carousel").owlCarousel({
	    autoHeight: true,
	    items:1
 	});
});

// function closeModal(e) {
// 	console.log(e);
// }

// var element = document.querySelector('.modal-overlay');
// element.addEventListener('click', function(e) {
// 	var target = e.target.className;
// 	closeModal(e);
// });
