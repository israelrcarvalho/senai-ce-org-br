<div class="botoes" data-ativar="{{Request::segment(3)}}">
    <ul class="t3">

        @foreach($menuParaSindicato as $mnParaSindicato)

            @if($mnParaSindicato->link_id != '509')
                <li>
                    <a href="{{$mnParaSindicato->link_url}}"
                       target="{{$mnParaSindicato->link_destino}}"
                       id="{{str_slug($mnParaSindicato->link_nome)}}">
                        <img src="{{$mnParaSindicato->link_imagem}}"
                             alt="{{$mnParaSindicato->link_nome}}" title="{{$mnParaSindicato->link_nome}}">
                        <h4>{{$mnParaSindicato->link_nome}}</h4>
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</div>