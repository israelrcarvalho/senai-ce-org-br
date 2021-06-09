@extends('template.layout')

@section('title') Listagem de Cursos por Unidade @endsection
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
                <li><a href="#">Cursos por Unidade</a></li>
            </ul>
            {{-- $selectAreas --}}
            <form action="" method="get" class="form-selects">

                <select name="sUnidadeId" onchange="javascript:location.href = this.value;">
                    <option value="0" selected="selected">- Selecione -</option>
                    <option value="cursos/por-unidade/25/senai-maracanau">&nbsp;&nbsp;SENAI Maracanaú</option>
                    <option value="cursos/por-unidade/22/senai-parangaba">&nbsp;&nbsp;SENAI Parangaba</option>
                    <option value="cursos/por-unidade/20/senai-jacarecanga">&nbsp;&nbsp;SENAI Jacarecanga</option>
                    <option value="cursos/por-unidade/96/senai-horizonte">&nbsp;&nbsp;SENAI Horizonte</option>
                    <option value="cursos/por-unidade/30/senai-sobral">&nbsp;&nbsp;SENAI Sobral</option>
                    <option value="cursos/por-unidade/21/senai-barra-do-ceara">&nbsp;&nbsp;SENAI Barra do Ceará</option>
                    <option value="cursos/por-unidade/23/senai-juazeiro-do-norte">&nbsp;&nbsp;SENAI Juazeiro do Norte</option>
                    <option value="cursos/por-unidade/26/senai-mucuripe">&nbsp;&nbsp;SENAI Mucuripe</option>
                </select>

            </form>
        </div>
    </div>

    <div class="bg-conteudo">

        <article class="conteudo">
            <div class="conteudo-texto completo">
                <div class="grupo-box">
                    @foreach ($objCursos as $unidades =>$cursos)
                        <h3 class="titulo-separar"><a>{{$unidades}}</a></h3>
                        @foreach ($cursos as $curso)

                            <div class="box-lista">
                                <div class="box-lista-grupo">
                                    <h4>{{ $curso->curso }}</h4>
                                    <h6 class="area"> PRESENCIAL  | {{mb_strtoupper($curso->area)}}</h6>
                                    <ul>
                                        <li>PERÍODO:  {{$curso->dt_inicio_curso }} a {{$curso->dt_termino_curso}}</li>
                                        <li>HORÁRIO:  {{$curso->h_inicio}} - {{$curso->h_fim}}</li>
                                        <li>CIDADE:   {{$curso->cidade}}</li>
                                        <li>UNIDADE:  {{$curso->unidade_id}}</li>
                                        <li>VALOR: R$ {{$curso->valor_total}} </li>
                                    </ul>
                                </div>

                                <ul class="box-lista-bts">

                                    <ul class="box-lista-bts">
                                        <li>
                                            <a class="comprar" href="cursos/{{$curso->evento}}/{{str_slug($curso->modalidade)}}/pre-inscricao/{{str_slug($curso->curso)}}">PRÉ-INSCRIÇÃO</a>
                                        </li>
                                        <li>
                                            <a href="cursos/{{$curso->idcurso}}/{{str_slug($curso->modalidade)}}/{{str_slug($curso->curso)}}"> + DETALHES </a>
                                        </li>
                                    </ul>

                                </ul>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </article>
    </div>
@endsection

