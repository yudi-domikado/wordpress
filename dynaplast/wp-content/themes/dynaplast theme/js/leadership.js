$(document).ready(function() {
			$('.close-ldesc').click(function(){
				$('.leader-desc, .leader-desc2').stop().slideUp(800);
			});

			$('.leadersection1 .leader-person').click(function() {
				$('.wrap-ldesc-middle, .wrap-ldesc2-middle').fadeOut(300);
				$('.wrap-ldesc-last, .wrap-ldesc2-last').fadeOut(300);
				$('.wrap-ldesc').fadeIn(800);
				$('.leader-arrow').css('left', '4%');
				$('.leader-desc2').stop().slideUp(800);
				$('.leader-desc').stop().slideDown(800);
			});

			$('.leadersection1 .leader-person-middle').click(function() {
				$('.wrap-ldesc, .wrap-ldesc2').fadeOut(300);
				$('.wrap-ldesc-last, .wrap-ldesc2-last').fadeOut(300);
				$('.wrap-ldesc-middle').fadeIn(800);
				$('.leader-arrow').css('left', '39%');
				$('.leader-desc2').stop().slideUp(800);
				$('.leader-desc').stop().slideDown(800);
			});


			$('.leadersection1 .leader-person-last').click(function() {
				$('.wrap-ldesc-middle, .wrap-ldesc2-middle').fadeOut(300);
				$('.wrap-ldesc, .wrap-ldesc2').fadeOut(300);
				$('.wrap-ldesc-last').fadeIn(800);
				$('.leader-arrow').css('left', '74%');
				$('.leader-desc2').stop().slideUp(800);
				$('.leader-desc').stop().slideDown(800);
			});

			$('.leadersection2 .leader-person2').click(function() {
				$('.wrap-ldesc2-middle, .wrap-ldesc-middle').fadeOut(300);
				$('.wrap-ldesc2-last, .wrap-ldesc-last').fadeOut(300);
				$('.wrap-ldesc2').fadeIn(800);
				$('.leader-arrow').css('left', '4%');
				$('.leader-desc').stop().slideUp(800);
				$('.leader-desc2').stop().slideDown(800);
			});

			$('.leadersection2 .leader-person2-middle').click(function() {
				$('.wrap-ldesc2, .wrap-ldesc').fadeOut(300);
				$('.wrap-ldesc2-last, .wrap-ldesc-last').fadeOut(300);
				$('.wrap-ldesc2-middle').fadeIn(800);
				$('.leader-arrow').css('left', '39%');
				$('.leader-desc').stop().slideUp(800);
				$('.leader-desc2').stop().slideDown(800);
			});

			$('.leadersection2 .leader-person2-last').click(function() {
				$('.wrap-ldesc2-middle, .wrap-ldesc-middle').fadeOut(300);
				$('.wrap-ldesc2, .wrap-ldesc').fadeOut(300);
				$('.wrap-ldesc2-last').fadeIn(800);
				$('.leader-arrow').css('left', '74%');
				$('.leader-desc').stop().slideUp(800);
				$('.leader-desc2').stop().slideDown(800);
			});

			$(function() {	
				var $container	= $('.leadersection1, .leadersection2'),
					$articles	= $container.children('article'),
					timeout;
				$articles.on( 'mouseenter', function( event ) {
					var $article	= $(this);
					clearTimeout( timeout );
					timeout = setTimeout( function() {
						if( $article.hasClass('active') ) return false;
						$articles.not( $article.removeClass('blur').addClass('active') )
							.removeClass('active')
							.addClass('blur');
					}, 65 );
				});

				$container.on( 'mouseleave', function( event ) {
					clearTimeout( timeout );
					$articles.removeClass('active blur');
				});

				var $container1	= $('.leadersection1 article, .leadersection2 article'),
					$articles1	= $container1.children('.contentleadp'),
					timeout;
				$articles1.on( 'click', function( event ) {
					var $article1	= $(this);
					clearTimeout( timeout );
					timeout = setTimeout( function() {
						if( $article1.hasClass('active') ) return false;
						$articles1.not( $article1.removeClass('blur').addClass('active') )
							.removeClass('active')
							.addClass('blur');
					}, 65 );
				});

				var $container1	= $('.close-ldesc');
				$container1.on( 'click', function( event ) {
					clearTimeout( timeout );
					$articles1.removeClass('active blur');
				});
			});

});