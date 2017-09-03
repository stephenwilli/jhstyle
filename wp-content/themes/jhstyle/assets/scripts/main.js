(function ($) {

  // WOW ANIMATIONS

  new WOW().init();

	// ADD CLASS TO NAV ON SCROLL

	$(window).scroll(function() {
		if (($(window).scrollTop() > 70 && $(window).width() > 992 )){
	 		$('.navbar').addClass('scrolled');
	 	}
	 	else {
		 	$('.navbar').removeClass('scrolled');
	 	}

	}); // window.scroll

  // HERO SLIDER
      
    $('#hero-slider').flexslider({
      animation: "fade",
      slideshow: true, // auto play on load
      slideshowSpeed: 5000,
          animationSpeed: 800,
          pauseOnHover: true,
          directionNav: false, //Boolean: Create navigation for previous/next navigation? (true/false)
          controlNav: false, //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
          prevText: "previous",
          nextText: "next"
    });

    $('#issue-slider').flexslider({
      animation: "fade",
      slideshow: true, // auto play on load
      slideshowSpeed: 5000,
          animationSpeed: 800,
          pauseOnHover: true,
          directionNav: false, //Boolean: Create navigation for previous/next navigation? (true/false)
          controlNav: true, //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
          prevText: "previous",
          nextText: "next"
    });


    $('#advertiser-slider').flexslider({
      animation: "slide",
      animationLoop: false,
      itemWidth: 300,
      itemMargin: 5
    });



  // PRELOADER

	$(window).load(function(){
    $('#preloader').fadeOut('slow',function(){$(this).remove();});
	});

  // ISOTOPE GRID

  $(window).load(function(){

    // init Isotope
    var $grid = $('.project-grid').isotope({
      itemSelector: '.project-item',
      layoutMode: 'masonry'
    });
    // filter functions
    var filterFns = {
      // show if number is greater than 50
      numberGreaterThan50: function() {
        var number = $(this).find('.number').text();
        return parseInt( number, 10 ) > 50;
      },
      // show if name ends with -ium
      ium: function() {
        var name = $(this).find('.name').text();
        return name.match( /ium$/ );
      }
    };
    // bind filter button click
    $('.filters-button-group').on( 'click', 'a', function() {
      var filterValue = $( this ).attr('data-filter');
      // use filterFn if matches value
      filterValue = filterFns[ filterValue ] || filterValue;
      $grid.isotope({ filter: filterValue });
    });
    // change is-checked class on buttons
    $('.button-group').each( function( i, buttonGroup ) {
      var $buttonGroup = $( buttonGroup );
      $buttonGroup.on( 'click', 'a', function() {
        $buttonGroup.find('.active').removeClass('active');
        $( this ).addClass('active');
      });
    });
  });


})(jQuery);
