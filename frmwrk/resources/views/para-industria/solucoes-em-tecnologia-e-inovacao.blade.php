@extends('template.layout')

@section('title') Soluções em Tecnologia e Inovação @endsection
@section('description') Soluções em Tecnologia e Inovação @endsection
@section('googlebot') Soluções em Tecnologia e Inovação @endsection
@section('keywords')  Soluções em Tecnologia e Inovação  @endsection
@section('styles')
    <style>
        .box-lista-grupo {height: auto; min-height: 251px }
        .box-lista { width: 30%; margin-right: 2%; margin-bottom: 2% }
        .botoes_interna { width: 20% }
        .conteudo-texto { width: 77% }
        @media only screen and (max-width: 950px){ .box-lista { width: 31%; margin: 1%; .botoes_interna { width: 7%; } }
        @media only screen and (max-width: 720px){ .box-lista { width: 47%; margin: 1%; }}
        @media only screen and (max-width: 620px){ .box-lista { width: 100%; margin: 1% 0; }}
    </style>
@endsection
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
                <li><a href="#">Soluções em Tecnologia e Inovação</a> </li>
            </ul>
        </div>
    </div>

    <div class="bg-conteudo">

        <article class="conteudo">
            <div class="conteudo-texto">
                <div class="grup-box">
                    @forelse($objConteudo as $obj)
                        <div class="box-lista">
                            <div class="box-lista-grupo"><h4>{{$obj->conteudo_nome}}</h4>
                                <ul>
                                    <li>
                                        <p>
                                            {!! substr($obj->conteudo_resumo, 0, 250) !!}
                                        </p>
                                    </li>
                                </ul>
                            </div>

                            <ul class="box-lista-bts">
                                <li>
                                    {{--
                                                          '/solucoes-em-tecnologia-e-inovacao/contrate/{id}/{slugServico}','ParaIndustriaController@servicoContrate' --}}
                                    <a href="para-industria/solucoes-em-tecnologia-e-inovacao/contrate/{{$obj->conteudo_id}}/{{str_slug($obj->conteudo_nome)}}"
                                       class="comprar"
                                       site="SENAI-CE"
                                       pag-contratar="Soluções em Tecnologia e Inovação - {{$obj->conteudo_nome}}"> CONTRATE </a>
                                </li>
                                <li><a href="para-industria/solucoes-em-tecnologia-e-inovacao/{{$obj->conteudo_id}}/{{str_slug($obj->conteudo_nome)}}">DETALHES</a></li>
                            </ul>

                            <ul class="box-lista-bts" style="display: none;">
                                <li>

                                    {{--
                                        /95339/paraindustria/solucoes-em-tecnologia-e-inovacao/consultoria-em-processo-produtivo


                                        para-industria/solucoes-em-tecnologia-e-inovacao/contrate/id/slugServico
                                    --}}
                                    <a href="para-industria/solucoes-em-tecnologia-e-inovacao/contrate/{{$obj->id}}/{{str_slug($obj->nome)}}"
                                       class="comprar"
                                       site="SENAI-CE" pag-contratar="Soluções em Tecnologia e Inovação - {{$obj->nome}}"> CONTRATE b </a>
                                </li>
                                <li>
                                    <a href="para-industria/solucoes-em-tecnologia-e-inovacao/{{$obj->conteudo_nome}}/contrate/25"
                                       class="comprar"
                                       site="SENAI-CE" pag-contratar="Unidade Móvel - Unidade Móvel de Confecção"> DETALHES </a>
                                </li>
                            </ul>
                        </div>
                    @empty
                                no data
                    @endforelse
                </div>
            </div>
            @include('para-industria.menu-lateral-direita')
        </article>
    </div>
@endsection