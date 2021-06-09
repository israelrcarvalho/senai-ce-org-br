$(document).ready(function () {

    // Portal da Transparência

    $('#select-estados-transp').change(function () {

        var uf = $(this).val();

        if (!uf) {
            $("#select-cidades-transp").prop("selectedIndex", 0);
            return;
        }

        $.get('get-cidades/' + uf, function (data) {

            $("#select-cidades-transp").html('<option>Carregando...</option>');

           $.each(data, function(index, value) {
               $("#select-cidades-transp").append('<option value="'+value.nome+'">'+value.nome+'</option>');
            });

            $("#select-cidades-transp").removeAttr('disabled');
            $("#select-cidades-transp").focus();
        });


    });

    // ========== Carrega as Unidades do Portal da Transparência ========

    $('#select-unidades-estados').change(function () {

        var uf = $(this).val();
        loader(true);

        $.get('transparencia/contato-nos-estados/' + uf, function (data) {

            var boxUnidade ='' ;
/*
            $.each(data, function(index, value) {

                    boxUnidade += '<div class="box-unidade">' +
                        '<div class="imagem-box">' +
                        '<img src="http://localhost/www1.sfiec.org.br/sites/senai/style/default/imagens/senai-transparencia.png"/>' +
                        '</div>' +
                        '<div class="location">' + '<div class="unit">' + value.nomeUnidade + '</div>' + '</div>' +
                        '<p><strong>Endereço:</strong>' + value.nomeRua + ',' + value.numeroEndereco +
                        ' - ' + value.nomeBairro + ' - ' + value.nomeCidade + '/' + value.uf + '<br/>' +
                        '<strong>Tipo:</strong>' + value.tipoUnidade + '<br/>' +
                        '<strong>Responsável:</strong>' + value.nomeResponsavel + '<br/>' +
                        '<strong>Telefone:</strong>' + value.telefone + '<br/>' +
                        '<strong>Site:</strong>' + value.site + '<br/>' +
                        '<strong>Email:</strong>' + value.email + '<br/>' +
                        '</p>' +
                        '</div>';
            });
            */

            // console.log(tUnidade);

            // $("#divs-unidades").html(boxUnidade);
            $("#divs-unidades").html(data);

        });
    });

    // ----
// Tela de carregamento
    function loader(stats) {
        alert('teste');

        var mask = "<div class='mask'>";
        mask += "<div class='circle'>";
        mask += "<div class='loader'></div>";
        mask += '</div>';
        mask += '</div>';

        if (stats === true) {
            $('body').prepend(mask);
        } else {
            $('.mask').remove();
        }
    }
    //-----

    //Paginação
    $(document).on('click','#pagination-transp-unidades li',function(){
        page ='#page-und-boxes-'+$(this).attr('data-id');
        $('.und-page').hide();
        $(page).fadeIn();
        $('#pagination-transp-unidades li').removeClass('page-ativo');
        $(this).addClass('page-ativo');
    });

//----
    $('.menu-t').on('click', function () {
        $(this).next().slideToggle();
        if ($(this).children().hasClass('play')) {
            $(this).children().removeClass('play').addClass('play-2');
        } else {
            $(this).children().removeClass('play-2').addClass('play');
        }
    });

    $('.resposta').hide();
    $('.resposta:first').show();
    $('.duvida:first').children().removeClass('plus').addClass('minus');
    $('.duvida:first').addClass('atv');
//------
    $('.duvida').on('click', function () {



        //Ícones do Collapse "Dúvidas frequentes"
        if ($(this).hasClass('atv')) {
            $(this).next().fadeOut();
            $(this).removeClass('atv');
            $(this).children().removeClass('minus').addClass('plus');
            return false;
        } else {
            if ($(this).children().hasClass('minus')) {
                $(this).children().removeClass('minus').addClass('plus');
            } else {
                $('.duvida').children().removeClass('minus').addClass('plus');
                $(this).children().removeClass('plus').addClass('minus');
            }
        }
        $('.resposta').fadeOut();
        $('.duvida').removeClass('atv');
        $(this).addClass('atv');
        $(this).next().fadeIn();
    });

    // Estados ativos dos botões
    rl = window.location.pathname.split('/')[window.location.pathname.split('/').length-1];
   document.getElementById( rl ).style.backgroundColor = "#e4e4e4";
//------
});       