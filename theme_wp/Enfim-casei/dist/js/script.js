$(document).ready(function(){
	$('.hamburger').click(function() {
		$(this).toggleClass('is-active');
		 if($(".nav-content").hasClass('showMenu')) {
			$(".nav-content").removeClass('showMenu').slideUp('slow');
		} else {
			$(".nav-content").addClass('showMenu').slideDown('slow');	 
	 	}  
	});
	
 	// setInterval(function() {
 	// 	let now = new Date(),
 	// 		wedding = new Date('2018-10-25T12:00:00'),
 	// 		difference = new Date(wedding - now),
 	// 		days = difference.getDay(),
 	// 		hours = difference.getHours(),
 	// 		month = difference.getMonth(),
 	// 		year = difference.getFullYear(),
 	// 		minutes = difference.getMinutes(),
 	// 		seconds = difference.getSeconds();

 	// 		$('.number-days').text(days + (month * 30));
 	// 		$('.number-hours').text(hours);
 	// 		$('.number-minutes').text(minutes);
 	// 		$('.number-seconds').text(seconds);

 	// }, 1000);

// Set the date we're counting down to
var countDownDate = new Date("Jan 6, 2018 20:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
   
  

	$('.number-days').text(days);
	$('.number-hours').text(hours);
	$('.number-minutes').text(minutes);
	$('.number-seconds').text(seconds);

    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);

 	$(".owl-carousel").owlCarousel({
	    autoHeight: true,
	    items:1,
	    nav: true,
	    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>']
 	});

 	function setRadio() {
 		setTimeout(function() {
 			$('.owl-item.active').find($('input:radio')).prop('checked', true);
 		}, 100);
 	}

 	setRadio();

 	$(".owl-carousel").on('changed.owl.carousel', function() {
 		setRadio();
 	});

 	$('.change-dashboard').click(function(e){
 		$('.change-dashboard').removeClass('active');
 		$('.dashboard-view').removeClass('active');
 		$(this).addClass('active');
 		$('.dashboard').find("[data-show='" + $(this).data().menu + "']").addClass('active');
 		// console.log($(this).data().menu);
 		e.preventDefault();
 	});
});