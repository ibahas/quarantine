$(document).ready(function(){
    var rtl = false;
        if($("html").attr("lang") == 'ar'){
             rtl = true;
        }
    /*header-fixed*/
    $(window).scroll(function(){
            
        if ($(window).scrollTop() >= 200) {
            $('#header').addClass('fixed-header');
        }
        else {
            $('#header').removeClass('fixed-header');
        }
              
    });

    $('.scroll, .mmenu a').on('click', function () {
        
        $('html, body').animate({
           
            scrollTop: $('#' + $(this).data('value')).offset().top
           
        }, 1000);
        
        $("body,html").removeClass('menu-toggle');
        
        $(".hamburger").removeClass('active');
        
    });

	/*open menu*/
    $(".hamburger").click(function(){
        $("body,html").addClass('menu-toggle');
        $(".hamburger").addClass('active');
    });
    $(".m-overlay").click(function(){
        $("body,html").removeClass('menu-toggle');
        $(".hamburger").removeClass('active');
    });

	var owl = $('#homeSlider');

        owl.on('initialized.owl.carousel change.owl.carousel',function(elem){
            var current = elem.item.index;
            $(elem.target).find(".owl-item").eq(current).find(".to-animate").removeClass('fadeInUp animated');
            $(elem.target).find(".owl-item").eq(current).find(".to-animate2").removeClass('slideInUp animated');
        });
       
        owl.on('initialized.owl.carousel changed.owl.carousel',function(elem){
            window.setTimeout(function(){
                var current = elem.item.index;
                $(elem.target).find(".owl-item").eq(current).find(".to-animate").addClass('fadeInUp animated');
                $(elem.target).find(".owl-item").eq(current).find(".to-animate2").addClass('slideInUp animated');
            }, 400);
        });
	    owl.owlCarousel({
	            items: 1,
	            loop: true,
	            margin: 0,
	            responsiveClass: true,
	            nav: true,
	            dots: true,
                rtl:rtl,
	            smartSpeed: 500,
	            autoplay: false,
	            autoplayTimeout: 5000,
	            autoplayHoverPause: true,
	            animateOut: 'fadeOut',
	            animateIn: 'fadeIn',
	            navText:['<i class="zmdi zmdi-long-arrow-right"></i>',
            	'<i class="zmdi zmdi-long-arrow-left"></i>'],
	    });

    initialize_owl($('#owl1b'));
    
    $('a[href="#ad-tab1b"]').on('shown.bs.tab', function () {
        initialize_owl($('#owl1b'));
    }).on('hide.bs.tab', function () {
        destroy_owl($('#owl1b'));
    });

    $('a[href="#ad-tab2b"]').on('shown.bs.tab', function () {
        initialize_owl($('#owl2b'));
    }).on('hide.bs.tab', function () {
        destroy_owl($('#owl2b'));
    });

    $('a[href="#ad-tab3b"]').on('shown.bs.tab', function () {
        initialize_owl($('#owl3b'));
    }).on('hide.bs.tab', function () {
        destroy_owl($('#owl3b'));
    });

    $('a[href="#ad-tab4b"]').on('shown.bs.tab', function () {
        initialize_owl($('#owl4b'));
    }).on('hide.bs.tab', function () {
        destroy_owl($('#owl4b'));
    });


function initialize_owl(el) {
    el.owlCarousel({
            loop:false,
            margin:30,
            rtl:rtl,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                },
                500:{
                    items:2,
                },
                767:{
                    items:2,
                },
                992:{
                    items:3,
                }

            },
            dots:true,
            nav:true,
            navText:['<i class="zmdi zmdi-long-arrow-right"></i>',
            '<i class="zmdi zmdi-long-arrow-left"></i>'],
            autoplay:true
    });
}

function destroy_owl(el) {
    el.owlCarousel('destroy');
}

})