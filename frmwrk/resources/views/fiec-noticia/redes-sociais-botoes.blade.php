<div class="cabecalho">
    <!--  Redes Sociais  -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

    <div class="compartilhe">
        <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo fullURL(); ?>">Tweet </a>
        <div class="fb-like" data-href="<?php echo fullURL(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
    </div>
    <!--  Fim Redes Sociais  -->

    <p><abbr class="published">
           {{date('d/m/Y - H\hi', strtotime($conteudo->conteudo_data_inicio))}}
            </abbr></p>
</div>