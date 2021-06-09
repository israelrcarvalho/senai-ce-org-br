@extends('template.layout')

@section('title'){{$unidade->unidade_nome}}@endsection
@section('description'){{strip_tags($unidade->descricao)}}@endsection
@section('keywords'){{$unidade->unidade_nome}}@endsection

@section('conteudo')
    {{-- menu superior --}}
    @include('shared.menu-superior')
    <div class="bg-titulo">
        <div class="titulo">
            <ul>
                <li class="img">
                    <a href="para-voce">
                        <img src="{{url(env('PATH_ASSETS').'/shared/images/btn/home.svg')}}" alt="Inicial" title="Inicial" />
                    </a>
                </li>
                <li><a href="unidades">Unidade</a></li>
                <li><a href="#">{{$unidade->bairro}}</a></li>
            </ul>
        </div>
    </div>
    <div class="bg-conteudo">
        <article class="conteudo interno">
            <div class="conteudo-texto interna">
                {!! $unidade->descricao !!}
                <a name="mapa-google"></a><h3>LOCALIZAÇÃO</h3>
                <p>
                    {!! $unidade->endereco !!} - {!! $unidade->bairro !!} - CEP: {!!$unidade->cep!!}, {!! name_case($unidade->nome_cidade) !!} -  {!!$unidade->uf!!}
                    <br />Telefone: <strong>{!! $unidade->telefone !!}</strong></p>
                <iframe width="680" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="{{$unidade->url_google_maps}}"></iframe>
            </div>
                @include('unidades.menu-lateral-direita')
        </article>
    </div>
@endsection