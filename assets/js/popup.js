$(document).ready(function() {
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();

		$('#mask').css({'width':maskWidth,'height':maskHeight});

		//$('#mask').fadeIn(1000);
		$('#mask').fadeTo("fast",0.8);

		//Get the window height and width
		//var winH = $(window).height();
		var winW = $(window).width();

		//$('#dialog2').css('top',  winH/2-$('#dialog2').height()/2);
		$('#dialog2').css('left', winW/2-$('#dialog2').width()/2);

		$('#dialog2').fadeIn();

	$('.window .close').click(function (e) {
		e.preventDefault();

		$('#mask').hide();
		$('.window').hide();
	});
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});

});

/* Retidada de botão excedente na home */
//$(".t4 li a h4:contains('Trabalhe')").parent().hide();

