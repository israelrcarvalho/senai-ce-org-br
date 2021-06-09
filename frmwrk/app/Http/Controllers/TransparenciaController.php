<?php

namespace App\Http\Controllers;

use App\Http\Requests\TranspFaleConoscoRequest;
use App\IRC\Repositories\CategoriaRepository;
use App\IRC\Repositories\ConteudoRepository;
use App\IRC\Repositories\FaqRepository;
use App\IRC\Repositories\LinkRepository;
use App\IRC\Repositories\TransMembrosRepository;
use App\IRC\Repositories\TranspEstruturaRemuneratoriaRepository;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Mail;

class TransparenciaController extends BaseController
{

    protected $path = 'transparencia';
    protected $menuprincipal = 5;

    public function index()
    {
        try {

            $objMCategoria = new CategoriaRepository();
            return view('transparencia.index',
                [
                    'objMCategoria'=>$objMCategoria->findByID(1222),
                    'objMCategoriaMenu'=>$objMCategoria->menuTransparencia(1222),
                    'menuprincipal'=>$this->menuprincipal
                ]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function exibeConteudoTransp(CategoriaRepository $objMCategoria , LinkRepository $link,$id)
    {
        return view('transparencia.exibe-conteudo',
            [
                'objMCategoria'=>$objMCategoria->findByID($id),
                'objMCategoriaMenuLei'=>$link->menuTransparencia_($id,178),
                'objMCategoriaMenuLei_'=>$link->menuTransparencia_($id,179),
                'menuprincipal'=>$this->menuprincipal
            ]);
    }


    /**
     * @param CategoriaRepository $objMCategoria
     * @param LinkRepository $link
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function pagDemonstracoesContabeis(CategoriaRepository $objMCategoria , LinkRepository $link,$id)
    {

        return view('transparencia.demonstracoes-contabeis',
            [
                'objMCategoria'=>$objMCategoria->findByID($id),
                'objMCategoriaMenuLei'=>$link->menuTransparencia_($id,178),
               // 'objMCategoriaMenuLei_'=>$link->menuTransparencia_($id,179),
                'menuprincipal'=>$this->menuprincipal
            ]);
    }


    public function pagExecucaoOrcamentaria(CategoriaRepository $objMCategoria , LinkRepository $link)
    {

       return view('transparencia.execucao-orcamentaria',
            [
                'objMCategoria'=>$objMCategoria->findByID(1223),
                'objMCategoriaMenuLei'=>$link->menuTransparencia_(1223,178),
               // 'objMCategoriaMenuLei_'=>$link->menuTransparencia_($id,179),
                'menuprincipal'=>$this->menuprincipal
            ]);
    }

    public function pagEstruturaRemuneratoria(CategoriaRepository $objMCategoria , LinkRepository $link, TranspEstruturaRemuneratoriaRepository $er)
    {

        return view('transparencia.estrutura-remuneratoria',
            [
                'objMCategoria'=>$objMCategoria->findByID(1223),
                'objMCategoriaMenuLei'=>$link->menuTransparencia_(1223,178),
                'listaEstrutura'=>$er->listaEst(203),
                'menuprincipal'=>$this->menuprincipal
            ]);
    }

    public function pagRelacaoDeDirigentes(CategoriaRepository $objMCategoria , LinkRepository $link, ConteudoRepository $cont)
    {

        return view('transparencia.relacao-de-dirigentes',
            [
                'objMCategoria'=>$objMCategoria->findByID(1223),
                'objMCategoriaMenuLei'=>$link->menuTransparencia_(1223,178),
                'objDirigente'=>$cont->findByID(102687),
                'menuprincipal'=>$this->menuprincipal
            ]);
    }

    public function pagRelacaoDosMembros(CategoriaRepository $objMCategoria , LinkRepository $link, TransMembrosRepository $membros)
    {

        return view('transparencia.relacao-dos-membros-do-corpo-tecnico',
            [
                'objMCategoria'=>$objMCategoria->findByID(1223),
                'objMCategoriaMenuLei'=>$link->menuTransparencia_(1223,178),
                'membros'=>$membros->listaMembros(203),
                'menuprincipal'=>$this->menuprincipal
            ]);
    }

    public function pagGratuidade(CategoriaRepository $objMCategoria , LinkRepository $link,$id)
    {

        return view('transparencia.gratuidade',
            [
                'objMCategoria'=>$objMCategoria->findByID($id),
                'menuprincipal'=>$this->menuprincipal
            ]);
    }

    public function pagIntegridade(CategoriaRepository $objMCategoria , LinkRepository $link,$id)
    {

        return view('transparencia.integridade',
            [
                'objMCategoria'=>$objMCategoria->findByID($id),
                'objMCategoriaMenuLei'=>$link->menuTransparencia_($id,178),
                'menuprincipal'=>$this->menuprincipal
            ]);
    }

    public function pagDadosDeInfraestrutura(CategoriaRepository $objMCategoria , LinkRepository $link,$id)
    {
        try {

            return view('transparencia.dados-de-infraestrutura',
                [
                    'unidadesFixas'=>$this->getUnidades(3,1)[0]->quantidadeUnidades,
                    'unidadesMoveis'=>$this->getUnidades(3,2)[0]->quantidadeUnidades,
                    'cfps'=>$this->getAtivosDaUnidade(3,5)[0]->quantidadeUnidades,
                    'instInovacao'=>$this->getAtivosDaUnidade(3,6)[0]->quantidadeUnidades,
                    'institutoDeTecnologia'=>$this->getAtivosDaUnidade(3,7)[0]->quantidadeUnidades,
                    'faculdadeDeTecnologia'=>$this->getAtivosDaUnidade(3,8)[0]->quantidadeUnidades,
                    'atuacaoConjuta'=>$this->getAtivosDaUnidade(3,0)[0]->quantidadeUnidades,
                    'objMCategoria'=>$objMCategoria->findByID($id),
                    'menuprincipal'=>$this->menuprincipal

                ]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function pagContatoNosEstados()
    {

            return view('transparencia.contato-nos-estados',
                [
               //      'unidadesFixas'=>$this->getUnidades(3,1)[0]->unidades,
                    'menuprincipal'=>$this->menuprincipal,
                    'listaUnidades'=>''

                ]);

    }


    /**
     * Autor: clebio felix
     * Captura informações de unidades fixas e móveis
     *
     * @param integer $idEntidade 3 = SENAI, 2 = SESI
     * @param integer $codigoCategoria 1 = UNIDADE FIXA, 2 = UNIDADE MOVEL
     * @param string $uf Unidade Federal (Estado)
     * @return array Array de objetos stdClass
     */

    public function getUnidades($idEntidade = 3, $codigoCategoria = 1, $uf = 'ce') {

        try {
            $client = new Client(['base_uri'=>'http://ws.sistemaindustria.org.br/api-basi/v1']);
            $objUnidade = json_decode($client->request("GET", "transparencia/entidades/$idEntidade/categoriaAtivoRegioes/$codigoCategoria/estados/$uf")->getBody());

        } catch (ClientException $ex) {

            $response = new \stdClass();
            $response->quantidadeUnidades = '-'; // zero unidades
            return ['0' => $response];
        }


        return $objUnidade;
    }

    //---
    /**
     * Autor: clebio felix
     * A resposta é composta pela relação das respectivas unidades
     * de atendimento da atuação informada.
     * E para cada unidade a relação de ambientes e atuações.
     * Para unidades com apenas uma atuação, o nome da atuação está na relação de atributos da unidade.
     *
     * Já filtramos pelo estado do ceará (ce)
     *
     * Código de atuação
     *
     *  1 = Centro de Educação
     *  1 = Centro de Educação
     *  2 = Centro de Segurança e Saúde
     *  3 = Centro de Promoção da Saúde
     *  4 = Centro de Cultura
     *  5 = Centro de Formação Profissional
     *  6 = Instituto SENAI de Inovação
     *  7 = Instituto SENAI de Tecnologia
     *  8 = Faculdade de Tecnologia
     *  9 = Centro de Alimentação
     *  10 = Instituto de Inovação
     *
     * @param integer $codAtuacaoAtivo Código da área de atuação
     * @param integer $codEntidade Código da entidade (2 = SESI, 3 = SENAI)
     * @return array Array de objetos stdClass
     */
    public function getAtivosDaUnidade($codEntidade = 3,$codAtuacaoAtivo = 5) {

        try {

            $client = new Client(['base_uri'=>'http://ws.sistemaindustria.org.br/api-basi/v1']);
            $obj = json_decode($client->request("GET", "transparencia/entidades/$codEntidade/atuacaoRegioes/$codAtuacaoAtivo/estados/ce")->getBody());

        } catch (ClientException $ex) {

            $response = $ex->getResponse();
            $response->quantidadeUnidades = '-'; // zero unidades

            return  ['0' => $response ];
        }

        return $obj;
    }
    //---

    public function pagFaleConosco(){

        return view('transparencia.fale-conosco',
            [
                'menuprincipal'=>$this->menuprincipal
            ]);
    }

    public function sendFaleConosco(TranspFaleConoscoRequest $request)
    {
        $data = $request->all();

        $config_mail = [
            'fale_conosco_mail_from' => env('FALE_CONOSCO_MAIL_FROM'),
            'fale_conosco_mail_nome_from'=> env('FALE_CONOSCO_MAIL_NOME_FROM'),
            'fale_conosco_mail_to'=>env('FALE_CONOSCO_MAIL_TO'),
            'fale_conosco_mail_nome_to'=> env('FALE_CONOSCO_MAIL_NOME_TO'),
            'fale_conosco_mail_subject'=>env('FALE_CONOSCO_MAIL_SUBJECT'),
            'fale_conosco_mail_replayTo'=>env('FALE_CONOSCO_MAIL_REPLAY_TO')
        ];

        Mail::send($this->path . ".contato-template",  ["input" => $data], function ($mail) use ($data, $config_mail) {

            $mail->from($config_mail['fale_conosco_mail_from'], $config_mail['fale_conosco_mail_nome_from']);
            $mail->to($config_mail['fale_conosco_mail_to'], $config_mail['fale_conosco_mail_nome_to']);
            $mail->subject($config_mail['fale_conosco_mail_subject']);
            $mail->replyTo($config_mail['fale_conosco_mail_replayTo'], $data['nome']);

            if(array_key_exists('email_copia',$data)){

                $mail->bcc($data['email'], $config_mail['fale_conosco_mail_nome_to']);
                $mail->subject($config_mail['fale_conosco_mail_subject']);
            }
        });


        if (Mail::failures()) {

            return 'Não foi possível enviar a mensagem';
        }

        return "Enviado com sucesso!";

    }

    public function getCidadesPorEstado($sigla) {

        $query =  DB::table('tbl_cidades as c');
        $query->select('c.nome');
        $query->join('tbl_estados as e', 'e.cod_estados', '=', 'c.estados_cod_estados');
        $query->where('e.sigla', $sigla);

        return response()->json($query->get());

    }

    public function getCidadesPorEstadoApi($sigla) {

        $unidades = $this->getUnidades(3, 1,$sigla);
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        $teste = $unidades[0]->unidades;

        $col = new Collection($teste);
        $perPage = 6;
        $currentPageSearchResults = $col->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $entries = new LengthAwarePaginator($currentPageSearchResults, count($col), $perPage);

        $entries->setPath('transparencia/contato-nos-estados/'.$sigla);

        return view('transparencia.contato-nos-estados',
            [
                'listaUnidades'=>$entries,
                'menuprincipal'=>$this->menuprincipal,
            ]);


    }

    public function pagDuvidasFrequentes(FaqRepository $faqRepository){
        return view($this->path.'.duvidas-frequentes',
            [
                'faqs'=>$faqRepository->listaFaq(203)
            ]);
    }
}
