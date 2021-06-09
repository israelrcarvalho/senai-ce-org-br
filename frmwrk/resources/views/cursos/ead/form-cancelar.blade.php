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
                <li><a href="cursos/a-distancia">EAD</a></li>
                <li><a>Cancelar compra</a></li>
            </ul>
        </div>
    </div>

    <div class="bg-conteudo">

        <article class="conteudo">
            <br/><br/>
            @if (Session::has('success'))
                <div class='dialog' style="display:block;background-color: #4a7715">
                    {{ Session::get('success') }}
                </div>
            @endif

            <div class="conteudo-texto form">
                <a name="topoform"></a>

                <form id="form-cancelar" class="formulario" method="post" novalidate="novalidate">
                    <div id="nomepagina" style="display: block;"></div>
                    <label class="clear">
                        <strong>
                            <spam>*</spam>
                            Nome do contato:</strong>
                        <input type="text" tabindex="2" required="" name="contato" alt="true" aria-required="true">
                    </label>
                    <label class="duplo">
                        <strong>
                            <spam>*</spam>
                            E-mail:</strong>
                        <input type="text" tabindex="5" class="email" required="" name="email" alt="true"
                               aria-required="true">
                    </label>
                    <label class="duplo">
                        <strong>
                            <spam>*</spam>
                            CPF:</strong>
                        <input type="text" class="cpf" tabindex="1" required="" name="cpf" aria-required="true">
                    </label>
                    <label class="clear">
                        <strong>
                            <spam>*</spam>
                            Curso:</strong>
                        <input class="curso" required="required" tabindex="4" type="text" name="curso"
                               aria-required="true">
                    </label>
                    <label class="duplo">
                        <strong>
                            <spam>*</spam>
                            Telefone1:</strong>
                        <input type="text" class="fone" tabindex="1" required="" name="telefone1" aria-required="true">
                    </label>
                    <label class="duplo">
                        <strong>
                            <spam>*</spam>
                            Telefone2:</strong>
                        <input class="fone" required="required" tabindex="4" type="text" name="telefone"
                               aria-required="true">
                    </label>

                    <label class="clear">
                        <strong>
                            <spam>*</spam>
                            Mensagem:</strong>
                        <textarea name="mensagem" tabindex="6" required="" cols="40" rows="5"
                                  aria-required="true"></textarea>
                    </label>
                    <label>
                        <input class="bt-cancelar" tabindex="7" type="button" value="enviar">
                    </label>
                    <input type="hidden" name="site" value="">
                    <input type="hidden" name="site_id" value="">
                    <input type="hidden" name="pag_contratar" value="">
                </form>

            </div>
            @include('cursos.menu-ead')
            {{--<div class="conteudo-direita form  form texto panel">--}}
                {{--<h3>SOBRE O CURSO</h3>--}}
               {{--tytye--}}
            {{--</div>--}}
        </article>
    </div>
@endsection

