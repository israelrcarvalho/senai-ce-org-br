<div class="botoes_interna" data-ativar="{{is_null(Request::segment(2)) ? Request::segment(3) : Request::segment(2) }}">
    <ul class="t3">
        <li>

            <a href="para-industria/86771/solucoes-em-educacao-profissional"
               id="86771">
                <img src="{{url(env('PATH_ASSETS').'/images/servicos/pj-solucoeseduca.svg')}}"
                     alt="" title="">
                <h4>Soluções em Educação Profissional</h4>
            </a>
        </li>
        <li>
            <a href="para-industria/solucoes-em-tecnologia-e-inovacao" id="solucoes-em-tecnologia-e-inovacao">
                <img src="{{url(env('PATH_ASSETS').'/images/servicos/pj-solucoestecno.svg')}}"
                     alt="" title="">
                <h4>Soluções em Tecnologia e Inovação</h4>
            </a></li>
        <li>
            <a id="unidades-moveis"
               href="para-industria/unidades-moveis">
                <img src="{{url(env('PATH_ASSETS').'/images/servicos/pj-unidadesmoveis.svg')}}"
                     alt="" title="">
                <h4>Unidades Móveis</h4>
            </a>
        </li>

        <!-- <li><a href="/86773/paraindustria/ensaios">-->
        <li><a href="cursos/por-area">
                <img src="{{url(env('PATH_ASSETS').'/images/servicos/pv-por-area.svg')}}"
                     alt="" title="">
                <h4>Cursos por Área</h4>
            </a></li>
        <li><a href="para-industria/86775/projetos-de-inovacao" id="86775">
                <img src="{{url(env('PATH_ASSETS').'/images/servicos/pj-projetoinova.svg')}}"
                     alt="" title="">
                <h4>Pesquisa, Desenvolvimento e Inovação (PD&I)</h4>
            </a></li>
        <li>
            <a href="para-industria/86776/instituto-senai-de-tecnologia" id="86776">
                <img src="{{url(env('PATH_ASSETS').'/images/servicos/pj-centroexe.svg')}}"
                     alt="" title="">
                <h4>Centro de Excelência em Tecnologia e Inovação do SENAI</h4>
            </a></li>
    </ul>
</div>
@if(Request::segment(2)==86771 || Request::segment(2)==86775)
    <div class="solicitacao">
        <a href="para-industria/{{$conteudo->conteudo_id}}/contrate/{{str_slug($conteudo->conteudo_nome)}}"
           site="SENAI-CE"
           title="{{$conteudo->conteudo_id}}"
           pag-contratar="{{$conteudo->conteudo_nome}}">Contrate</a>
    </div>
@endif