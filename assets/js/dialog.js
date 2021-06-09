function moveToTop() {
    $('html, body').animate({
        scrollTop: $("a[id=topoform]").offset.top -15
    }, 'slow');
};

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