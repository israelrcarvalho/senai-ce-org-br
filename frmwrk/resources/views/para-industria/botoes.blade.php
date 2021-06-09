{{--
<div class="botoes" data-ativar="{{Request::segment(3)}}">
    <ul class="t4">
        @foreach($menuParaIndustria as $mnParaIndustria)
            @if($mnParaIndustria->link_id != 177)
            <li>
                <a href="{{$mnParaIndustria->link_url}}"
                   target="{{$mnParaIndustria->link_destino}}"
                   id="{{str_slug($mnParaIndustria->link_nome)}}">
                    <img src="{{$mnParaIndustria->link_imagem}}"
                         alt="{{$mnParaIndustria->link_nome}}" title="{{$mnParaIndustria->link_nome}}">
                    <h4>{{$mnParaIndustria->link_nome}}</h4>
                </a>
            </li>
            @endif
        @endforeach
    </ul>
</div>
--}}
<h3 class="titulo-separar"><a href="">Serviços</a></h3>
<div class="botoes" data-ativar="1">
    <ul class="t3">
        <li><a href="para-industria/86771/solucoes-em-educacao-profissional">
                <img src="{{url(env('PATH_ASSETS').'/images/servicos/pj-solucoeseduca.svg')}}" alt="" title="">
                <h4>Soluções em Educação Profissional</h4>
            </a></li>
        <li><a href="para-industria/solucoes-em-tecnologia-e-inovacao">
                <img src="{{url(env('PATH_ASSETS').'/images/servicos/pj-solucoestecno.svg')}}" alt="" title="">
                <h4>Soluções em Tecnologia e Inovação</h4>
            </a></li>
        <li>
            <a href="para-industria/unidades-moveis">
                <img src="{{url(env('PATH_ASSETS').'/images/servicos/pj-unidadesmoveis.svg')}}" alt="" title="">
                <h4>Unidades Móveis</h4>
            </a>
        </li>

    </ul>
    <ul class="t3">
        <!-- <li><a href="/86773/paraindustria/ensaios">-->
        <li><a href="cursos/por-area">
                <img src="{{url(env('PATH_ASSETS').'/images/servicos/pv-por-area.svg')}}" alt="" title="">
                <h4>Cursos por Área</h4>
            </a></li>
        <li><a href="para-industria/86775/projetos-de-inovacao">
                <img src="{{url(env('PATH_ASSETS').'/images/servicos/pj-projetoinova.svg')}}" alt="" title="">
                <h4>Pesquisa, Desenvolvimento e Inovação (PD&I)</h4>
            </a></li>
        <li><a href="para-industria/86776/instituto-senai-de-tecnologia">
                <img src="{{url(env('PATH_ASSETS').'/images/servicos/pj-centroexe.svg')}}" alt="" title="">
                <h4>Centro de Excelência em Tecnologia e Inovação do SENAI</h4>
            </a></li>
    </ul>        </div>