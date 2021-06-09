$(document).ready(function() {


    /* Pesquisa */
    $('#expandir').click(function () {
        if ($("#search").val() == "") {
            $("#search").toggle();
        }
    });
    $("#search").keyup(function () {
        if ($('#search').val() == "") {
            $('#expandir').show();
            $('#buscar').hide();
        } else {
            $('#expandir').hide();
            $('#buscar').show();
        }
    });

});