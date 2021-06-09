jQuery(function ($) {
    $(".data").mask("99-99-9999");
    $(".fone").mask("(99) 9999-9999");
    $(".celular").mask("(99) 99999-9999");
    $(".rg").mask("99999?9999999999");
    $(".cpf").mask("999999999-99");
    $(".cep").mask("99999-999");
});

$('#preinscricao').validate({

    errorElement: "div",
    errorPlacement: function() {  return true;   },
    invalidHandler: function (event, validator) {

        var errors = validator.numberOfInvalids();
        if (errors) {
            var message = errors == 1
                ? 'Existe erro em 1 campo. Ele foi destacado'
                : 'Existem erros em ' + errors + ' campos. Eles foram destacados';

            dialog(message, 'erro');
        }

    }
});
