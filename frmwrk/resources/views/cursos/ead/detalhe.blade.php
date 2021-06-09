@extends('template.layout')

@section('title') detalhe do curso {{$curso->curso}} @endsection
@section('description') @endsection
@section('keywords') @endsection

@section('conteudo')
    {{-- menu superior --}}
    @include('shared.menu-superior')

    <div class="bg-titulo">
        <div class="titulo">
            <ul>
                <li class="img">
                    <a href="para-voce">
                        <img src="{{url(env('PATH_ASSETS').'/shared/images/btn/home.svg')}}" alt="Inicial"
                             title="Inicial"/>
                    </a>
                </li>
                <li><a href="cursos/{{str_slug($curso->modalidade)}}">{{$curso->modalidade}}</a></li>
            </ul>
        </div>
    </div>

    <div class="bg-conteudo">

        <article class="conteudo interna">
            <div class="conteudo-texto curso">
                <h2 class="titulo-curso">{{$curso->curso}}</h2>
                <p>{{$curso->objetivo}}</p>

                <h4><strong>OBJETIVO</strong></h4>
                <p>
                    {!! (strlen($curso->objespecifico)>15) ? exibirQuebraLinha($curso->objespecifico,';') : exibirQuebraLinha($curso->objetivo) !!}
                </p>
                <h4><strong>PRÉ-REQUISITO</strong></h4>
                <p>{!! exibirQuebraLinha($curso->pre_requisitos,';') !!}</p>

                <h4><strong>CONTEÚDO</strong></h4>
                @foreach($conteudoProgramatico as $cp)
                    {!! exibirQuebraLinha($cp->nome_conhecimento) !!}}<br/>
                @endforeach
                <h4><strong>CARGA HORÁRIA</strong></h4>
                <p>{{$cargaHorario->valor_carga}} Horas</p>

                <div style="padding: 5px;">
                    <h2 class="titulo-curso">Configuração Mínima para os Computadores </h2>
                    <table width="100%" class="tabela">
                        <thead> <tr><td>Item</td><td>Configuração</td></tr> </thead>

                        <tbody>

                        <tr><td>Processador</td><td>Processador Dual Core 2GHz ou superior</td></tr>
                        <tr><td>Memória</td><td>1 GB de memória RAM ou mais</td></tr>
                        <tr><td>Vídeo</td><td>Placa de vídeo onboard de 128MB ou superior</td></tr>
                        <tr><td>Som</td><td>Placa de som onboard ou offboard e alto-falantes</td></tr>
                        <tr><td>Internet</td><td>Conexão banda larga de 300 kbps (por computador)</td></tr>
                        <tr>
                            <td> Sistema Operacional( o aluno deve possuir uma das alternativas)</td>
                            <td> - Windows XP ou posterior <br>
                                &nbsp;- MAC OS 10.5.2 (Leopard) ou posterior<br>
                                &nbsp;- Linux Ubuntu 6+ ou outras distribuições com suporte aos Browsers homologados<br>
                                &nbsp;- Android 4.0 ou superior<br>
                                &nbsp;- IOS não é compatível por causa dos recursos multimídia desenvolvidos em formato flash <br>
                            </td>

                        </tr>
                        <tr><td>Navegadores (o aluno deve possuir uma das alternativas)</td>
                            <td>
                                &nbsp;- Mozilla Firefox 18 ou posterior <br>
                                &nbsp;- Google Chrome 20 ou posterior <br>
                                &nbsp;- Internet Explorer 9 ou posterior <br>
                                &nbsp;- Safari 3.1 ou posterior <br>
                            </td>
                        </tr>
                        <tr>
                            <td>Plugins e Softwares</td>
                            <td>&nbsp;- Flash player 11 ou posterior(<a target="_blank" href="http://get.adobe.com/br/flashplayer">http://get.adobe.<wbr></wbr>com/br/flashplayer</a>)
                                <br>&nbsp;- Java SE 1.6.45 ou superior(<a target="_blank" href="http://java.com">http://java.com</a>)</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="grupo-box unico">

                @foreach ($objTurmas as $ct=>$turmas)
                    @foreach ($turmas as $turma)
                        @if($turma->ead=='S')
                            <div class="box-lista">
                                <div class="box-lista-grupo">
                                    <h6 class="area"> EAD | {{mb_strtoupper($turma->area)}}</h6>
                                    <ul>
                                        <li>PERÍODO: {{$turma->dt_inicio_curso }} a {{$turma->dt_termino_curso}}</li>
                                        <li>HORÁRIO: {{$turma->h_inicio}} - {{$turma->h_fim}}</li>
                                        <li>CIDADE: {{$turma->cidade}}</li>
                                        <li>UNIDADE: {{$turma->unidade_id}}</li>
                                        <li>VALOR: R$ {{$turma->valor_total}} </li>
                                    </ul>

                                </div>
                                <ul class="box-lista-bts unico">
                                    <li>
                                        <a class="comprar"
                                           href="https://www3.sfiec.org.br/pre_matricula/form_cadastro_pf/form_cadastro_pf.php?g_id_evento={{$turma->evento}}">INSCREVA-SE</a>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    @endforeach
                @endforeach

            </div>

        </article>
    </div>
@endsection

