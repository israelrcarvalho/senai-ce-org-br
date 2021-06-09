@extends('template.layout')

@section('title') Para Indústria @endsection
@section('description') Página para industria @endsection
@section('keywords') para industria, keywords @endsection

@section('conteudo')
    {{-- menu superior --}}
    @include('shared.menu-superior')
    {{-- banners --}}
    @include('para-industria.banners-slides')
    {{--@include('shared.barra-casas')--}}
    <div class="bg-conteudo">
        <article class="conteudo">
            @include('para-industria.botoes')
            @include('shared.noticias-home')
            @include('para-industria.newsletter')
        </article>
    </div>

@endsection