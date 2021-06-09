@extends('template.layout')

@section('title') Notícias @endsection
@section('description') Notícias @endsection
@section('keywords')Notícias @endsection

@section('conteudo')
    {{-- menu superior --}}
    @include('shared.menu-superior')
    <div class="bg-titulo">
        <div class="titulo">
            <ul>
                <li class="img">
                    <a href="?st=para-voce">
                        <img src="{{url(env('PATH_ASSETS').'/shared/images/btn/home.svg')}}" alt="Inicial" title="Inicial" />
                    </a>
                </li>
                <li><a href="#">Notícias</a></li>
            </ul>
        </div>
    </div>

    <div class="bg-conteudo">
        <article class="conteudo interna">
            <div class="conteudo-texto">
                <ul class="noticias-lista">
                    @foreach($conteudos as $c)
                        <li>
                            <a href="fiec-noticias/{{$c->conteudo_id }}/{{ str_slug($c->conteudo_nome) }}">
                                <img src="{{ getImagem($c->conteudo_resumo, true) }}" />
                                <h5> {{ $c->conteudo_nome }} </h5>
                                <p>
                                    {{ strip_tags($c->conteudo_resumo) }}
                                </p>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div class="paginacao">
                    {{$conteudos->links()}}
                </div>
            </div>
            @include('sobre-nos.menu-lateral-direita')
        </article>
    </div>


@endsection

