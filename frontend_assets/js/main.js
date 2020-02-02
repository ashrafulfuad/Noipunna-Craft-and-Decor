$ ( function(){
    "use strict";

// nave top js
	var navNavbar = $('nav.navbar');
	var navOffset = navNavbar.offset().top;
	var navright = $('.navbar-right');

	navNavbar.wrap('<div class="nav-wrapper"></div>');
	$('.nav-wrapper').height(navNavbar.outerHeight());
	var windo = $(window);
    windo.on('scroll', function () {
		var scrollPos = windo.scrollTop();

		if (scrollPos >= navOffset) {
			navNavbar.addClass('navbar-fixed-top');
			navright.css('margin-right', '0');
		} else {
			navNavbar.removeClass('navbar-fixed-top');
			navright.css('margin-right', '0px');
		}
	});
    
//nave top js
	var nav_navbar = $('nav.navbar'),
        $window = $(window),
        navOffset = nav_navbar.offset().top;

    $('.nav-wrapper').height(nav_navbar.outerHeight());
    
    $('ul.navbar-nav > li > a').on('click', function(){
        $('.navbar-collapse').removeClass('in');
        console.log('test');
    });
    
// banner slider js
  $('.banner-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      arrows: true,
      prevArrow: '.prv-arrow',
      nextArrow: '.nxt-arrow',
      infinite: true,
      speed: 700,
      fade: true,
      cssEase: 'linear',
      autoplaySpeed: 2000,
});
    
// banner2 slider js
  $('.banner2-main').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: false,
      arrows: true,
      prevArrow: '.prv-arrow',
      nextArrow: '.nxt-arrow',
      infinite: true,
      speed: 700,
      fade: true,
      cssEase: 'linear',
      autoplaySpeed: 2000,
});    

// features 2 slider js
  $('.feat-main').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: false,
      arrows: true,
      prevArrow: '.ar1',
      nextArrow: '.ar2',
      autoplaySpeed: 2000,
});
    
// hot deals slider js
$('.deals-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: false,
  arrows: true,
  prevArrow: '.ar3',
  nextArrow: '.ar4',
  autoplaySpeed: 2000,
});
    
// testimonial2 slider js
$('.deals-slider2').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: false,
  arrows: true,
  prevArrow: '.ar5',
  nextArrow: '.ar6',
  autoplaySpeed: 2000,
});    
$('.brand-slider3').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: false,
  arrows: true,
  prevArrow: '.ar8',
  nextArrow: '.ar9',
  centerMode: true,
  centerPadding: 0,
  autoplaySpeed: 2000,
    responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },      
    {
      breakpoint: 481,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 321,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },            
  ]
});
//meanmenu 
    $('nav.mobile-menu').meanmenu({
        meanScreenWidth: '767'
    });
// Featured Filter js
    $(".filter-button").on('click', function(){
    var value = $(this).attr('data-filter');

    if(value == "all")
    {
        $('.filter').show('1000');
    }
    else
    {
        $(".filter").not('.'+value).hide('3000');
        $('.filter').filter('.'+value).show('3000');
    }
    });
    if ($(".filter-button").removeClass("active")) {
    $(this).removeClass("active");
    }
    $(this).addClass("active");
    
// countdown timer js 
$('.coundown_res').countdown('2018/08/02', function(event) {
        var $this = $(this);
        $this.find('#day').html(event.strftime('<span>%D</span>'));
        $this.find('#hour').html(event.strftime('<span>%H</span>'));
        $this.find('#month').html(event.strftime('<span>%M</span>'));
        $this.find('#second').html(event.strftime('<span>%S</span>'));
});
    
// latest products js
 $('.latest-item').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      arrows: true,
      prevArrow: '.prv-arrow2',
      nextArrow: '.nxt-arrow2',
      autoplaySpeed: 2000,
     responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 481,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 321,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
    
// testimonial js
$('.testimonial-main').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: false,
    arrows: true,
    prevArrow: '.prv-arrow3',
    nextArrow: '.nxt-arrow3',
    autoplaySpeed: 2000,
    responsive: [
     {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },    
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
  ]
});
// Counter 
    jQuery('.statistic-counter').counterUp({
        delay: 10,
        time: 2000
    });
    
// brand slider js
  $('.brand-slider').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: false,
      arrows: true,
      prevArrow: '.prv-arrow4',
      nextArrow: '.nxt-arrow4',
      autoplaySpeed: 2000,
      centerMode: true,
      centerPadding: 0,
      responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },      
    {
      breakpoint: 481,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 321,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },            
  ]
});
   
// blog video
    jQuery(function(){
        jQuery("a.bla-1").YouTubePopUp();
        jQuery("a.bla-2").YouTubePopUp( { autoplay: 1 } ); // Disable autoplay
    });
    

});