@extends('template.layout')

@section('title'){{$conteudo->conteudo_nome}}@endsection
@section('description'){{strip_tags($conteudo->conteudo_resumo)}}@endsection
@section('googlebot'){{$conteudo->conteudo_description}}@endsection
@section('keywords'){{$conteudo->conteudo_keyword}}@endsection

@section('conteudo')
    <div class="bg-titulo">
        <div class="titulo">
            <ul>
                <li class="img"><a href="para-voce"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/btn/home.svg" alt="Inicial" title="Inicial" /></a></li>
                <li><a href="#">Publicações</a></li>
            </ul>
        </div>
    </div>

    <div class="bg-conteudo">

        <article class="conteudo interno">
            <div class="conteudo-texto @if(Request::segment(2)!='fiecnoticias') interna @else completo @endif">
                <h2>Publicações</h2>
                {!! $conteudo->conteudo_completo !!}
            </div>
            <style>
                .odd {
                    background: #ccc;
                }
            </style>
            @include('para-industria.menu-lateral-direita')
            <div id="publicacoes">
                <table class="tabela_tuplicacoes" width="70%">
                    <thead>
                    <tr>
                        <td width="70%">Publica&ccedil;&atilde;o</td>
                        <td width="15%">Ano</td>
                        <td width="15%">Download</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($downloads as $down)
                        <tr>
                            <td class="td_titulo">{{$down->download_nome}}</td>
                            <td>{{$down->download_data_inicio}}</td>
                            <td><a title="{{$down->download_nome}}" class="bt_pdf" href="{{$down->download_file}}">pdf</a></td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </article>
    </div>
@endsection

@section('styles')
    <link href="css/publicacoes.css" rel="stylesheet" type="text/css">
@stop

@section('scripts')
    <script type="text/javascript" src="js/publicacoes.js"></script>
@stop
