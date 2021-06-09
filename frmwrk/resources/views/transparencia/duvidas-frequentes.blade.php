@extends('template.layout')

@section('title') Transparência | Dúvidas Frequentes  @endsection
@section('description') Transparência , Dúvidas Frequentes @endsection
@section('keywords')Transparência, Dúvidas Frequentes @endsection
@section('styles')
    <link href="{{url(env('PATH_ASSETS').'/css/transparencia.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url(env('PATH_ASSETS').'/css/contato.css')}}" rel="stylesheet" type="text/css">

@endsection

@section('conteudo')
    {{-- menu superior --}}
    @include('shared.menu-superior')

    <div class="bg-conteudo">
        <article class="conteudo">
            <div class="conteudo-texto">
                <h1>TRANSPARÊNCIA SENAI</h1>
                <div class="breadcrumb">
                    <a class="home">Transparência</a> > <a class="ativo">Dúvidas Frequentes</a>
                </div>
                <h2>Dúvidas Frequentes</h2>
                <div class="faq">
                    @forelse($faqs as $faq)
                        <div class="duvida">
                            {{$faq->pergunta}} <span class="plus" aria-hidden="true"></span>
                        </div>
                        <div class="resposta">{{$faq->resposta}}</div>
                    @empty
                        sem dados
                    @endforelse
                </div>

            </div>
            @include('transparencia.menu-lateral-direita')
        </article>
    </div>
@endsection



