@extends('template.layout')

@section('title') listagem de Cursos {{$nomeDaModalidade}} @endsection
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
                <li><a href="#">{{$nomeDaModalidade}}</a></li>
            </ul>
        </div>
    </div>

    <div class="bg-conteudo">

        <article class="conteudo">
            <div class="conteudo-texto completo">
                <h3 class="titulo-separar"><a>Inscrição Aberta</a></h3>

                <div class="grupo-box">
                    @foreach($objCursos as $curso)
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
                                       href="cursos/{{$curso->evento}}/{{str_slug($nomeDaModalidade)}}/pre-inscricao/{{str_slug($curso->curso)}}">PRÉ-INSCRIÇÃO</a>
                                </li>
                                <li>
                                    <a href="cursos/{{$curso->idcurso}}/{{str_slug($nomeDaModalidade)}}/{{str_slug($curso->curso)}}">
                                        + DETALHES </a>
                                </li>
                            </ul>
                        </div>
                    @endforeach
                </div>
                @if(count($objCursosEmBreve) > 0)
                    <h3 class="titulo-separar"><a>Inscrição em Breve</a></h3>
                    <div class="grupo-box">
                        @forelse($objCursosEmBreve as $curso)
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
                                        <a class="avise-me"
                                           href="cursos/em-breve/{{$curso->evento}}/{{str_slug($nomeDaModalidade)}}/avise-me/{{str_slug($curso->curso)}}">AVISE-ME</a>
                                    </li>
                                    <li>
                                        <a href="cursos/em-breve/{{$curso->idcurso}}/{{str_slug($nomeDaModalidade)}}/{{str_slug($curso->curso)}}">
                                            + DETALHES </a>
                                    </li>
                                </ul>
                            </div>
                        @empty
                            <br/>
                        @endforelse
                    </div>
                @endif
            </div>
        </article>
    </div>
    @include('shared.chat')
@endsection

