@extends('template.layout')

@section('title') @endsection
@section('description') @endsection
@section('keywords') @endsection

@section('styles')
    <link href="{{url(env('PATH_ASSETS').'/css/form-inscricao-curso.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url(env('PATH_ASSETS').'/css/dialog.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url(env('PATH_ASSETS').'/css/pre-inscricao.css')}}" rel="stylesheet" type="text/css"/>

@endsection

@section('scripts')
    <script type="text/javascript" src="{{url(env('PATH_ASSETS').'/js/dialog.js')}}"></script>
    <script type="text/javascript"
            src="{{url(env('PATH_ASSETS').'/shared/js/lib/jquery/jquery-validation-1.13.1/dist/jquery.validate.min.js')}}"></script>
    <script type="text/javascript"
            src="{{url(env('PATH_ASSETS').'/shared/js/lib/jquery/jquery.maskedinput.min.js')}}"></script>
    <script type="text/javascript" src="{{url(env('PATH_ASSETS').'/js/pre-inscricao.js')}}"></script>

    <script>
        // Esconde a div dialog
        setTimeout(function () {
            $('div.dialog').fadeOut(600);
        }, 3000);
    </script>
@endsection

@section('conteudo')
    {{-- menu superior --}}
    @include('shared.menu-superior')
    <div class="bg-titulo">
        <div class="titulo">
            <ul>
                <li class="img">
                    <a href="para-voce">
                        <img src="{{url(env('PATH_ASSETS').'/shared/images/btn/home.svg')}}" alt="Inicial"
                             title="Inicial"/>
                    </a>
                </li>
                <li><a href="#">{{$evento->modalidade}}</a></li>
                <li><a>Avise-me</a></li>
            </ul>
        </div>
    </div>

    <div class="bg-conteudo">

        <article class="conteudo">
            <h3 class="titulo-separar"><a href="">{{$evento->curso}}</a></h3>

            @if (Session::has('success'))
                <div class='dialog' style="display:block;background-color: #4a7715">
                    {{ Session::get('success') }}
                </div>
            @endif

            <div class="conteudo-texto form">
                <p>Preencha o este formulário e em breve entraremos em contato com você.</p>

                <a name="topoform"></a>

                <div class='dialog'>
                    <span id='loader'><img src="{{url(env('PATH_ASSETS').'/images/loader2.gif')}}" alt=''/></span>
                </div>

                <form id="preinscricao" class="formulario" action="{{ action('ParaVoceController@sendAviseMe') }}"
                      method="Post">

                    <label class="clear">
                        <strong>
                            <spam>*</spam>
                            Nome:</strong>
                        <input type="text" name="nome" required title="Informe seu nome"/>
                    </label>
                    <label class="duplo">
                        <strong>
                            <spam>*</spam>
                            E-mail:</strong>
                        <input required class="email" type="text" name="email" required/>
                    </label>
                    <label class="duplo">
                        <strong>Telefone:</strong>
                        <input type="text" class="fone" name="telefone"/>
                    </label>


                    <label>
                        <input class="bt-submit" type="submit" value="enviar"/>
                    </label>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id_forma_recebimento" value="15"/>
                    <input type="hidden" name="curso" value="{{$evento->curso}}" placeholder="curso"/>
                    <input type="hidden" name="site" value="SENAI-CE" placeholder="site"/>
                    <input type="hidden" name="idcurso" value="{{$evento->idcurso}}" placeholder="idcurso"/>
                    <input type="hidden" name="idservico" value="0" placeholder="idservico"/>
                    <input type="hidden" name="eventoid" value="{{$evento->evento}}" placeholder="eventoid"/>
                    <input type="hidden" name="datainiciocurso" value="{{$evento->dt_inicio_curso}}"
                           placeholder="datainiciocurso"/>
                    <input type="hidden" name="idunidade" value="{{$evento->id_unidade_executora}}"
                           placeholder="idunidade"/>
                    <input type="hidden" name="nomeunidade" value="{{$evento->unidade_id}}" placeholder="nomeunidade"/>
                    <input type="hidden" name="slugModalidade" value="{{str_slug($evento->modalidade)}}"
                           placeholder="modalidade"/>

                </form>

            </div>
            <div class="conteudo-direita form  form texto panel">
                <h3>SOBRE O CURSO</h3>

                <p><strong>PERÍODO DO CURSO: </strong>{{$evento->dt_inicio_curso}} à {{$evento->dt_termino_curso}}<br>
                </p>

                <p><strong>HORÁRIO: </strong>{{ $evento->h_inicio }} às {{ $evento->h_fim }}<br></p>

                <p><strong>CIDADE: </strong>{{ $evento->cidade }}<br></p>

                <p><strong>UNIDADE: </strong>{{ $evento->unidade_id }}<br></p>

                <p><strong>VALOR: </strong> R$ {{$evento->valor_total}}<br></p>
            </div>
        </article>
    </div>
@endsection

