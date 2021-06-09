@extends('template.layout')

@section('title') @endsection
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
                <li><a href="cursos/sabado"">Sábado</a></li>
                <li><a href="cursos/{{str_slug($curso->modalidade)}}">{{$curso->modalidade}}</a></li>
            </ul>
        </div>
    </div>

    <div class="bg-conteudo">

        <article class="conteudo interna">
            <div class="conteudo-texto curso">
                <h2 class="titulo-curso">{{$curso->curso}}</h2>
                <p>{{$curso->objetivo}}</p>
                <h4><strong>PRÉ-REQUISITO</strong></h4>
                <p>{!! exibirQuebraLinha($curso->pre_requisitos) !!}</p>

                <h4><strong>CONTEÚDO</strong></h4>
                    @foreach($conteudoProgramatico as $cp)
                       {!! exibirQuebraLinha($cp->listaconhecimentos) !!}<br/>
                    @endforeach
                <h4><strong>CARGA HORÁRIA</strong></h4>
                <p>{{$cargaHorario->valor_carga}} Horas</p>
            </div>

            <div class="grupo-box unico">

                @foreach ($objTurmas as $ct=>$turmas)

                    @foreach ($turmas as $turma)
                        @if(date("w", strtotime($turma->dt_inicio_curso))==6)
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

                            </div>
                            <ul class="box-lista-bts unico">
                                <li>
                                    <a class="comprar" href="cursos/sabado/{{$turma->evento}}/{{str_slug($turma->modalidade)}}/pre-inscricao/{{str_slug($turma->curso)}}">PRÉ-INSCRIÇÃO</a>
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

