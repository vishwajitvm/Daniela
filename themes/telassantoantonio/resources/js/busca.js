$('form[data-action="form-busca"]').submit( function(e) {
    e.preventDefault();

    console.log('foi');
    $('input[data-action="input-busca"]').trigger('keyup');
});

$('input[data-action="input-busca"]').keyup( function(e) {
    e.preventDefault();

    console.log('foi input');
    enviaFormulario( $(this).val() );
});

function enviaFormulario( busca ) {

    $.ajax({
        url: '/',
        data: { q: busca },
        type: 'POST',
        success: function( response ) {
            console.log;(response);
        },
        error: function( error ) {
            console.log('erro');
        }
    })
}