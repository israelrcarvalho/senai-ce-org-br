@extends('template.layout')

@section('title') Transparência > Integridade  @endsection
@section('description') Transparência , Integridade @endsection
@section('keywords') Transparência , Integridade @endsection
@section('styles')
    <link href="{{url(env('PATH_ASSETS').'/css/transparencia.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('conteudo')
    {{-- menu superior --}}
    @include('shared.menu-superior')

    <div class="bg-conteudo">
        <article class="conteudo">
            <div class="conteudo-texto">
                <h1>TRANSPARÊNCIA SENAI</h1>
                <div class="breadcrumb">
                    <a class="home">Transparência</a> > <a class="ativo">{{$objMCategoria->categoria_nome}}</a>
                </div>
                <h2>{!! $objMCategoria->categoria_nome !!}</h2>
                <h3>Departamento Nacional - SENAI CEARÁ</h3>
                {!! $objMCategoria->categoria_descricao !!}
                <ul class="link-titulo">
                    @forelse($objMCategoriaMenuLei as $cMenu)
                        <li>
                            <img src="{{url(env('PATH_ASSETS').'/images/baixar.svg')}}">
                            <a id=""
                               href="{{$cMenu->link_url}}"
                               target="_blank"
                               title="{{$cMenu->link_nome}}">{{$cMenu->link_nome}}</a>
                        </li>
                    @empty
                        <li>item não encontrado</li>
                    @endforelse
                </ul>
            </div>
            @include('transparencia.menu-lateral-direita')
        </article>
    </div>
@endsection

