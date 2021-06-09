@extends('template.layout')

@section('title') Transparência | Estrutura Remuneratória  @endsection
@section('description') bbbb @endsection
@section('googlebot') vvvvv @endsection
@section('keywords')xx @endsection
@section('styles')
    <link href="{{url(env('PATH_ASSETS').'/css/transparencia.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url(env('PATH_ASSETS').'/dataTables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('scripts')

    <script src="{{url(env('PATH_ASSETS').'/dataTables/datatables.min.js')}}" type="text/javascript"></script>

    <script type="text/javascript">

        $(document).ready(function(){

            $('#tespacos').DataTable({
                responsive: true,
                "paging": false,
                //dom: '<"html5buttons"B>lTfgitp', buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
                dom: '<"html5buttons"B>lTfgitp', buttons: ['excel', 'pdf'],
                "language": {
                    "sSearch": "Pesquisar"
                }
            });

        });
    </script>
@endsection

@section('conteudo')
    {{-- menu superior --}}
    @include('shared.menu-superior')

    <div class="bg-conteudo">
        <article class="conteudo">
            <div class="conteudo-texto">
                <h1>TRANSPARÊNCIA SENAI</h1>
                <div class="breadcrumb">
                    <a class="home">Transparência</a> > <a class="home">Lei de Diretrizes Orçamentárias</a> >  <a class="ativo">Estrutura Remuneratória</a>
                </div>
                <h2>Estrutura Remuneratória</h2>
                <h3>Departamento Nacional - SENAI CEARÁ</h3>
                <table id="tespacos" class="tabelaDownloads" width="100%">
                    <thead>
                    <tr>
                        <th width="20%">CARGO</th>
                        <th width="20%">PONTO INICIAL (R$)</th>
                        <th width="20%">PONTO FINAL (R$)</th>
                        <th width="20%">EMPREGADOS</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($listaEstrutura as $m)
                        <tr>
                            <td>{{ $m->cargo }}</td>
                            <td align="right">{{ decimalParaReais($m->ponto_inicial)}}</td>
                            <td align="right">{{ decimalParaReais($m->ponto_final) }}</td>
                            <td align="center">{{ $m->n_empregado }}</td>
                        </tr>
                        @empty
                        sem informações

                        @endforelse

                    </tbody>
                </table>

                <div id="notas">
                    <h4>Notas Informativas</h4>
                    <ul>
                        @forelse($listaEstrutura as $m)
                            @if(!empty($m->observacoes))
                            <li>{{$m->observacoes}}</li>
                            @endif
                        @empty
                            sem informações

                        @endforelse
                    </ul>

                </div>


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

