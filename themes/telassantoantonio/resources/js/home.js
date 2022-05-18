$(document).ready(function (){
    // Declare Carousel jquery object
    var owl = $('.owl-carousel');
  
    // Carousel initialization
    owl.owlCarousel({
        mouseDrag: false,
        loop:false,
        rewind: true,
        margin:0,
        navSpeed:500,
        nav:true,
        autoplay: true,
        items:1,
        navText: false,
        dots: true,
        dotsEach: true,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        autoplayTimeout: 15000,
        onInitialized: startProgressBar,
        onChange: resetProgressBar,
        onChanged: startProgressBar
    });
  
    var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

    $(".banner-fadeLeft").bind(animationEndEvent, function() { $(this).removeClass("banner-fadeLeft") } );
    $(".banner-fadeRight").bind(animationEndEvent, function() { $(this).removeClass("banner-fadeRight") } );

    // add animate.css class(es) to the elements to be animated
    function setAnimation ( _elem, _InOut ) {
        // Store all animationend event name in a string.
        // cf animate.css documentation
        var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

        _elem.each ( function () {
            var $elem = $(this);
            var $animationType = 'animated ' + $elem.data( 'animation-' + _InOut );

            $elem.addClass($animationType).one(animationEndEvent, function () {
                $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
            });
        });
    }

    // Fired before current slide change
    owl.on('change.owl.carousel', function(event) {
        var $currentItem = $('.owl-item', owl).eq(event.item.index);
        var $elemsToanim = $currentItem.find("[data-animation-out]");
        setAnimation ($elemsToanim, 'out');
    });

    // Fired after current slide has been changed
    owl.on('changed.owl.carousel', function(event) {

        if ($('.owl-carousel').find('.owl-item').hasClass('active')){
            $('.owl-item').removeClass('owl-animated-out owl-animated-in fadeOut fadeIn');
        };

        var $currentItem = $('.owl-item', owl).eq(event.item.index);
        var $elemsToanim = $currentItem.find("[data-animation-in]");
        setAnimation ($elemsToanim, 'in');

    })

    document.addEventListener('visibilitychange', function(e) {
        if (document.hidden == true) {
            owl.trigger('stop.owl.autoplay');
            resetProgressBar();
        } else {
            owl.trigger('play.owl.autoplay');
            startProgressBar();
        }
    });

    $('.owl-next').click(function(){

        $('.owl-next').addClass('banner-disabledbutton');
        owl.trigger('stop.owl.autoplay');
        owl.trigger('play.owl.autoplay');
        
        owl.on('translated.owl.carousel', function() {
            $('.owl-next').removeClass('banner-disabledbutton');
        });
    });

    function startProgressBar() {
        if ($(window).width() < 992){
            $('.owl-next').circleProgress({
                value: 1.0,
                size: 40,
                thickness: 2,
                animation: {
                    duration: 15000,
                    easing: 'linear',
                },
                fill: {
                    gradient: ["white"]
                },
            });    
        } else {
            $('.owl-next').circleProgress({
                value: 1.0,
                size: 50,
                thickness: 2,
                animation: {
                    duration: 15000,
                    easing: 'linear',
                },
                fill: {
                    gradient: ["white"]
                },
            });
        }

        $('.owl-next canvas').css({'position' : 'absolute', 'top' : '0', 'left' : '0'});

    }

    function resetProgressBar() {
        if ($(window).width() < 992){
            $('.owl-next').circleProgress({
                value: 0,
                size: 40,
                thickness: 2,
                animation: {
                    duration: 15000,
                    easing: 'linear',
                },
                fill: {
                    gradient: ["white"]
                },
            });    
        } else {
            $('.owl-next').circleProgress({
                value: 0,
                size: 50,
                thickness: 2,
                animation: {
                    duration: 15000,
                    easing: 'linear',
                },
                fill: {
                    gradient: ["white"]
                },
            });
        }
    }

});

// Code to make homeprod-box the same height and width

const widthBox = $('.homeprod-box').width();
const widthScreen = $(window).width();

if (widthScreen < 576) {
    $('.homeprod-box').css('height', widthBox);
}

// Renders homeprod-boxes one after another

const url = window.location.pathname;

if (url === '/') {
    var initialTopOffset = $('.header').offset().top;
    $(window).scroll(function(event) {
        var scroll = $(window).scrollTop();
        // if the top of our browser is inside the section2
        if (scroll + initialTopOffset >= $('.homeprod').offset().top - 300 && scroll + initialTopOffset <= $('.homeprod').offset().top + $('.homeprod').outerHeight()) {
            $(".homeprod-box").each(function(index) {
                $(this).delay(150*index).fadeTo(150, 1);
            });
        }
    });
}

// Function to render the homehistory section text as user scrolls the page



if ($(window).width() >= 992){
    $(window).scroll(function () {

        const height = $(window).height();
        const scrollTop = $(window).scrollTop();

        if( scrollTop >= height ) {
            $('.homehistory').css({
                'opacity': 1.9 - (window.pageYOffset/height)
            });
        } else {

            $('.homehistory').css({
                'opacity': (window.pageYOffset/height)
            });
        }
    });
}