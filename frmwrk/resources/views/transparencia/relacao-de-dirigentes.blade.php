@extends('template.layout')

@section('title') Transparência | Relação de Dirigentes  @endsection
@section('description') Transparência | Relação de Dirigentes @endsection
@section('keywords') Transparência ,Relação de Dirigentes @endsection

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
                    <a class="home">Transparência</a> > <a class="home">Lei de Diretrizes Orçamentárias</a> >  <a class="ativo">Relação de Dirigentes</a>
                </div>
                <h2>Relação de Dirigentes</h2>
                <h3>Departamento Nacional - SENAI CEARÁ</h3>
                {!! $objDirigente->conteudo_completo !!}
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

