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
  $(".nav-link").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    } 
  });
});
