$(document).ready(function () {

    // ---------- Formulario Newsletters -------------

    $('#submit-newsletters').click(function () {

        $('div.dialog').css('background-color', '#b31216');
        $('div.dialog').html("<span id='loader'><img src='assets/images/loader2.gif' alt='' /></span>");
        $('div.dialog').fadeIn('');
        $(this).closest('form').submit();
    });

    $('#form-newsletters').validate({

        errorElement: "div",
        errorPlacement: function () {return true;},
        invalidHandler: function (event, validator) {

            var errors = validator.numberOfInvalids();

            if (errors) {

                var message = errors == 1 ? 'Existe erro em 1 campo. Ele foi destacado' : 'Existem erros em ' + errors + ' campos. Eles foram destacados';

                $('div.dialog').css('background-color', '#b31216');
                $('div.dialog').html(message);
                $('div.dialog').fadeIn();

                setTimeout(function () {
                    $('div.dialog').fadeOut(600);
                }, 1900);
            }
        },
        submitHandler: function (form) {

            var dados = $('#form-newsletters').serialize();

            $.ajax({
                type: "POST",
                url: "newsletter",
                data: dados,
                success: function (data) {

                    if (data === 'Enviado com sucesso!') {

                        $('div.dialog').css('background-color', '#4a7715');
                        document.getElementById('form-newsletters').reset();

                        $('div.dialog').html(data);
                        setTimeout(function () {
                            $('div.dialog').fadeOut(600);
                        }, 2100);

                    }

                },
                error: function (data) {

                    var errors = data.responseJSON;

                    $.each(errors, function (index, value) {

                        $('div.dialog').css('background-color', '#b31216');
                        $('div.dialog').html(value[0]);
                        $('div.dialog').fadeIn('fast');

                        setTimeout(function () {
                            $('div.dialog').fadeOut(600);
                        }, 1900);

                    });
                }
            });
        }


    });  // fim form-newsletters submit

    //
}); 