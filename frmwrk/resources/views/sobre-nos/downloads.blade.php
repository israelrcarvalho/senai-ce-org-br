@extends('template.layout')

@section('title')  @endsection
@section('description') @endsection
@section('googlebot')  @endsection
@section('keywords') @endsection

@section('conteudo')
    {{-- menu superior --}}
    @include('shared.menu-superior')
    @section('styles')
    <link href="{{url(env('PATH_ASSETS').'/css/publicacoes.css')}}" rel="stylesheet" type="text/css" />
    @endsection
    <div class="bg-titulo">
        <div class="titulo">
            <ul>
                <li class="img">
                    <a href="para-voce">
                        <img src="{{url(env('PATH_ASSETS').'/shared/images/btn/home.svg')}}" alt="Inicial" title="Inicial" />
                    </a>
                </li>
                <li><a href="#">Downloads</a></li>
            </ul>
            <form action="" method="get" class="form-selects">

                <select name="gid" onchange="javascript:location.href = this.value;">
                    <option value="">- Selecione - </option>
                    <option value="sobre-nos/downloads/73/publicacoes">Publicações</option>
                    <option value="sobre-nos/downloads/74/plano-de-cursos">Plano de Cursos</option>
                    <option value="sobre-nos/downloads/198/contratos-ead">Contratos EaD</option>
                    <option value="sobre-nos/downloads/209/regulamentos">Regulamentos</option>
                </select>
            </form>
        </div>
    </div>
    <div class="bg-conteudo">
        <article class="conteudo interno">
            <div class="conteudo-texto interna">
                <div id="publicacoes">
                    <table class="tabela_tuplicacoes">
                        <thead>
                        <tr>
                            <td width="70%">Publica&ccedil;&atilde;o</td>
                            <td width="15%">Ano</td>
                            <td width="15%">Download</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($downs as $down)
                            <tr>
                                <td iddoc="{{$down->download_id}}" class="td_titulo">{{$down->download_nome}}</td>
                                <td>{{$down->download_data_inicio}}</td>
                                <td>
                                    <a href="{{$down->download_file}}"
                                       title="Resolução 23/2016"
                                       class="bt_pdf">pdf</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            @include('sobre-nos.menu-lateral-direita')
        </article>
    </div>
@endsection

@section('scripts')
    <script src="{{url(env('PATH_ASSETS').'/js/publicacoes.js')}}" type="text/javascript"></script>
@endsection