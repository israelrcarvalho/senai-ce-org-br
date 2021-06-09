{{-- Rodapé aqui --}}
<div class="bg-rodape">
    <footer class="rodape t4">

        <div class="grupo-links">
            <h6>Para Você</h6>
            <ul>
                <!-- <li><a href="/?st=para-voce-lista&mod=12">Curso Técnico</a></li> -->
                <li><a href="cursos/tecnicos">Cursos Técnicos</a></li>
                <li><a href="cursos/qualificacao-profissional">Cursos de Qualificação Profissional</a></li>
                <li><a href="cursos/curta-duracao">Curso de Curta Duração</a></li>
                <li><a href="cursos/a-distancia">Cursos de EaD</a></li>
                <li><a href="cursos/por-area">Curso por Área</a></li>
                <!-- <li><a href="/processos-seletivos">Processos Seletivos</a></li> -->
                <li><a href="para-voce/89371/pronatec">PRONATEC</a></li>
            </ul>
        </div>
        <div class="grupo-links">
            <h6>Para Indústria</h6>
            <ul>
                <!--<li><a href="/86771/paraindustria/cursos">Cursos</a></li>-->
                <li><a href="para-industria/86771/solucoes-em-educacao-profissional">Soluções em Educação Profissional</a></li>
                <li><a href="para-industria/solucoes-em-tecnologia-e-inovacao">Soluções em Tecnologia e Inovação</a></li>
                <!--<li><a href="/86819/paraindustria/unidades-moveis">Unidades Móveis</a></li>-->
                <li><a href="para-industria/unidades-moveis">Unidades Móveis</a></li>
                <!--<li><a href="/86772/paraindustria/consultorias">Consultorias</a></li>-->

                <!--<li><a href="/86773/paraindustria/ensaios">Ensaios</a></li>-->
                <li><a href="para-industria/86775/projetos-de-inovacao">Pesquisa, Desenvolvimento e Inovação (PD&I)</a></li>
                <li><a href="para-industria/86776/instituto-senai-de-tecnologia">Centro de Excelência em Tecnologia e Inovação</a></li>
            </ul>
        </div>
        <div class="grupo-links">
            <h6>Unidades</h6>
            <ul>
                <li><a href="unidades/1347/fortaleza">Fortaleza</a></li>
                <li><a href="unidades/1377/horizonte">Horizonte</a></li>
                <li><a href="unidades/1451/juazeiro-do-norte">Juazeiro do Norte</a></li>
                <li><a href="unidades/1486/maracanau">Maracanaú</a></li>
                <li><a href="unidades/1722/sobral">Sobral</a></li>
            </ul>
        </div>
        <div class="grupo-links">
            <h6>Sobre Nós</h6>
            <ul>
                <li><a href="sobre-nos/86820/institucional">Institucional</a></li>
                <li><a href="sobre-nos/noticias">Notícias</a></li>
                <li><a href="sobre-nos/86821/bibliotecas">Bibliotecas</a></li>
                <li><a href="sobre-nos/87202/perguntas-frequentes">Perguntas Frequentes</a></li>
                <li><a href="http://rh.sfiec.org.br/?st=index" target="_blank">Trabalhe Conosco</a></li>
                <li><a href="sobre-nos/87477/ldo-senai">LDO SENAI</a></li>
                <li><a href="http://www1.sfiec.org.br/sobre-nos/87704/assessoria-de-comunicacao" target="_blank">Assessoria de Comunicação</a></li>
                <li><a href="sobre-nos/downloads">Downloads</a></li>
            </ul>
        </div>

        <div class="grupo-links redes">
            <a href="contato" class="queremos-ouvir">
                <img src="{{url(env('PATH_ASSETS').'/shared/images/rodape/queremos-ouvir-voce.jpg')}}"
                     alt="Queremos ouvir você!" title="Queremos ouvir você!">

            </a>
            <ul>
                <li><a href="https://www.facebook.com/senaiceara" target="_blank"><img src="{{url(env('PATH_ASSETS').'/shared/images/rodape/facebook.svg')}}" alt="Facebook" title="Facebook"></a></li>
                {{--<li><a href="https://twitter.com/senaiceara" target="_black"><img src="{{url(env('PATH_ASSETS').'/shared/images/rodape/twitter.svg')}}" alt="Twitter" title="Twitter"></a></li>--}}
                <li><a href="https://www.youtube.com/user/senaiceara" target="_blank"><img src="{{url(env('PATH_ASSETS').'/shared/images/rodape/youtube.svg')}}" alt="Youtube" title="Youtube"></a></li>
                <li class="cnpj">
                    <span class="fone"><strong>(85) 4009.6300</strong></span>
                            <span class="atendimento">
                        Atendimento telefônico de segunda à sexta-feira, das 7h às 19h, e
                        aos sábados, das 8h às 14h, exceto em feriados nacionais ou locais.
                    </span>
                </li>
            </ul>
        </div>

    </footer>
</div>
{{-- Fim do rodape--}}

{{--
<div class="bg-rodape">
    <footer class="rodape t4">

        <div class="grupo-links">
            <h6>Para Você</h6>
            <ul>
                @foreach($menuParaVoce as $mnParaVc)
                    <li><a href="{{$mnParaVc->link_url}}"
                           target="{{getSysValArray('DestinoLink',$mnParaVc->link_destino)}}">{{$mnParaVc->link_nome}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="grupo-links">
            <h6>Para Indústria</h6>
            <ul>
                <ul>
                    @foreach($menuParaIndustria as $mnParaIndustria)
                        <li><a href="{{$mnParaIndustria->link_url}}"
                               target="{{getSysValArray('DestinoLink',$mnParaIndustria->link_destino)}}">{{$mnParaIndustria->link_nome}}</a></li>
                    @endforeach
                </ul>
            </ul>
        </div>
        <div class="grupo-links">
            <h6>Para Sindicato</h6>
            <ul>
                @foreach($menuParaSindicato as $mnParaSindicato)
                    <li><a href="{{$mnParaSindicato->link_url}}"
                           target="{{getSysValArray('DestinoLink',$mnParaSindicato->link_destino)}}">{{$mnParaSindicato->link_nome}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="grupo-links">
            <h6>Sobre Nós</h6>
            <ul>
                @foreach($menuSobreNos as $mnSobreNos)
                    <li><a href="{{$mnSobreNos->link_url}}"
                           target="{{getSysValArray('DestinoLink',$mnSobreNos->link_destino)}}">{{$mnSobreNos->link_nome}}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="grupo-links redes">
            <h6>
                <a href="contato">
                    <img src="{{url(env('PATH_ASSETS').'/shared//images/rodape/queremos-ouvir-voce.jpg')}}" alt="Queremos ouvir você!" title="Queremos ouvir você!">
                </a>
            </h6>
            <ul>
                <li>
                    <a href="https://www.facebook.com/sistemafiec" target="_blank">
                        <img src="{{url(env('PATH_ASSETS').'/shared//images/rodape/facebook.svg')}}" alt="Facebook" title="Facebook">
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/sistemafiec" target="_blank">
                        <img src="{{url(env('PATH_ASSETS').'/shared//images/rodape/twitter.svg')}}" alt="Twitter" title="Twitter">
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCCPp_X3apUMebot_qOlNI2A" target="_blank">
                        <img src="{{url(env('PATH_ASSETS').'/shared//images/rodape/youtube.svg')}}" alt="Youtube" title="Youtube">
                    </a>
                </li>
            </ul>
        </div>

    </footer>
</div>
--}}