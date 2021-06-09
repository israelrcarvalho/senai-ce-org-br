$(document).ready(function(){

    $('#form-contato').validate({
        
        errorElement: "div",
                errorPlacement: function() {  return true;   }, 
                rules: {
                        nome: { required: true, minlength: 2 },
                        email: { required: true, email: true },
                       // telefone: { required: true },
                        mensagem:{ required: true },
                        tipo_atendimento:{required: true },
                        cidade:{required: true },
                        assunto:{required: true }
                },
                
                messages: {
                        nome: { required: 'Preencha o campo nome', minlength: 'No mínimo 2 letras' },
                        email: { required: 'Informe o seu email', email: 'Ops, informe um email válido' },
                     //   telefone: { required: 'Nos diga seu telefone' },
                        tipo_atendimento: { required: 'Selecione o tipo de atendimento' },
                        cidade: { required: 'Digite o nome de sua cidade' },
                        assunto: { required: 'Digite um assunto' },
                        mensagem:{ required: 'Digite uma mensagem' }

                },
                        
                submitHandler: function( form ){
                        var dados = $( form ).serialize();
                        $.ajax({
                                type: "POST",
                                url: "pages/view/send-fale-conosco.php",
                                data: dados,
                                success: function( data )
                                {
                                   $('#msg').html(data); 
                                   $('#msg').show();
                                   document.getElementById('form-contato').reset();
                                }
                        });

                        return false;
                }
                
        });

    
	// Queremos Ouvir Você
        /*
	$('.form_queremos_pj').hide();
	$('.tipo_atendimento', '.form_queremos').change(function (){
		var tipo = $('option:selected', this).val();
		//PF
		if (tipo == 'PF'){
			if ($('.form_queremos_pf:visible')){
				$('.form_queremos_pf').slideToggle('show');
				$('.form_queremos_pj').slideToggle('show');
			}
		//PJ
		} else if (tipo == 'PJ'){
			if ($('.form_queremos_pj:visible')){
				$('.form_queremos_pf').slideToggle('show');
				$('.form_queremos_pj').slideToggle('show');
			}
		}
		
	});  
	
	*/  
});