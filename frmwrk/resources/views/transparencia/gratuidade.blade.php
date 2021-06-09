@extends('template.layout')

@section('title') Transparência | Gratuidade  @endsection
@section('description') Transparência ,Gratuidade @endsection
@section('keywords')Transparência ,Gratuidade @endsection
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
                    <a class="home">Transparência</a> &gt; <a class="ativo">Gratuidade</a>
                </div>
                <h2>{!! $objMCategoria->categoria_nome !!}</h2>
                <h3>Departamento Nacional - SENAI CEARÁ</h3>
                {!! $objMCategoria->categoria_descricao !!}
            </div>
            @include('transparencia.menu-lateral-direita')
        </article>
    </div>
@endsection

