{{--
<div class="botoes_interna" data-ativar="{{Request::segment(3)}}">
    <ul class="t4">
        @foreach($menuParaVoce as $mnParaVc)
            <li>
                <a href="{{$mnParaVc->link_url}}"
                   target="{{getSysValArray('DestinoLink',$mnParaVc->link_destino)}}"
                   id="{{str_slug($mnParaVc->link_nome)}}">
                    <img src="{{$mnParaVc->link_imagem}}"
                         alt="{{$mnParaVc->link_nome}}" title="{{$mnParaVc->link_nome}}">
                    <h4>{{$mnParaVc->link_nome}}</h4>
                </a>
            </li>
        @endforeach
    </ul>
</div>
--}}