{{--<div class="botoes" data-ativar="{{Request::segment(3)}}">
    <ul class="t4">
        @foreach($menuParaVoce as $mnParaVc)
            <li>
                <a href="{{$mnParaVc->link_url}}"
                   target="{{$mnParaVc->link_destino}}"
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

<h3 class="titulo-separar"><a href="">Cursos</a></h3>
<div class="botoes" data-ativar="1">
    <ul class="t3">
        <li>
            <a href="cursos/tecnicos" title="Teoria e prática com amplo acesso ao mercado de trabalho" class="tooltip">
                <img src="imagens/servicos/pv-tecnico.svg" alt="Técnico"
                     title="Teoria e prática com amplo acesso ao mercado de trabalho" class="tooltip">
                <h4>Cursos Técnicos</h4>
            </a>
        </li>
        <li><a href="cursos/qualificacao-profissional" title="Desenvolvimento das competências mais procuradas pelo mercado"
               class="tooltip">
                <img src="imagens/servicos/pv-qualificacao.svg" alt="Qualificaçao" title="Qualificaçao">
                <h4>Cursos de Qualificação Profissional</h4>
            </a>
        </li>
        <li><a href="cursos/curta-duracao" title="Ampliação dos conhecimentos profissionais para entrada no mercado"
               class="tooltip">
                <img src="imagens/servicos/pv-curta-duracao.svg" alt="Curta Duração" title="Curta Duração">
                <h4>Cursos de Curta Duração</h4>
            </a>
        </li>
    </ul>
    <ul class="t3">
        <li><a href="cursos/sabado" title="Flexibilidade de horário para seus estudos" class="tooltip">
                <img src="imagens/servicos/pv-ead.svg" alt="A Distância" title="A Distância">
                <h4>Cursos aos Sábados</h4>
            </a>
        </li>
        <li><a href="cursos/por-area">
                <img src="imagens/servicos/pv-por-area.svg" alt="Por Área" title="Por Área">
                <h4>Cursos por Área</h4>
            </a>
        </li>
        <li><a href="cursos/por-unidade">
                <img src="imagens/servicos/pv-porunidade.svg" alt="" title="">
                <h4>Cursos por Unidade</h4>
            </a>
        </li>
    </ul>
</div>
<span class="respiro"></span>