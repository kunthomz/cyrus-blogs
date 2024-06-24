jQuery(function($) {
	
	const header = $('.main-h');
	
	$('.t-w').css({
		'transition' : 'all 0.5s ease'
	})
	
	let lastScrollTop = 0;
	$(window).scroll(function() {
		
		let winST = $(this).scrollTop();
		const headerH = header.height();
		
		if ( header.siblings('.t-w').hasClass('__full-height') ) {
			
			if (winST > 20) {
				header.siblings('.t-w').css({
					'height': '200',
					'padding-top' : 0
				});
				
			} else {
				
				if(winST < lastScrollTop) {
					var bannerH = $(window).height() - headerH;
					header.siblings('.t-w').css({
						'height' : bannerH,
						'padding-top' : 0
					});
				}
				lastScrollTop = winST;
				
			}
			
		}
	 	
	});
	
});

var $ = jQuery;
$(document).ready(function(){
    $(".mobile-category-carousel").owlCarousel({
        items: 1, // Number of items to display per page
        loop: true,
        margin: 10,
        dots: true,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
});