@extends('template.layout')

@section('title') Busca SFIEC @endsection
@section('description') Pesquisa @endsection
@section('keywords') Pesquisa @endsection

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
                <li><a href="sobre-nos/noticias">Busca</a></li>
            </ul>
        </div>
    </div>

    <div class="bg-conteudo">

        <article class="conteudo">
            <div class="conteudo-texto completo">
                <div class="filtro"><h6>Buscando por:  {{$listaPesquisa->total()}} ocorrência(s) encontrada(s) </h6></div>
                <ul class="noticias-lista">
                <ul>
                    @foreach($listaPesquisa as $c)
                       <li>
                           <h5>
                               <a href="fiec-noticias/{{$c->conteudo_id }}/{{ str_slug($c->conteudo_nome) }}">
                               {{$c->conteudo_nome }}
                               </a>
                           </h5>
                           <p>{{strip_tags($c->conteudo_resumo) }}</p>

                           {{--@foreach($c->categoria as $cat)--}}
                               {{--<br/>{{$cat->categoria_nome}}  ->{{$cat->categoria_id}}--}}
                           {{--@endforeach--}}

                       </li>
                    @endforeach
                </ul>
                </ul>

                <div class="paginacao"><ul>
                        {!! $listaPesquisa->appends(['qs' => $pesquisa])->links() !!}
                    </ul>
                </div>



            </div>
        </article>
    </div>
@endsection
