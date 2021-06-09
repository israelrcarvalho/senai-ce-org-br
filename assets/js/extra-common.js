

var moveToTop = function () {
    $('html, body').animate({
        scrollTop: $("a[id=topoform]").offset().top - 15
    }, 'slow');
};

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
    }

    if (status === 'ok') {
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
        $('div.dialog').html("<span id='loader'><img src='assests/images/loader2.gif' alt='' /></span>");
        return void(0);
    }

    // Esconde a div dialog
    setTimeout(function () {
        $('div.dialog').fadeOut(600);
    }, 3000);

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



    //$('.dialog2').hide();

    $('.dialog2').parent().css('position', 'relative');

    $('.dialog2 .close').click(function () {
        $(this).closest('.dialog2').fadeOut('fast');
    });




    $('.call-dialog2-center').click(function (){
        
        var site = $(this).attr('site');
        var pag_contratar = $(this).attr('pag-contratar');
        $("#form-contratar").children('input[name=site]').val(site);
        $("#form-contratar").children('input[name=pag_contratar]').val(pag_contratar);
        $('.dialog2').fadeIn('fast');
        
    });
    
    


    $('.call-dialog2-relative').click(function () {

        var position = $(this).position();
        $('.dialog2').fadeIn('fast');
        $('.dialog2').offset({top: position.top + $(this).outerHeight(true) + 10, left: position.left});
        var nomeCurso = $(this).attr('curso-nome');
        var site = $(this).attr('site');
        $("#aviseme").children('input[name=curso]').val(nomeCurso);
        $("#aviseme").children('input[name=site]').val(site);
    });



    // -------------- FORM AVISE-ME ----------------------

    $("#aviseme").validate({
        errorPlacement: function (error, element) {
            return true;
        },
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
        submitHandler: function () {

            dialog('', 'loader');

            var dados = $('#aviseme').serialize();

            $.post('pages/view/ajax/send-aviseme.php', dados, function (data) {

                console.log(data);

                if (data === 'Enviado com sucesso!') {

                    document.getElementById('aviseme').reset();
                    //alerta('ok', data, 'form');
                    dialog(data, 'ok');

                } else {
                    //alerta('erro', data, 'form');
                    dialog(data, 'erro');

                }

            });
        }

    });





 // -------------- FORM QUERO CONTRATAR ----------------------

    $("#form-contratar").validate({
        errorPlacement: function (error, element) {
            return true;
        },
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
        submitHandler: function () {

            dialog('', 'loader');

            var dados = $('#form-contratar').serialize();

            $.post('pages/view/ajax/send-quero-contratar.php', dados, function (data) {

                //console.log(data);

                if (data === 'Enviado com sucesso!') {

                    document.getElementById('form-contratar').reset();
                    //alerta('ok', data, 'form');
                    dialog(data, 'ok');

                } else {
                    //alerta('erro', data, 'form');
                    dialog(data, 'erro');

                }

            });
        }

    });









});