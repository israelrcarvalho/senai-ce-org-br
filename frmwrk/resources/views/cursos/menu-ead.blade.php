<div class="botoes_interna" data-ativar="{{Request::segment(3)}}">
    <ul class="t4">
        <li>
            {{-- //http://localhost/senai-ce.org.br/cursos/a-distancia/094866/tire-suas-duvidas --}}
            <a href="cursos/ead/094866/tire-suas-duvidas" target="_self" id="094866">
                <!--<a href="/curso-tecnico">-->
                <img title="Técnico" alt="Técnico" src="{{url(env('PATH_ASSETS').'/images/servicos/duvidas.svg')}}">
                <h4>Tire suas dúvidas</h4>
            </a></li>
        <li>
            <a href="cursos/ead/094867/como-comprar" target="_self" id="094867">
                <img title="Qualificaçao" alt="Qualificaçao" src="{{url(env('PATH_ASSETS').'/images/servicos/comocomprar.svg')}}">
                <h4>Como comprar</h4>
            </a>
        </li>
        <li class="quero-cancelar">
            <a href="cursos/ead/cancelar-compra" style="cursor:pointer;" id="cancelar-compra">
                <img title="Curta Duração" alt="Curta Duração" src="{{url(env('PATH_ASSETS').'/images/servicos/cancelar.svg')}}">
                <h4>Cancelar compra</h4>
            </a>
        </li>
        <li class="quero-cancelar"><a href="http://getic06/senai-ce.org.br/sobre-nos/downloads/198/contratos-ead" target="_blank">
                <img title="Curta Duração" alt="Curta Duração" src="{{url(env('PATH_ASSETS').'/images/servicos/contratos.svg')}}">
                <h4>Contratos EAD</h4>
            </a>
        </li>
    </ul>
</div>