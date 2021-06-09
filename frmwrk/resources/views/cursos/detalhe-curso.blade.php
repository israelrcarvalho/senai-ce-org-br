@extends('template.layout')

@section('title') detalhe do curso {{$curso->curso}}@endsection
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
                        <img src="{{url(env('PATH_ASSETS').'/shared/images/btn/home.svg')}}" alt="Inicial" title="Inicial" />
                    </a>
                </li>
                <li><a href="#">{{$curso->modalidade}}</a></li>
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
                {!! (strlen($curso->objespecifico)>15) ? exibirQuebraLinha($curso->objespecifico) : exibirQuebraLinha($curso->objetivo) !!}
                </p>
                <h4><strong>PRÉ-REQUISITO</strong></h4>
                {{--<p>{!! exibirQuebraLinhaPorStr($curso->pre_requisitos,'-') !!}</p>--}}
                <p>{!! exibirQuebraLinha($curso->pre_requisitos) !!}</p>

                <h4><strong>CONTEÚDO</strong></h4>
                    @foreach($conteudoProgramatico as $cp)
                        @if($curso->id_modalidade==1)
                        {!! exibirQuebraLinha($cp->nome_conhecimento) !!}<br/>
                        @else
                        {!! exibirQuebraLinha($cp->listaconhecimentos) !!}<br/>
                        @endif

                    @endforeach
                <h4><strong>CARGA HORÁRIA</strong></h4>
                <p>{{$cargaHorario->valor_carga}} Horas</p>

            </div>
            <div class="grupo-box unico">
                @foreach ($objTurmas as $ct=>$turmas)
                    @foreach ($turmas as $turma)
                        <div class="box-lista">
                            <div class="box-lista-grupo">
                                <h6 class="area"> PRESENCIAL  | {{mb_strtoupper($turma->area)}}</h6>
                                <ul>
                                    <li>PERÍODO:  {{$turma->dt_inicio_curso }} a {{$turma->dt_termino_curso}}</li>
                                    <li>HORÁRIO:  {{$turma->h_inicio}} - {{$turma->h_fim}}</li>
                                    <li>CIDADE:   {{$turma->cidade}}</li>
                                    <li>UNIDADE:  {{$turma->unidade_id}}</li>
                                    <li>VALOR: R$ {{$turma->valor_total}} </li>
                                </ul>
                                <br/>
                                <h6 class="area" style="margin-bottom: 0.6em;">ARQUIVOS:</h6>
                                <ul>
                                    @foreach ($turma->files as $f)
                                        <li><a target="_blank" href="http://www3.sfiec.org.br/sc71/file/doc/anexos_evento/{{$turma->evento}}/{{$f->anexo}}">{{$f->nome_exibivel_portal}}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                            <ul class="box-lista-bts unico">
                                <li>
                                    @php
                                       $link = '<a class="comprar" href="cursos/'.$turma->evento.'/'.str_slug($turma->modalidade).'/pre-inscricao/'.str_slug($turma->curso).'">PRÉ-INSCRIÇÃO</a>';
                                    if($curso->ead =='S'){
                                       $link = '<a class="comprar" target="blank" href="https://www3.sfiec.org.br/pre_matricula/form_cadastro_pf/form_cadastro_pf.php?g_id_evento='.$curso->evento.'">INSCREVA-SE</a>';
                                    }
                                    @endphp
                                    {!! $link !!}
                                </li>
                            </ul>
                        </div>
                    @endforeach
                @endforeach

            </div>
            @include('para-voce.cursos-home')

        </article>
    </div>
@endsection

