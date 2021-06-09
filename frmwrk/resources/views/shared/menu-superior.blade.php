{{-- Menu Principal--}}
<header class="bg-menu">
    <div class="menu">
        <h1>
            <a href="index">
                <img src="{{url(env('PATH_ASSETS').'/images/logo.svg')}}" alt="Sistema FIEC" title="Sistema FIEC">
            </a>
        </h1>
        <a href="#menu-principal" class="btn-menu btn-af">
            <img src="{{url(env('PATH_ASSETS').'/shared/images/btn/menu.svg')}}" alt="Menu" title="Menu">
        </a>
        <nav id="menu-principal" data-ativar="{{ $menuprincipal or '1' }}">
            <ul>
                <li><a href="para-voce">PARA VOCÊ</a></li>
                <li><a href="para-industria">PARA INDÚSTRIA</a></li>
                <li><a href="unidades">UNIDADES</a></li>
                <li><a href="sobre-nos/86820/institucional">SOBRE NÓS</a></li>
                <li><a href="transparencia">TRANSPARÊNCIA</a></li>
                <li><a href="contato">CONTATO</a></li>
            </ul>
        </nav>
    </div>
</header>
{{-- Fim do menu Principal--}}

