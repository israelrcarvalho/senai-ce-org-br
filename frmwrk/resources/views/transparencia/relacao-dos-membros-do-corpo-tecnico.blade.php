@extends('template.layout')

@section('title') Transparência | Relação dos Membros do Corpo Técnico  @endsection
@section('description') Transparência | Relação dos Membros do Corpo Técnico @endsection
@section('keywords')Transparência , Relação dos Membros do Corpo Técnico @endsection

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
                    <a class="home">Transparência</a> > <a class="home">Lei de Diretrizes Orçamentárias</a> > <a class="ativo">Relação dos Membros do Corpo Técnico</a>
                </div>
                <h2>Relação dos Membros do Corpo Técnico</h2>
                <h3>Departamento Nacional - SENAI CEARÁ</h3>

                <table class="tabela" width="100%">
                    <thead>
                    <tr>
                        <td width="10%">NOME</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($membros as $m)
                    <tr>
                        <td>{{$m->nome}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>


                {{--<ul class=\"$classe\">".$aux.$show."</ul>--}}

                <P>VEJA TAMBÉM</P>
                <ul>
                    @forelse($objMCategoriaMenuLei as $cMenu)
                        <li>
                            <a id=""
                               href="{{$cMenu->link_url}}">{{$cMenu->link_nome}}</a>
                        </li>
                    @empty
                        <li>item não encontrado</li>
                    @endforelse
                </ul>
                {!! $objMCategoria->categoria_descricao !!}

            </div>
            @include('transparencia.menu-lateral-direita')
        </article>
    </div>
@endsection

