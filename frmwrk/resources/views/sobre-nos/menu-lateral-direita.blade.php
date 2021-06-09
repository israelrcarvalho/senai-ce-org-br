{{--
<div class="botoes_interna" id="menuLateralDir" data-ativar="{{is_null(Request::segment(3)) ? Request::segment(2) : Request::segment(3) }}">
    <ul class="t4">
        @foreach($menuSobreNos as $mnSobreNos)
                <li>
                    <a href="{{$mnSobreNos->link_url}}"
                       target="{{getSysValArray('DestinoLink',$mnSobreNos->link_destino)}}"
                       id="{{str_slug($mnSobreNos->link_nome)}}">
                        <img src="{{$mnSobreNos->link_imagem}}"
                             alt="{{$mnSobreNos->link_nome}}" title="{{$mnSobreNos->link_nome}}">
                        <h4>{{$mnSobreNos->link_nome}}</h4>
                    </a>
                </li>
            @endforeach
    </ul>
</div>
--}}
<div class="botoes_interna" id="menuLateralDir" data-ativar="{{is_null(Request::segment(3)) ? Request::segment(2) : Request::segment(3) }}">
    <ul class="t4">
        <li>
            <a href="sobre-nos/86820/institucional" id="institucional">
                <img src="imagens/sobre-nos/institucional.svg" alt="" title="">
                <h4>Institucional</h4>
            </a></li>
        <li><a href="sobre-nos/noticias" id="noticias">
                <img src="imagens/sobre-nos/noticias.svg" alt="" title="">
                <h4>Notícias</h4>
            </a></li>
        <li><a href="sobre-nos/86821/bibliotecas" id="bibliotecas">
                <img src="imagens/sobre-nos/bibliotecas.png" alt="" title="">
                <h4>Bibliotecas</h4>
            </a></li>
        <li><a href="sobre-nos/publicacoes" id="publicacoes">
                <img src="imagens/sobre-nos/publicacoes.png" alt="" title="">
                <h4>Publicações</h4>
            </a></li>
        <li><a href="sobre-nos/87202/perguntas-frequentes" id="perguntas-frequentes">
                <img src="imagens/sobre-nos/perguntas.svg" alt="" title="">
                <h4>Perguntas Frequentes</h4>
            </a></li>
        <li><a href="http://rh.sfiec.org.br" target="_blank">
                <img src="imagens/sobre-nos/trabalhe.svg" alt="" title="">
                <h4>Trabalhe Conosco</h4>
            </a></li>
        <li><a href="http://www1.sfiec.org.br/sobre-nos/87704/assessoria-de-comunicacao" target="_blank">
                <img src="imagens/sobre-nos/assessoria.svg" alt="" title="">
                <h4>Assessoria de Comunicação</h4>
            </a></li>
    </ul>
</div>