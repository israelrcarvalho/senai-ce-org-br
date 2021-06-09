@extends('template.layout')

@section('title') Para Sindicato @endsection
@section('description') Página para sindicato @endsection
@section('keywords') para sindicato, keywords @endsection

@section('conteudo')
    {{-- menu superior --}}
    @include('shared.menu-superior')
    {{-- banners --}}
    @include('para-sindicato.banners-slides')
    @include('shared.barra-casas')
    <div class="bg-conteudo">
        <article class="conteudo">
            @include('para-sindicato.botoes')
            @include('shared.noticias-home')
            @include('para-industria.newsletter')
        </article>
    </div>

@endsection