var refreshIcon = $('.form-refreshicon');
refreshIcon.hide();

$('form[data-action="contactForm"]').submit( function(e) {

    e.preventDefault();

    var button = $('button[data-action="submit-ajax"]').hide();

    refreshIcon.show();

    $(this).request('onSend', {
        success: function(data) {

            $('form[data-action="contactForm"]').find('input').val('');
            $('form[data-action="contactForm"]').find('textarea').val('');

            window.location.replace('/sucesso');

        },
        error: function() {

            button.show();

            $('.form-buttonarea').append('<div class="contact-formmsg"><p>Falha no envio do e-mail!</p></div>');

            setTimeout( function() {
                $('p.contact-formmsg').fadeOut('slow');
            }, 6000);

        }
    })
});