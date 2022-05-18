import '@fancyapps/fancybox';

// Parallax dos produtos na páginas /produtos
const widthScreen = $(window).width();

if (widthScreen > 991 ){

    var winScrollTop=0;

    $.fn.is_on_screen = function(){    
        var win = $(window);
        var viewport = {
            top : win.scrollTop(),
            left : win.scrollLeft()
        };
        //viewport.right = viewport.left + win.width();
        viewport.bottom = viewport.top + win.height();

        var bounds = this.offset();
        //bounds.right = bounds.left + this.outerWidth();
        bounds.bottom = bounds.top + this.outerHeight();

        return (!(viewport.bottom < bounds.top || viewport.top > bounds.bottom));
    };

    function parallax() { 
    var scrolled = $(window).scrollTop();
    $('.prod-left, .prod-right').each(function(){ 
    
        if ($(this).is_on_screen()) {	
            var firstTop = $(this).offset().top; 
            var $span = $(this).find('.prod-img');
            var moveTop = (firstTop-winScrollTop)*0.15 //speed;
            $span.css("top",moveTop+'px');
        }
        
    });
    }

    $(window).scroll(function(e){
    winScrollTop = $(this).scrollTop();
    parallax();
    });
      
};

// Makes gallery from products looping infinite
$.fancybox.defaults.loop = true;
