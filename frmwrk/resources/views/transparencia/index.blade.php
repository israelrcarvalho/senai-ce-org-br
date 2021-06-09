@extends('template.layout')

@section('title') titulo @endsection
@section('description') desc @endsection
@section('keywords') key @endsection

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
                {!! $objMCategoria->categoria_descricao !!}
                <ul>
                   @forelse($objMCategoriaMenu as $cMenu)
                       <li><a id="{{str_slug($cMenu->categoria_nome)}}"
                              href="transparencia/{{$cMenu->categoria_id}}/{{str_slug($cMenu->categoria_nome)}}">{{$cMenu->categoria_nome}}</a></li>
                    @empty
                       <li>item não encontrado</li>
                    @endforelse
                </ul>
                <a href="transparencia/fale-conosco"> <div class="bt sac">SAC - Serviço de Atendimento ao Consumidor</div></a>
            </div>
                @include('transparencia.menu-lateral-direita')
        </article>
    </div>
@endsection