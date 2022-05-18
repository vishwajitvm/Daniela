// Troca de logo baseado na url

const path = window.location.pathname;

if (path === '/') {
    $('.header-logo').attr('src', '/themes/telassantoantonio/assets/images/logo.svg');
} else {
    $('.header-logo').attr('src', '/themes/telassantoantonio/assets/images/logo-dark.svg');
};

// Exibe o menu
$('button[data-action="openBurgerMenu"], .menu-icon').click(function(){
    $("html, body").animate({ scrollTop: 0 }, "slow");
    $('.menu-icon').toggleClass('menu-closeicon');
    $('.menu').toggleClass('menu-active menu-slider');
    $('body').toggleClass("menu-overflow");
});

// Navega até a seção com ID na ancora

// to top right away
if (window.location.hash) scroll(0, 0);
// void some browsers issue
setTimeout(function() {
    scroll(0, 0);
}, 1);

// any position
$(function() {
    // *only* if we have anchor on the url
    if (window.location.hash) {
        // smooth scroll to the anchor id
        setTimeout(function(){
            $('html, body').animate({
                scrollTop: $(window.location.hash).offset().top
            }, 1000);
        }, 1000);
    }
    // your current click function
    $('.footer-link').click(function() {
        $('html, body').animate({
            scrollTop: $($(this).attr('data-hash')).offset().top
        }, 1000);
    });
});