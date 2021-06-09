@extends('template.layout')

@section('title') @endsection
@section('description') @endsection
@section('keywords') @endsection

@section('conteudo')
    {{-- menu superior --}}
    @include('shared.menu-superior')
    <div class="bg-titulo">
        <div class="titulo">
            <ul>
                <li class="img">
                    <a href="para-voce">
                        <img src="{{url(env('PATH_ASSETS').'/shared/images/btn/home.svg')}}" alt="Inicial" title="Inicial" />
                    </a></li>
                <li><a href="#">Unidades</a></li>
            </ul>
            <form action="" method="get" class="form-selects">
                <select onchange="javascript:location.href = this.value;">
                    <option value="0">- Filtro -</option>
                    <option value="unidades">Todos</option>
                    <option value="unidades/1347/fortaleza">Fortaleza</option>
                    <option value="unidades/1486/maracanau">Maracanaú</option>
                    <option value="unidades/1377/horizonte">Horizonte</option>
                    <option value="unidades/1722/sobral">Sobral</option>
                    <option value="unidades/1451/juazeiro-do-norte">Juazeiro do Norte</option>
                </select>
            </form>
        </div>

    </div>

    <div class="bg-conteudo">

        <article class="conteudo">
            <div class="grupo-box box-margin">
              @foreach($unidades as $u)
                <div class="box-lista">
                    <div class="box-lista-grupo box-unidade">
                        <h6 class="area"><a href=""> {{$u->nome_cidade}}  </a></h6>
                        <h4>{{$u->bairro}}</h4>
                        <ul>
                            <li>ENDEREÇO: {{$u->endereco}}, - CEP: {{$u->cep}}</li>
                            <li>TELEFONE: {{$u->telefone}} </li>
                        </ul>
                    </div>
                    <ul class="box-lista-bts">
                        <li>
                            <a href="unidades/{{$u->unidade_id}}/{{str_slug($u->nome_cidade)}}/{{str_slug($u->bairro)}}"
                               class="comprar">+ INFORMAÇÕES
                            </a>
                        </li>
                        <li>
                            <a href="unidades/{{$u->unidade_id}}/{{str_slug($u->nome_cidade)}}/{{str_slug($u->bairro)}}#mapa-google">LOCALIZAÇÃO</a>
                        </li>
                    </ul>
                </div>
                @endforeach
            </div>
        </article>
    </div>

@endsection
