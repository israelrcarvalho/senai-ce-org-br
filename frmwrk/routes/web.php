<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('http://www1.sfiec.org.br/apps/cms/');
});
*/


use App\Http\Middleware\CheckRoute;

Route::get('/' , 'IndexController@index');
Route::get('/index' , 'IndexController@index');

// Administração
Route::get('/admin', function () {
    return redirect("http://www1.sfiec.org.br/apps/cms/");
});


Route::get('/contato', 'ContatoController@contato')->name('formContato');
Route::post('/contato', 'ContatoController@sendContato')->name('testexxx');
Route::get('/get-cidades/{uf}', 'TransparenciaController@getCidadesPorEstado')->name('get-cidades');
Route::post('/newsletter', 'ParaIndustriaController@sendNewsletter')->name('news');


// PARA VOCÊ
Route::group(['prefix'=>'para-voce'], function() {

    Route::get('/', 'ParaVoceController@index_')->name('paravoce');
    Route::get('/{id}/{slug}','ParaVoceController@exibeConteudo');
    Route::get('/agenda-de-eventos','ParaVoceController@agenda');

});


// CURSOS
Route::group(['prefix'=>'cursos'], function() {

    Route::get('/tecnicos', 'ParaVoceController@cursosTecnicos');
    Route::get('/qualificacao-profissional', 'ParaVoceController@cursosQualificacao');
    Route::get('/curta-duracao', 'ParaVoceController@cursosCurtaDuracao');

    Route::get('/por-area', 'ParaVoceController@cursosPorArea');
    Route::get('/por-unidade', 'ParaVoceController@cursosPorUnidade');


    // ROTAS PARA SÁBADO
    // Lista Todos os cursos aos sábados
    Route::get('/sabado','ParaVoceController@cursosSabados');
    // Detalhes
    Route::get('/sabado/{idCurso}/{slugModalidade}/{slugNomeCurso}','ParaVoceController@detalheSabado');
    // Formulário de pré-inscrição
    Route::get('/sabado/{idEvento}/{slugModalidade}/pre-inscricao/{slugNomeCurso}','ParaVoceController@preInscricao')->name('preinscricaos');

    // ROTAS PARA EAD
    Route::get('/a-distancia', 'ParaVoceController@cursosEad'); // Lista Todos os cursos EAD
    Route::get('/ead/{idConteudo}/{slugConteudo}','ParaVoceController@exibeConteudoEad'); // Conteudos sobre EAD
    Route::get('/ead/cancelar-compra','ParaVoceController@cancelarCompra');

    //http://getic06/senai-ce.org.br/cursos/1087/ead/assistente-administrativo-ead
    // --------------------------------------

    Route::get('/por-area/{id}/{slug}','ParaVoceController@cursosPorArea');
    Route::get('/por-unidade/{id}/{slug}','ParaVoceController@cursosPorUnidade');

    Route::get('/{idCurso}/{slugModalidade}/{slugNomeCurso}','ParaVoceController@detalhe')->where('idCurso', '[0-9]+')->name('detalheCurso');


    Route::get('/em-breve/{idCurso}/{slugModalidade}/{slugNomeCurso}','ParaVoceController@detalheEmBreve');

   // chama o form pre
    Route::get('/{idEvento}/{slugModalidade}/pre-inscricao/{slugNomeCurso}','ParaVoceController@preInscricao')->name('preinscricao');



    // Chama o form avise-me dos cursos
    Route::get('/em-breve/{idEvento}/{slugModalidade}/avise-me/{slugNomeCurso}','ParaVoceController@aviseMe')->name('aviseme');


    Route::post('/sendinscricao','ParaVoceController@sendInscricao')->name('sendInscricao');
    Route::post('/sendAviseMe','ParaVoceController@sendAviseMe')->name('sendAviseMe');

    Route::get('/{idEvento}/{slugModalidade}/pre-inscricao/{slugNomeCurso}/obrigado','ParaVoceController@preInscricao')->name('obrigado')->middleware(CheckRoute::class);
    Route::get('/em-breve/{idEvento}/{slugModalidade}/avise-me/{slugNomeCurso}/obrigado','ParaVoceController@aviseMe')->name('obrigadoAviseMe');

});

// PARA INDUSTRIA
Route::group(['prefix'=>'para-industria'], function() {

    Route::get('/', 'ParaIndustriaController@index_');
    Route::get('/{id}/{slug}','ParaIndustriaController@exibeConteudo');
    Route::get('/{id}/solucoes-em-tecnologia-e-inovacao/{slug}','ParaIndustriaController@exibeConteudo');

    // UNIDADES MOVEIS
    Route::get('/unidades-moveis','ParaIndustriaController@unidadesMoveis');
    Route::get('/unidades-moveis/contrate/{id}/{slugServico}','ParaIndustriaController@unidadesMoveisContrate');

    Route::post('/querocontratar','ParaIndustriaController@sendQueroContratar');


    // Route::post('/fale-conosco', 'TransparenciaController@sendFaleConosco')->name('faleConosco');


    // Soluções em Tecnologia e Inovação
    Route::get('/solucoes-em-tecnologia-e-inovacao','ParaIndustriaController@solucoesEmTecnologiaEinovacao');
    Route::get('/solucoes-em-tecnologia-e-inovacao/contrate/{id}/{slugServico}','ParaIndustriaController@servicoContrate');
    Route::get('/solucoes-em-tecnologia-e-inovacao/{id}/{slug}','ParaIndustriaController@exibeConteudo');


    // Soluções em Educação Profissional
    Route::get('/{id}/contrate/{slugServico}','ParaIndustriaController@servicoContrate');




//http://getic06/senai-ce.org.br/para-industria/solucoes-em-tecnologia-e-inovacao/100244/ensaios-de-proficiencia-calibracao-dimensional
});

// UNIDADES
Route::group(['prefix'=>'unidades'], function() {

    Route::get('/'                              ,'UnidadeController@listaUnidades');
    Route::get('/{idCidade}/{slugCidade}'       ,'UnidadeController@unidadesPorCidade');
    Route::get('/{id}/{slugCidade}/{slugBairro}','UnidadeController@exibeConteudoUnidade');

});


// PARA SINDICATO
Route::group(['prefix'=>'para-sindicato'], function() {

    Route::get('/', 'ParaSindicatoController@index');
    Route::get('/{id}/{slug}','ParaSindicatoController@exibeConteudo');
    Route::get('/associados', 'ParaSindicatoController@associados')->name('associados');

});

// SOBRE NÓS
Route::group(['prefix'=>'sobre-nos'], function() {

    Route::get('/{id}/{slug}','SobreNosController@exibeConteudo');
    Route::get('/noticias'   ,'SobreNosController@listaNoticias');
    Route::get('/publicacoes','SobreNosController@publicacoes');

   Route::get('/downloads','SobreNosController@downloads');
   Route::get('/downloads/{idGrupo}/{nomeGrupo}','SobreNosController@downloads');
});


// TRANSPARENCIA
Route::group(['prefix'=>'transparencia'], function() {

    Route::get('/','TransparenciaController@index');
    // Route::get('/{idCategoria}/{slugCategoriaNome}','TransparenciaController@exibeConteudoTransp');

    Route::get('/{idCategoria}/lei-de-diretrizes-orcamentarias','TransparenciaController@exibeConteudoTransp');

    Route::get('/{idCategoria}/demonstracoes-contabeis','TransparenciaController@pagDemonstracoesContabeis');

    // Route::get('/{idCategoria}/execucao-orcamentaria','TransparenciaController@pagExecucaoOrcamentaria');

   Route::get('/ldo/execucao-orcamentaria','TransparenciaController@pagExecucaoOrcamentaria');
   Route::get('/ldo/estrutura-remuneratoria','TransparenciaController@pagEstruturaRemuneratoria');
   Route::get('/ldo/relacao-de-dirigentes','TransparenciaController@pagRelacaoDeDirigentes');
   Route::get('/ldo/relacao-dos-membros','TransparenciaController@pagRelacaoDosMembros');


    Route::get('/{idCategoria}/gratuidade','TransparenciaController@pagGratuidade');

    Route::get('/{idCategoria}/integridade','TransparenciaController@pagIntegridade');
    Route::get('/{idCategoria}/dados-de-infraestrutura','TransparenciaController@pagDadosDeInfraestrutura');

    Route::get('/fale-conosco','TransparenciaController@pagFaleConosco');
    Route::post('/fale-conosco', 'TransparenciaController@sendFaleConosco')->name('faleConosco');

    // Route::get('/contato-nos-estados/{uf}','TransparenciaController@pagContatoNosEstados')->name('transp-unidades');

    // Route::get('/get-cidades-api/{uf}', 'TransparenciaController@getCidadesPorEstadoApi')->name('get-cidades-api');
    Route::get('/contato-nos-estados','TransparenciaController@pagContatoNosEstados');

    Route::get('/contato-nos-estados/{uf}','TransparenciaController@getCidadesPorEstadoApi');


    Route::get('/duvidas-frequentes','TransparenciaController@pagDuvidasFrequentes');

});


// noticias
Route::group(['prefix'=>'fiec-noticias'], function() {

    //Route::get('{id}/{slug}',['as'=>'fiec-noticia','uses'=>'SiteController@singleContent']);
    Route::get('{id}/{slug}',['as'=>'fiec-noticia','uses'=>'FiecNoticiaController@exibeConteudo']);
    Route::get('pesquisa',   ['as' => 'pesquisa',   'uses' => 'FiecNoticiaController@pesquisa']);

});


// API
//Route::group(['prefix'=>'api'], function() {
//
//    Route::get('/unidades','ApiController@listaUnidades');
//
//});