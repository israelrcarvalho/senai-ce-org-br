@extends('template.layout')

@section('title'){{$conteudo->conteudo_nome}}@endsection
@section('description'){{strip_tags($conteudo->conteudo_resumo)}}@endsection
@section('googlebot'){{$conteudo->conteudo_description}}@endsection
@section('keywords'){{$conteudo->conteudo_keyword}}@endsection

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
                <li><a href="#">Publicações</a></li>
            </ul>
        </div>
    </div>
    <div class="bg-conteudo">
        <article class="conteudo interno">
            <div class="conteudo-texto interna">
                {!! $conteudo->conteudo_completo !!}

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