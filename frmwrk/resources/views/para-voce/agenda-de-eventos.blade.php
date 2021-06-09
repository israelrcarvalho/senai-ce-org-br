@extends('template.layout')

@section('title')Agenda de Eventos @endsection
@section('description') Agenda de Eventos  @endsection
@section('googlebot') Agenda de Eventos @endsection
@section('keywords') Agenda de Eventos @endsection

@section('conteudo')
    {{-- menu superior --}}
    @include('shared.menu-superior')
    <div class="bg-titulo">
        <div class="titulo">
            <ul>
                <li class="img"')}}>
                    <a href="para-voce">
                        <img src="{{url(env('PATH_ASSETS').'/shared/images/btn/home.svg')}}" alt="Inicial" title="Inicial"/>
                    </a>
                </li>
                <li><a href="#">Agenda de Eventos</a></li>
            </ul>
        </div>
    </div>
    <div class="bg-conteudo">
        <!-- Revista Fiec START -->
        <div class="fluid-none">
            <div class="conteudo">

                <div class="conteudo corpo-b" style="padding-top: 20px;">

                    @forelse($agenda as $a)

                        <div class="coluna-meio coluna-gap">
                            <ul class="coluna coluna-titulo">
                                <li>{{$a->nome}}</li>
                            </ul>
                            <ul class="coluna box-border">
                                <li>
                                    <img src="{{url(env('PATH_ASSETS').'/images/agenda.svg')}}" class="icone-eventos">
                                    {{$a->dt_inicio}}<br>
                                </li>
                                <li>
                                    <img src="{{url(env('PATH_ASSETS').'/images/clock.svg')}}" class="icone-eventos">
                                    {{$a->hora_inicio}} às {{$a->hora_fim}}<br>
                                </li>
                                <li>
                                    <img src="{{url(env('PATH_ASSETS').'/images/promotor.svg')}}" class="icone-eventos">
                                    Promotor: {{$a->promotor}}.<br>
                                </li>
                                <li>
                                    <img src="{{url(env('PATH_ASSETS').'/images/contato.svg')}}" class="icone-eventos">
                                    Contato: {{$a->solicitado}} - {{$a->fone_solicitante}}<br>
                                </li>
                                <li>
                                    <img src="{{url(env('PATH_ASSETS').'/images/localizacao.svg')}}" class="icone-eventos">
                                    Local: {{$a->onde}}<br>
                                </li>
                            </ul>
                        </div>
                    @empty
                        <p>Sem informações</p>
                    @endforelse

                </div>

            </div>
        </div>
    </div>
@endsection