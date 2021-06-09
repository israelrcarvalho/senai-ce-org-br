@extends('template.layout')

@section('title') Para você - listagem de Cursos a Distância @endsection
@section('description') @endsection
@section('keywords') Cursos a Distância,Cursos ead @endsection

@section('conteudo')
    @section('styles')
        <style>
            .box-lista-grupo {height: 300px }
            .box-lista { width: 30%;  margin-bottom: 2%; margin: 0 2% 2% 0; }
            .botoes_interna { width: 20%}
            .conteudo-texto { width: 77% }
            @media only screen and (max-width: 950px){ .box-lista { width: 31%; margin: 1%; .botoes_interna { width: 7%; } }
            @media only screen and (max-width: 720px){ .box-lista { width: 47%; margin: 1%; }}
            @media only screen and (max-width: 620px){ .box-lista { width: 100%; margin: 1% 0; }}
        </style>

    @endsection
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
                <li><a href="#">Cursos de EaD</a></li>
            </ul>

            <ul style="float: right;">
                <li style="font-size: 12px; border: solid 1px #ccc; padding-left:10px; padding-right: 10px;">
                    <a href="http://ava.senai-ce.org.br/" target="_blank">Sala de Aula Virtual</a>
                </li>
            </ul>

        </div>
    </div>

    <div class="bg-conteudo">
        <article class="conteudo">
            <h3 class="titulo-separar"><a>Inscrição Aberta</a></h3>
            @include('cursos.menu-ead')
            <div class="conteudo-texto">

                <div class="grupo-box">
                    @foreach($objCursos as $curso)
                        <div class="box-lista">
                            <div class="box-lista-grupo">
                                <h4>{{ $curso->curso }}</h4>
                                <h6 class="area"> EAD | {{mb_strtoupper($curso->area)}}</h6>
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
                                    <a class="comprar" target="blank"
                                       href="https://www3.sfiec.org.br/pre_matricula/form_cadastro_pf/form_cadastro_pf.php?g_id_evento={{$curso->evento}}">INSCREVA-SE</a>
                                </li>
                                <li>
                                    <a href="cursos/{{$curso->idcurso}}/ead/{{str_slug($curso->curso)}}"> +
                                        DETALHES </a>
                                </li>
                            </ul>
                        </div>
                    @endforeach
                </div>


                {{--
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
                --}}
            </div>

        </article>
    </div>
@endsection

