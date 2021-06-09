@extends('template.layout')

@section('title') Transparência | Lei de Diretrizes Orçamentárias  @endsection
@section('description')  Transparência | Lei de Diretrizes Orçamentárias  @endsection
@section('keywords') Transparência, Lei de Diretrizes Orçamentárias @endsection

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
                <h3>Departamento Nacional - SENAI CEARÁ</h3>
                    {!! $objMCategoria->categoria_descricao !!}
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
                <ul class="link-indent">
                    <p>Execução orçamentária dos anos anteriores</p>
                    @forelse($objMCategoriaMenuLei_ as $cMenu)
                        <li>
                            <a id=""
                               href="transparencia/{{str_slug($cMenu->link_url)}}">{{$cMenu->link_nome}} </a>
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

