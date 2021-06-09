@extends('template.layout')

@section('title') Transparência | Fale Conosco  @endsection
@section('description') Transparência , Fale Conosco @endsection
@section('keywords') Transparência , Fale Conosco@endsection
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
                    <a class="home">Transparência</a> > <a class="ativo">Fale Conosco</a>
                </div>
                <h2>Fale Conosco</h2>
                <p>
                    O <a href="http://www.portaldaindustria.com.br/senai/" target="_blank" class="titulo-senai">Serviço Nacional de Aprendizagem Industrial (SENAI)</a> é reconhecido
                    como modelo de educação profissional e pela qualidade dos serviços
                    tecnológicos que promovem a inovação na indústria brasileira. Desde
                    que foi criado em 1942, o SENAI formou mais de 55 milhões de
                    profissionais. <a href="http://www.portaldaindustria.com.br/senai/institucional/o-que-e-o-senai/" target="_blank" class="titulo-senai">Clique</a> aqui para saber mais sobre o SENAI.
                    <br><br>
                    Caso você queira saber mais sobre os cursos e ações do SENAI, você pode
                    buscar informações diretamente em uma unidade no seu Estado. <a href="http://www.portaldaindustria.com.br/senai/contato-unidades/
" target="_blank" class="titulo-senai">Clique
                        aqui</a> para ter acesso aos telefones e endereços de todos os
                    Departamentos Regionais.
                    <br><br>
                    Preencha os campos abaixo com as informações solicitadas para entrar
                    em contato com o Sistema Indústria.
                </p>


                <a name="topoform"></a>

                <div class='dialog'>
                    <span id='loader'><img src="{{url(env('PATH_ASSETS').'/images/loader2.gif')}}" alt=''/></span>
                </div>


                <form id="form-contato" class="formulario" action="{{ action('TransparenciaController@sendFaleConosco') }}" method="Post">
                    <input type="hidden" name="site_id" value="3">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label class="duplo">
                        <p>E-mail *</p>
                        <input id="email" name="email" type="email" required tabindex="2">
                    </label>
                    <label class="duplo">
                        <p>Nome Completo *</p>
                        <input id="nome" name="nome" type="text" minlength="7" required="" tabindex="1">
                    </label>

                    <label class="duplo">
                        <p>Telefone</p>
                        <input id="telefone" class="fone" type="text" name="telefone" tabindex="4">
                    </label>

                    <label class="duplo">
                        <p>Empresa</p>
                        <input id="empresa" type="text" name="empresa" tabindex="3">
                    </label>

                    <label class="duplo">
                        <p>Cidade *</p>
                        <select id="select-cidades-transp" required name="cidade" tabindex="6" disabled>
                        </select>
                    </label>
                    <label class="duplo">
                        <p>Estado *</p>
                        <select id="select-estados-transp" required name="uf" title="trueX" tabindex="5">
                            <option value=""> - Selecione seu estado - </option>
                            <option value="ac">Acre</option>
                            <option value="al">Alagoas</option>
                            <option value="ap">Amapá</option>
                            <option value="am">Amazonas</option>
                            <option value="ba">Bahia</option>
                            <option value="ce">Ceará</option>
                            <option value="df">Distrito Federal</option>
                            <option value="es">Espírito Santo</option>
                            <option value="rr">Roraima</option>
                            <option value="go">Goiás</option>
                            <option value="ma">Maranhão</option>
                            <option value="mt">Mato Grosso</option>
                            <option value="ms">Mato Grosso do Sul</option>
                            <option value="mg">Minas Gerais</option>
                            <option value="pa">Pará</option>
                            <option value="pb">Paraíba</option>
                            <option value="pr">Paraná</option>
                            <option value="pe">Pernambuco</option>
                            <option value="pi">Piauí</option>
                            <option value="rj">Rio De Janeiro</option>
                            <option value="rn">Rio Grande do Norte</option>
                            <option value="rs">Rio Grande do Sul</option>
                            <option value="ro">Rondônia</option>
                            <option value="to">Tocantins</option>
                            <option value="sc">Santa Catarina</option>
                            <option value="sp">São Paulo</option>
                        </select>
                    </label>

                    <label class="duplo">
                        <p>Categoria *</p>
                        <select id="select-categoria-usuario" name="cat_usuario" required="" aria-required="true" tabindex="8">
                            <option value="" selected="" disabled="">Selecione uma Categoria</option>
                            <option value="empresa">Empresa</option>
                            <option value="estudante">Estudante</option>
                            <option value="gestor">Gestor de RH</option>
                            <option value="governo">Governo</option>
                            <option value="industria">Indústria</option>
                            <option value="professores">Professores/Pesquisadores</option>
                            <option value="trabalhador_da_industria">Trabalhador da indústria</option>
                            <option value="nda">Outros</option>
                        </select>
                    </label>

                    <label class="duplo">
                        <p>Assunto *</p>
                        <div class="select-style select-style-02">
                            <select id="select-assunto" class="text" name="assunto" required="" aria-required="true" tabindex="7">
                                <option value="" selected="" disabled="">Selecione um Assunto</option>
                                <option value="duvidas">Envio de case de sucesso</option>
                                <option value="informacoes">Cancelamento de pedido</option>
                                <option value="inscricao">Solicitação de informações</option>
                                <option value="sugestoes">Sugestões</option>
                                <option value="nda">Publicações e pesquisas</option>
                                <option value="nda">Elogios</option>
                                <option value="nda">Outro assunto</option>
                            </select>
                        </div>
                    </label>

                    <label class="clear">
                        <p>Instituição *</p>
                        <input id="instituicao" type="text" name="instituicao" required="" tabindex="9">
                    </label>

                    <label>
                        <p>Mensagem *</p>
                        <textarea name="mensagem" id="mensagem" minlength="10" required="" cols="40" rows="5" tabindex="10"></textarea>
                    </label>

                    {!! app('captcha')->display() !!}

                    <label class="bg-orange">
                        <input class="bt-submit" type="button" value="enviar">
                    </label>




                </form>

            </div>
            @include('transparencia.menu-lateral-direita')
        </article>
    </div>
@endsection



