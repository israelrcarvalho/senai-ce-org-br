@extends('template.layout')

@section('title') Transparência | Dados de Infraestrutura  @endsection
@section('description') Transparência , Dados de Infraestrutura @endsection
@section('keywords')Transparência ,Dados ,de, Infraestrutura @endsection
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
                {!! $objMCategoria->categoria_resumo !!}

                <table class="tabela" width="100%">
                    <thead>
                    <tr>
                        <td colspan="3">INFRAESTRUTURA</td>
                        <td colspan="5">INFRAESTRUTURA POR ATUAÇÃO</td>
                    </tr>
                    <tr>
                        <td>DR</td>
                        <td>Unidade Fixas</td>
                        <td>Unidade Móveis</td>
                        <td>Centros de Formação Profissional</td>
                        <td>Institutos de Inovação</td>
                        <td>Institutos de Tecnologia</td>
                        <td>Faculdade de Tecnologia</td>
                        <td>Atuação Conjuta</td>

                    </tr>
                    </thead>
                    <tr>
                        <td>CE</td>
                        <td>{{$unidadesFixas}}</td>
                        <td>{{$unidadesMoveis}}</td>
                        <td>{{$cfps}}</td>
                        <td>{{$instInovacao}}</td>
                        <td>{{$institutoDeTecnologia}}</td>
                        <td>{{$faculdadeDeTecnologia}}</td>
                        <td>{{$atuacaoConjuta}}</td>
                    </tr>

                </table>
            </div>
            @include('transparencia.menu-lateral-direita')
        </article>
    </div>
@endsection

