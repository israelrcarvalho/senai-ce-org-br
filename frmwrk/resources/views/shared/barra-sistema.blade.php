<div class="fixed bg-barra">
    <div class="barra">
            <ul>
                <li class="home">
                    <a href="http://www.sfiec.org.br">
                        <img src="{{url(env('PATH_ASSETS').'/shared/images/barra/sistema-fiec.svg')}}"
                             alt="Sistema FIEC"
                             title="Sistema FIEC">
                    </a>
                </li>
                <li class="btn-casa">
                    <a href="http://www.sesi-ce.org.br" target="_blank">
                        <img src="{{url(env('PATH_ASSETS').'/shared/images/barra/sesi-logo.svg')}}"
                             alt="SESI"
                             title="SESI">
                    </a>
                </li>
                <li class="btn-casa">
                    <a href="http://www.senai-ce.org.br" target="_blank">
                        <img src="{{url(env('PATH_ASSETS').'/shared/images/barra/senai-logo.svg')}}"
                             alt="SENAI"
                             title="SENAI">
                    </a>
                </li>
                <li class="btn-casa"><a href="http://www.iel-ce.org.br" target="_blank"><img
                                src="{{url(env('PATH_ASSETS').'/shared/images/barra/iel-logo.svg')}}" alt="IEL" title="IEL"></a></li>
                <li class="btn-pesquisa">
                    <a href="#form-pesquisa" data-esconder=".btn-casa" class="btn-af">
                        <img src="{{url(env('PATH_ASSETS').'/shared/images/barra/pesquisa.svg')}}" alt="Pesquisar" title="Pesquisar">
                    </a>
                </li>
            </ul>


        <form id="form-pesquisa" method="get" action="{{ action('FiecNoticiaController@pesquisa') }}">
            <input type="text" maxlength="200" id="search" placeholder="Pesquisar" name="qs" />
            <input type="submit" value="" id="buscar" style="background-image: url({{url(env('PATH_ASSETS').'/images/servicos/buscar.png')}}">
            <div id="expandir">
                <img src="{{url(env('PATH_ASSETS').'/images/servicos/buscar.png')}}" alt=""/>
            </div>
        </form>

        <div class="telefone">
            <strong><img src="{{url(env('PATH_ASSETS').'/images/telefone.png')}}" class="icone-fone" alt="telefone">(85) 4009.6300</strong>
        </div>

    </div>
</div>