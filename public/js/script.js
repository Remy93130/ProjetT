$(document).ready(function(){
	$('.smooth-scroll').on('click', function() {
		var page = $(this).attr('href');
		var speed = 750;
		$('html, body').animate( { scrollTop: $(page).offset().top }, speed );
	});
});