@extends('template.layout')

@section('title') Contrate Pesquisa, Desenvolvimento e Inovação (PD&I) @endsection
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
    <script type="text/javascript" src="{{url(env('PATH_ASSETS').'/js/unidades-moveis.js')}}"></script>


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
                <li><a href="para-industria/{{$servico->conteudo_id}}/{{str_slug($servico->conteudo_nome)}}">Pesquisa, Desenvolvimento e Inovação (PD&I)</a></li>
                <li><a>Contrate</a></li>
            </ul>
        </div>
    </div>

    <div class="bg-conteudo">
        
        <article class="conteudo">
                <br/><br/>

            <div class="conteudo-texto form">
                <a name="topoform"></a>

                <div class='dialog'>
                    <span id='loader'><img src="{{url(env('PATH_ASSETS').'/images/loader2.gif')}}" alt=''/></span>
                </div>

                <form id="form-contratar" class="formulario" method="Post" novalidate="novalidate">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label class="duplo">
                        <strong><spam>*</spam> Empresa:</strong>
                        <input type="text" required="" name="empresa" alt="true" aria-required="true">
                    </label>
                    <label class="duplo">
                        <strong><spam></spam> Nome do contato:</strong>
                        <input type="text" required="" name="nome" alt="true" aria-required="true">
                    </label>
                    <label class="duplo">
                        <strong><spam></spam> Departamento:</strong>
                        <input type="text" required="" name="departamento" alt="true" aria-required="true">
                    </label>
                    <label class="duplo">
                        <strong><spam>*</spam>CNPJ:</strong>
                        <input class="cnpj_ valid" type="text" required="" name="cnpj" aria-required="true" aria-invalid="false">
                    </label>
                    <label class="duplo">
                        <strong><spam>*</spam> E-mail:</strong>
                        <input required="" class="email" type="text" name="email" alt="true" aria-required="true">
                    </label>
                    <label class="duplo">
                        <strong>Telefone:</strong>
                        <input class="fone" required="" type="text" name="telefone" aria-required="true">
                    </label>

                    <label>
                        <strong><spam>*</spam> Sobre sua solicitação:</strong>
                        <textarea required="" name="mensagem" cols="40" rows="5" aria-required="true"></textarea>
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="email_copia" checked="checked">
                        <strong><spam>*</spam> Enviar cópia dessa mensagem para meu e-mail.</strong>
                    </label>
                    <label>
                        <input class="bt-submit" type="button" value="enviar">
                    </label>
                    <input type="hidden" name="site" value="SENAI-CE">
                    <input type="hidden" name="site_id" value="131">
                    <input type="hidden" name="pag_contratar" value="{{$servico->conteudo_nome}}">
                </form>

            </div>
            <div class="conteudo-direita form  form texto panel">
                <h3>SOBRE O SERVIÇO</h3>
                <p>
                    {!! $servico->conteudo_resumo !!}
                </p>
            </div>
        </article>
    </div>
@endsection

