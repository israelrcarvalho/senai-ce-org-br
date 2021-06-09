@extends('template.layout')
@section('title') Contato @endsection
@section('description') @endsection
@section('keywords') @endsection

@section('conteudo')
    {{-- menu superior --}}
    @include('shared.menu-superior')
    <div class="bg-titulo">
        <div class="titulo">
            <ul>
                <li class="img">
                    <a href="index">
                        <img src="{{url(env('PATH_ASSETS').'/shared/images/btn/home.svg')}}" alt="Inicial"
                             title="Inicial"/>
                    </a>
                </li>
                <li><a href="?contato">Contato</a></li>
            </ul>
        </div>
    </div>

    <div class="bg-conteudo">
        <article class="conteudo">
            <br/><br/>
            <div class="conteudo-direita form">
                <img class="fale"
                     src="{{url(env('PATH_ASSETS').'/shared/images/rodape/queremos-ouvir-voce-formulario.png')}}"
                     alt="Queremos ouvir você!" title="Queremos ouvir você!"/>
                <p>
                    Solicite informações ou colabore com sugestões, críticas e elogios para melhorar nossas estruturas,
                    serviços e atendimento.
                </p>

                <p>
                    Entre em contato através do formulário ao lado ou pelo telefone (85) 4009.6300.</p>

                <p>Atendimento telefônico de segunda à sexta-feira, das 7h às 20h, e aos sábados, das 8h às 14h, exceto
                    em feriados nacionais ou locais.</p>

            </div>

            <div class="conteudo-texto form">
                <a name="topoform"></a>
                <div class='dialog'>
                    <span id='loader'><img src='assets/images/loader2.gif' alt=''/></span>
                </div>


                <form action="{{ action('ContatoController@sendContato') }}" method="get" class="formulario"
                      id="form-contato">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label class="duplo">
                        <strong>
                            <spam>*</spam>
                            Tipo de Atendimento:</strong>
                        <select class="tipo_atendimento" name="tipo_atendimento" required title="true">
                            <option value="PF">Pessoa Física</option>
                            <option value="PJ">Empresa</option>
                        </select>
                    </label>
                    <label class="duplo">
                        <strong>
                            <spam>*</spam>
                            Nome Completo:</strong>
                        <input type="text" name="nome" required alt="true"/>
                    </label>
                    <label class="duplo">
                        <strong>CPF:</strong>
                        <input class="cpf" type="text" name="cpf"/>
                    </label>
                    <label class="duplo">
                        <strong>
                            <spam>*</spam>
                            E-mail:</strong>
                        <input class="email" type="text" name="email" required alt="true"/>
                    </label>
                    <label class="duplo">
                        <strong>Telefone:</strong>
                        <input class="fone" type="text" name="telefone"/>
                    </label>
                    <label class="duplo">
                        <strong>Celular:</strong>
                        <input class="celular" type="text" name="celular"/>
                    </label>
                    <label class="duplo">
                        <strong>
                            <spam>*</spam>
                            Estado:</strong>
                        <select name="estado" title="true">
                            <option value="Acre">Acre</option>
                            <option value="Alagoas">Alagoas</option>
                            <option value="Amapá">Amapá</option>
                            <option value="Amazonas">Amazonas</option>
                            <option value="Bahia">Bahia</option>
                            <option selected="selected" value="Ceará">Ceará</option>
                            <option value="Distrito Federal">Distrito Federal</option>
                            <option value="Espírito Santo">Espírito Santo</option>
                            <option value="Roraima">Roraima</option>
                            <option value="Goiás">Goiás</option>
                            <option value="Maranhão">Maranhão</option>
                            <option value="Mato Grosso">Mato Grosso</option>
                            <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                            <option value="Minas Gerais">Minas Gerais</option>
                            <option value="Pará">Pará</option>
                            <option value="Paraíba">Paraíba</option>
                            <option value="Paraná">Paraná</option>
                            <option value="Pernambuco">Pernambuco</option>
                            <option value="Piauí">Piauí</option>
                            <option value="Rio De Janeiro">Rio de Janeiro</option>
                            <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                            <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                            <option value="Rondônia">Rondônia</option>
                            <option value="Tocantins">Tocantins</option>
                            <option value="Santa Catarina">Santa Catarina</option>
                            <option value="São Paulo">São Paulo</option>
                            <option value="Sergipe">Sergipe</option>
                        </select>
                    </label>
                    <label class="duplo">
                        <strong>
                            <spam>*</spam>
                            Cidade:</strong>
                        <input type="text" name="cidade" required alt="true"/>
                    </label>
                    <label class="clear">
                        <strong>
                            <spam>*</spam>
                            Assunto:</strong>
                        <select name="assunto" required title="true">
                            <option></option>
                            <option value="Informação">Informação</option>
                            <option value="Sugestão">Sugestão</option>
                            <option value="Elogio">Elogio</option>
                            <option value="Reclamação">Reclamação</option>
                        </select>
                    </label>
                    <label>
                        <strong>
                            <spam>*</spam>
                            Mensagem:</strong>
                        <textarea name="mensagem" cols="40" required rows="5"></textarea>
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="email_copia" checked="checked"/>
                        <strong>
                            <spam>*</spam>
                            Enviar cópia dessa mensagem para meu e-mail.</strong>
                    </label>
                    <label>

                        <input class="bt-submit" type="button" value="enviar">

                    </label>
                </form>

            </div>

        </article>
    </div>

@endsection

@section('styles')
    <link href="{{url(env('PATH_ASSETS').'/css/contato.css')}}" rel="stylesheet" type="text/css">
@stop
@section('scripts')
    <script src="{{url(env('PATH_ASSETS').'/shared/js/lib/jquery/jquery-validation-1.13.1/dist/jquery.validate.min.js')}}"
            type="text/javascript"></script>
    <script src="{{url(env('PATH_ASSETS').'/shared/js/lib/jquery/jquery.maskedinput.min.js')}}"
            type="text/javascript"></script>
    <script src="{{url(env('PATH_ASSETS').'/js/contato.js')}}" type="text/javascript"></script>
@stop