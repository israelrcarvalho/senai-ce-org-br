function moveToTop() {
    $('html, body').animate({
        scrollTop: $("a[id=topoform]").offset.top -15
    }, 'slow');
};


$(document).ready(function () {


    jQuery(function ($) {
        $(".data").mask("99-99-9999");
        $(".fone").mask("(99) 9999-9999");
        $(".celular").mask("(99) 99999-9999");
        $(".rg").mask("99999?9999999999");
        $(".cpf").mask("999999999-99");
        $(".cep").mask("99999-999");
    });


    $('.bt-submit').click(function () {
        $(this).closest('form').submit();
    });

    // =============== ENVIO CONTATO (FALE CONOSCO) =================

    $('#form-contato').validate({

        errorElement: "div",
        errorPlacement: function() {  return true;   },
        invalidHandler: function (event, validator) {
            // 'this' refers to the form
            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = errors == 1
                    ? 'Existe erro em 1 campo. Ele foi destacado'
                    : 'Existem erros em ' + errors + ' campos. Eles foram destacados';

                dialog(message, 'erro');
            }

        },

        submitHandler: function( form ){

            var dados = $( form ).serialize();

            $.ajax({
                type: "POST",
                url: "transparencia/fale-conosco",
                data: dados,
                success: function( data ) {

                    if (data === 'Enviado com sucesso!') {
                        document.getElementById('form-contato').reset();
                        dialog(data, 'ok');
                       // console.log(data);
                    }
                }
                ,
                error: function(data){
                    var errors = data.responseJSON;
                    $.each(errors, function(index, value) {
                        dialog(value[0], 'erro');
                        console.log(data);
                    });
                }
                ,
            });

            return false;
        }

    });

// --------

// --------
    /**
     *
     * @param {type} msg
     * @param {type} status
     * @returns {undefined}
     *
     */
    var dialog = function (msg, status) {

        if (status == 'ok' || status == 'loader') {
            moveToTop();

           // $('html, body').animate({
           //     scrollTop: $("a[id=topoform]").offsetTop -15
           ////     scrollTop: $("a[id=topoform]").offset().top - 15
           //   //  body.animate({scrollTop:0}, '500');
           // }, 'slow');
        }

        if (status === 'ok') {

           // alert('status ok');

            $('div.dialog').css('background-color', '#4a7715');
            // Exibe a div dialog
            $('div.dialog').fadeIn('fast');
            $('div.dialog').html(msg);
        }

        if (status === 'erro') {
            $('div.dialog').css('background-color', '#b31216');
            // Exibe a div dialog
            $('div.dialog').fadeIn('fast');
            $('div.dialog').html(msg);
        }

        if (status === 'loader') {
            $('div.dialog').css('background-color', '#b31216');
            $('div.dialog').fadeIn('fast');
            $('div.dialog').html("<span id='loader'><img src='assets/images/loader2.gif' alt='' /></span>");
            return void(0);
        }

        // Esconde a div dialog
        setTimeout(function () {
            $('div.dialog').fadeOut(600);
        }, 3000);

    };
// --------
});