@extends('template.layout')

@section('title') Transparência | Contatos nos Estados  @endsection
@section('description') Transparência , Contatos nos Estados @endsection
@section('keywords')Transparência, Contatos nos Estados @endsection

@section('styles')
    <link href="{{url(env('PATH_ASSETS').'/css/transparencia.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url(env('PATH_ASSETS').'/css/contato.css')}}" rel="stylesheet" type="text/css">

@endsection

@section('conteudo')
    {{-- menu superior --}}
    @include('shared.menu-superior')

    <div class="bg-conteudo">
        <article class="conteudo">
            <div class="conteudo-texto">
                <h1>TRANSPARÊNCIA SENAI</h1>
                <div class="breadcrumb">
                    <a class="home">Transparência</a> > <a class="ativo">Contatos nos Estados</a>
                </div>
                <h2>Contatos nos Estados</h2>
                {{--<form>--}}
                    {{--<select id="select-unidades-estados">--}}

                <form action="" method="get">
                    <select onchange="javascript:location.href = this.value;">
                        <option value="">- Selecione o Estado -</option>
                        <option value="transparencia/contato-nos-estados/ac">Acre</option>
                        <option value="transparencia/contato-nos-estados/al">Alagoas</option>
                        <option value="transparencia/contato-nos-estados/ap">Amapá</option>
                        <option value="transparencia/contato-nos-estados/am">Amazonas</option>
                        <option value="transparencia/contato-nos-estados/ba">Bahia</option>
                        <option value="transparencia/contato-nos-estados/ce">Ceará</option>
                        <option value="transparencia/contato-nos-estados/df">Distrito Federal</option>
                        <option value="transparencia/contato-nos-estados/es">Espirito Santo</option>
                        <option value="transparencia/contato-nos-estados/go">Goiás</option>
                        <option value="transparencia/contato-nos-estados/ma">Maranhão</option>
                        <option value="transparencia/contato-nos-estados/mt">Mato Grosso</option>
                        <option value="transparencia/contato-nos-estados/ms">Mato Grosso do Sul</option>
                        <option value="transparencia/contato-nos-estados/mg">Minas Gerais</option>
                        <option value="transparencia/contato-nos-estados/pa">Pará</option>
                        <option value="transparencia/contato-nos-estados/pb">Paraíba</option>
                        <option value="transparencia/contato-nos-estados/pr">Paraná</option>
                        <option value="transparencia/contato-nos-estados/pe">Pernambuco</option>
                        <option value="transparencia/contato-nos-estados/pi">Piauí</option>
                        <option value="transparencia/contato-nos-estados/rj">Rio de Janeiro</option>
                        <option value="transparencia/contato-nos-estados/rn">Rio Grande do Norte</option>
                        <option value="transparencia/contato-nos-estados/rs">Rio Grande do Sul</option>
                        <option value="transparencia/contato-nos-estados/ro">Rondônia</option>
                        <option value="transparencia/contato-nos-estados/rr">Roraima</option>
                        <option value="transparencia/contato-nos-estados/sc">Santa Catarina</option>
                        <option value="transparencia/contato-nos-estados/sp">São Paulo</option>
                        <option value="transparencia/contato-nos-estados/se">Sergipe</option>
                        <option value="transparencia/contato-nos-estados/to">Tocantins</option>
                    </select>
                </form>

                <br>

                <div id="divs-unidades">
                    @if($listaUnidades)
                        <div id="divs-unidades">
                    @forelse($listaUnidades as $und)
                            <div class="box-unidade">
                                <div class="imagem-box">
                                    <img src="{{url(env('PATH_ASSETS').'/images/senai-transparencia.png')}}"/>
                                </div>
                                <div class="location">
                                    <div class="unit">{{$und->nomeUnidade }}</div>
                                </div>
                                <p>
                                    <strong>Endereço:</strong> {{$und->nomeRua . ', ' . $und->numeroEndereco . ' - ' . $und->nomeBairro . ' - ' . $und->nomeCidade . '/' . $und->uf }} <br />
                                    <strong>Tipo:</strong> {{$und->tipoUnidade }} <br />
                                    <strong>Responsável:</strong> {{$und->nomeResponsavel }}<br />
                                    <strong>Telefone</strong>: {{$und->telefone }}<br />
                                    <strong>Site:</strong> {{$und->site }}<br />
                                    <strong>Email:</strong> {{$und->email }}
                                </p>
                            </div>
                    @empty
                        sem informações
                    @endforelse
                            </div>

                        <div class="paginacao">{!! $listaUnidades->appends('page')->render() !!}</div>
                    @endif



                </div>
            </div>
            @include('transparencia.menu-lateral-direita')
        </article>
    </div>
@endsection



