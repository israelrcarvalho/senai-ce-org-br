@extends('template.layout')

@section('title') Listagem de Cursos aos Sábados @endsection
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
                        <img src="{{url(env('PATH_ASSETS').'/shared/images/btn/home.svg')}}" alt="Inicial" title="Inicial"/>
                    </a>
                </li>
                <li><a>Cursos aos Sábados</a></li>
            </ul>
        </div>
    </div>

    <div class="bg-conteudo">
        <article class="conteudo">
            <div class="conteudo-texto completo">
                <h3 class="titulo-separar"><a>Inscrição Aberta</a></h3>
                <div class="grupo-box">
                    @foreach($objCursos as $curso)
                        @if(date("w", strtotime($curso->dt_inicio_curso))==6)
                        <div class="box-lista">
                            <div class="box-lista-grupo">
                                <h4>{{ $curso->curso }}</h4>
                                <h6 class="area"> PRESENCIAL | {{mb_strtoupper($curso->area)}}</h6>
                                <ul>
                                    <li>PERÍODO: {{$curso->dt_inicio_curso }} a {{$curso->dt_termino_curso}}</li>
                                    <li>HORÁRIO: {{$curso->h_inicio}} - {{$curso->h_fim}}</li>
                                    <li>CIDADE: {{$curso->cidade}}</li>
                                    <li>UNIDADE: {{$curso->unidade_id}}</li>
                                    <li>VALOR: R$ {{$curso->valor_total}} </li>
                                </ul>
                            </div>
                            <ul class="box-lista-bts">
                                <li>
                                    <a class="comprar"
                                       href="cursos/sabado/{{$curso->evento}}/{{str_slug($curso->modalidade)}}/pre-inscricao/{{str_slug($curso->curso)}}">PRÉ-INSCRIÇÃO</a>
                                </li>
                                <li>
                                    <a href="cursos/sabado/{{$curso->idcurso}}/{{str_slug($curso->modalidade)}}/{{str_slug($curso->curso)}}">
                                        + DETALHES </a>
                                </li>
                            </ul>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </article>
    </div>
@endsection

