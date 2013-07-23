$(document).ready(function() {

	$('.service-list:nth-child(3)').css('border', 'none');
	$('.iconer:last-child').addClass('last-child');
  $('.footcompany ul li:first-child').addClass('first-child');
	$('.whatwedo-list:nth-child(4)').css('border-right', 'none');
	$('.iconer:last-child').addClass('last-child');

  // $('input:text[placeholder]').simplePlaceholder({ placeholderClass: "placeholder" });
  // $('textarea[placeholder]').simplePlaceholder({ placeholderClass: "placeholder" });

  // hide #back-top first
  $("#back-top").hide();

  // fade in #back-top
  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 800) {
        $('#back-top').fadeIn();
      } else {
        $('#back-top').fadeOut();
      }
    });

    // scroll body to 0px on click
    $('#back-top a').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 800);
      return false;
    });
  });

});