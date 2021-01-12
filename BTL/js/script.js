$(window).scroll(function(){
	$('#navpage').toggleClass('scrolled', $(this).scrollTop() > 500);
});