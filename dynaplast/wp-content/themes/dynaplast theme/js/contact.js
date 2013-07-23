$(document).ready(function(){
	$('.select-product, .select-quantity, .select-technology').dropkick();
	$('#check1, #check2').checkbox();

	$(function(){

		$.fn.fancyRadio = function(){
			return $(this).each(function(){
				var p = $(this),
					container = $('<span class="radio-container"/>'),
					radio = $('<span class="radio"/>');

				p.find('input[type="radio"]').wrap(container);
				p.find('span.radio-container').append(radio);
				p.find('input:checked').parent()
										.find('span.radio').addClass('selected');

				p.find('input[type="radio"]').on('click',function(){
					p.find('span.selected').removeClass('selected');
					$(this).parent().find('span.radio').addClass('selected');
				});
			});
		};

		$('p.radio').fancyRadio();
	});
});