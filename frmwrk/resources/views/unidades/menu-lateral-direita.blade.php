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
<div class="botoes_interna" id="menuLateralDir"
     data-ativar="{{is_null(Request::segment(3)) ? Request::segment(2) : Request::segment(3) }}">
    <ul class="t4">
        <li><a href="unidades/1347/fortaleza" id="fortaleza">
                <img src="{{url(env('PATH_ASSETS').'/images/btn-unidades.svg')}}" alt="" title=""/>
                <h4>Fortaleza</h4>
            </a></li>
        <li><a href="unidades/1377/horizonte" id="horizonte">
                <img src="{{url(env('PATH_ASSETS').'/images/btn-unidades.svg')}}" alt="" title=""/>
                <h4>Horizonte</h4>
            </a></li>
        <li>
            <a href="unidades/1451/juazeiro-do-norte"
               id="juazeiro-do-norte"
               class="">
                <img src="{{url(env('PATH_ASSETS').'/images/btn-unidades.svg')}}" alt="" title=""/>
                <h4>Juazeiro do Norte</h4>
            </a></li>
        <li>
            <a href="unidades/1486/maracanau" id="maracanau">
                <img src="{{url(env('PATH_ASSETS').'/images/btn-unidades.svg')}}" alt="" title=""/>
                <h4>Maracanaú</h4>
            </a>
        </li>
        <li>
            <a href="unidades/1722/sobral" id="sobral">
                <img src="{{url(env('PATH_ASSETS').'/images/btn-unidades.svg')}}" alt="" title=""/>
                <h4>Sobral</h4>
            </a>
        </li>
    </ul>
</div>
