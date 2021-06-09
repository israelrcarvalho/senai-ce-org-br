@extends('template.layout')

@section('title'){{$conteudo->conteudo_nome}}@endsection
@section('description'){{strip_tags($conteudo->conteudo_resumo)}}@endsection
@section('googlebot'){{$conteudo->conteudo_description}}@endsection
@section('keywords'){{$conteudo->conteudo_keyword}}@endsection

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
                <li><a href="sobre-nos/noticias">FIEC onLine</a></li>
            </ul>
        </div>
    </div>

    <div class="bg-conteudo">

        <article class="conteudo interno">
            <div class="conteudo-texto completo">
                <h2>{{$conteudo->conteudo_nome}}</h2>
                @include('fiec-noticia.redes-sociais-botoes')
                {!! $conteudo->conteudo_completo !!}
            </div>
        </article>
    </div>
@endsection

