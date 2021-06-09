
<script type="text/javascript" src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/js/jquery-2.0.0.min.js"></script>
<!--  Mantem a imagem do CHAT transparente -->
<style>
    #lhc_need_help_image{
        opacity: 0;
    }
    #lhc_need_help_image img{
        width: 60px;
        background: white;
    }
</style>


<div style="display:none;">
    <!-- Coloque esta tag onde você desejar que o Plugin do Live Helper apareça. -->
    <div id="lhc_status_container_page" ></div>

    <!-- Coloque esta tag depois da tag do Plugin do Live Helper. -->
    <script type="text/javascript">
         var LHCChatOptionsPage = {};
         LHCChatOptionsPage.opt = {};
         (function() {
         var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
         po.src = '//srvjava01.sfiec.org.br/lhc_web/index.php/por/chat/getstatusembed/(department)/11/12/13/14/15/16/17/18/19';
         var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
         })();         

          
    </script>
</div>  

<script type="text/javascript">

    var LHCChatOptions = {};

    LHCChatOptions.attr = new Array();
    LHCChatOptions.attr.push({'name':'pagina','value': window.location.href,'type':'hidden','size': 24,'req':true});


    LHCChatOptions.opt = {widget_height:340,widget_width:300,popup_height:520,popup_width:500};
    (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    var referrer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://')+1)) : '';
    var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
    po.src = '//srvjava01.sfiec.org.br/lhc_web/index.php/por/chat/getstatus/(click)/internal/(position)/bottom_right/(ma)/br/(top)/350/(units)/pixels/(leaveamessage)/true/(department)/11/12/13/14/15/16/17/18/19?r='+referrer+'&l='+location;
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();

    // ----------------------------------------------------------------------------------------------------------------------

    function updateChat(){      
        if($('#lhc_need_help_image img').length){    
            $('#lhc_need_help_image img').eq(0).attr('src', 'http://srvweb02.sfiec.org.br/homologacao/senai-chat/style/default/imagens/chat-senai.png');
            $('#lhc_need_help_image').eq(0).css('opacity', '1');

            $('#lhc_need_help_main_title').html('Dúvidas sobre cursos?');
            $('#lhc_need_help_sub_title').html('Posso te Ajudar!');


            $('#lhc_need_help_close').css('display', 'none');

            setTimeout(function(){
                $('#lhc_need_help_container').fadeOut();
            }, 15000);

            setTimeout(function(){
                $('#lhc_need_help_close').css('display', 'initial');

                $('#lhc_need_help_main_title').html('Oi, posso reservar sua vaga no curso?');
                $('#lhc_need_help_main_title').css('font-size', '15px');

                $('#lhc_need_help_sub_title').html('');                        
                $('#lhc_need_help_container').fadeIn();
            }, 30000);
        } 
       
        else {
            setTimeout(updateChat, 1);
        }
    }

    setTimeout(updateChat, 1);

</script>