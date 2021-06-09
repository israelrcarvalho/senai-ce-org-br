@extends('template.layout')

@section('title') Transparência | Execução Orçamentária  @endsection
@section('description')  Transparência | Execução Orçamentária @endsection
@section('keywords')  Transparência , Execução Orçamentária @endsection

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
                    <a class="home">Transparência</a> > <a class="home">Lei de Diretrizes Orçamentárias</a> >  <a class="ativo">Execução Orçamentária</a>
                </div>
                <h2>{!! $objMCategoria->categoria_nome !!}</h2>
                <h3>Departamento Nacional - SENAI CEARÁ</h3>

                    <iframe width="100%" height="500" src="http://ldo.portaldaindustria.com.br/publico/embed/208d17dc11794"
                            frameborder="0" allowfullscreen></iframe>

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

