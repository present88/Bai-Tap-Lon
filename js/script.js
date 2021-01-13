$(window).scroll(function(){
	$('#navpage').toggleClass('scrolled', $(this).scrollTop() > 500);
});
$(document).ready(function () {
  $(window).on("scroll", function () {
    $(".progress").each(function (index, progress) {
      var progressBar = $(progress).find(".progress-bar");
      var progressPercent = parseInt($(progressBar).attr("data-progress"));
      if ($(window).scrollTop() > $(progress).offset().top - 550) {
        $(progressBar)
          .css("width", progressPercent + "%")
          .text(progressPercent + "%");
      }
    });
  });
});
$('#menu').onePageNav({
	currentClass: 'active',
	changeHash: false,
	scrollSpeed: 750,
	scrollThreshold: 0.5,
	filter: '',
	easing: 'swing',
});