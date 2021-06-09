@extends('template.layout')

@section('title') Para Você @endsection
@section('description') Página para você @endsection
@section('keywords') para você, keywords @endsection

@section('conteudo')
    {{-- menu superior --}}
    @include('shared.menu-superior')
    {{-- banners --}}
    @include('para-voce.banners-slides')
    {{-- barra casas --}}
    {{--@include('shared.barra-casas')--}}
    <div class="bg-conteudo">
        <article class="conteudo">
            @include('para-voce.botoes')
            @include('para-voce.cursos-home')
            @include('shared.noticias-home')
            @include('para-voce.newsletter')
            {{--@include('para-voce.videos-home')--}}
        </article>
    </div>

@endsection