@extends('template.layout')

@section('title') Unidades Móveis @endsection
@section('description') Unidades Móveis @endsection
@section('googlebot') Unidades Móveis @endsection
@section('keywords')  Móveis @endsection
@section('styles')
    <style>
        .box-lista-grupo {height: auto; min-height: 251px }
        .box-lista { width: 30%; margin-right: 2%; margin-bottom: 2% }
        .botoes_interna { width: 20% }
        .conteudo-texto { width: 77% }
        @media only screen and (max-width: 950px){ .box-lista { width: 31%; margin: 1%; .botoes_interna { width: 7%; } }
        @media only screen and (max-width: 720px){ .box-lista { width: 47%; margin: 1%; }}
        @media only screen and (max-width: 620px){ .box-lista { width: 100%; margin: 1% 0; }}
    </style>
@endsection
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
                <li><a href="#">Unidades Móveis</a> </li>
            </ul>
        </div>
    </div>

    <div class="bg-conteudo">

        <article class="conteudo">
            <div class="conteudo-texto">

                <div class="grup-box">
                    @forelse($unidades as $v)
                        <div class="box-lista">
                            <div class="box-lista-grupo"><h4>{{$v->nome}}</h4>
                                <ul>
                                    <li>
                                        <p>
                                            {!! $v->descricao !!}
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <ul class="box-lista-bts">
                                <li>
                                    <a href="para-industria/unidades-moveis/contrate/{{$v->id}}/{{str_slug($v->nome)}}"
                                       class="comprar"
                                       site="SENAI-CE"
                                       pag-contratar="Unidade Móvel - {{$v->nome}}"> CONTRATE </a>
                                </li>
                                {{--<li><a class="btn">  FOTOS </a></li>--}}
                                <li><a class="btn">&nbsp; </a></li>
                            </ul>
                        </div>
                    @empty
                                no data
                    @endforelse
                </div>
            </div>
            @include('para-industria.menu-lateral-direita')
        </article>
    </div>
@endsection