<div class="botoes_interna" data-ativar="{{is_null(Request::segment(3)) ? 'associados' : Request::segment(3) }}">
    <ul class="t3">
        @foreach($menuParaSindicato as $mnParaSindicato)
                <li>
                    <a href="{{$mnParaSindicato->link_url}}"
                       target="{{getSysValArray('DestinoLink',$mnParaSindicato->link_destino)}}"
                       id="{{str_slug($mnParaSindicato->link_nome)}}">
                        <img src="{{$mnParaSindicato->link_imagem}}"
                             alt="{{$mnParaSindicato->link_nome}}" title="{{$mnParaSindicato->link_nome}}">
                        <h4>{{$mnParaSindicato->link_nome}}</h4>
                    </a>
                </li>
        @endforeach
    </ul>
</div>