<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterRequest;
use App\IRC\Models\QueroContratar;
use App\IRC\Repositories\BannerRepository;
use App\IRC\Repositories\ConteudoRepository;
use App\IRC\Repositories\GrupoNewsletterRepository;
use App\IRC\Repositories\NewsletterRepository;
use App\IRC\Repositories\ServicosRepository;

use Illuminate\Http\Request;
use Mail;

class ParaIndustriaController extends BaseController
{

    protected $path = 'para-industria';
    protected $bannerCategorias = 34;
    protected $bannerQuantidade = 10;
    protected $menuprincipal = 2;
    protected $repository = NewsletterRepository::class;


    public function index_(BannerRepository $bannerRepository,ConteudoRepository $conteudoRepository, GrupoNewsletterRepository $gnews)
    {
        $banners = $bannerRepository->getSlideBanners($this->bannerCategorias, $this->bannerQuantidade);
        $noticias = $conteudoRepository->getConteudosPorCategoria(['803'],130);
        $menuprincipal = $this->menuprincipal ;
        $grupos = $gnews->getGrupos('PJ',131);

        return view($this->path . '.index', compact('banners','menuprincipal','noticias','grupos'));
    }


    /**
     *
     * @param NewsletterRequest $request
     * @param NewsletterRepository $insertNews
     * @return string
     */
    public function sendNewsletter(NewsletterRequest $request, NewsletterRepository $insertNews)
    {
        $dados = $request->all();
        unset($dados['grupo']);

        foreach ($request['grupo'] as $g) {

            $newsletter  =  array_merge(
                                $dados,
                                array('newsletter_grupo'=>$g),
                                array('newsletter_data'=>date('Y-m-d')),
                                array('newsletter_hora'=>date('H:i:s'))
                            );

            $insertNews->store($newsletter);
        }

        return "Enviado com sucesso!";
    }

    /**
     * Menu para-industria/unidades-moveis
     * @param ServicosRepository $unidade
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function unidadesMoveis(ServicosRepository $unidade)
    {
        return view($this->path.'.unidades-moveis',
            [
                'unidades'=>$unidade->getListaUnidadesMoveis(),
                'menuprincipal'=>$this->menuprincipal
            ]);
    }

    /**
     * @param $id
     * @param ServicosRepository $servicosRepository
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function unidadesMoveisContrate($id,ServicosRepository $servicosRepository){

              return view($this->path.'.unidades-moveis.form-contrate',
            [
               'servico'=>$servicosRepository->findByID($id),
                'menuprincipal'=>$this->menuprincipal
            ]);

    }

    /**
     * @param $id
     * @param ConteudoRepository $conteudoRepository
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function servicoContrate($id,ConteudoRepository $conteudoRepository){


        switch ($id){

            case 86771:
                $fileView = ".solucoes-em-educacao-profissional.form-contrate";
                break;
            case 86775:
                $fileView = ".projetos-de-inovacao.form-contrate";
                break;
            default:
                $fileView = ".solucoes-em-tecnologia-e-inovacao.form-contrate";
                break;
        }

/*

        if($id==86771){
           $fileView = ".solucoes-em-educacao-profissional.form-contrate";
        }
        // 86775
        */
        return view($this->path.$fileView,
            [
                'servico'=>$conteudoRepository->findByID($id),
                'menuprincipal'=>$this->menuprincipal
            ]);
    }

    /**
     * Menu para-industria/solucoes-em-tecnologia-e-inovacao
     * @param ConteudoRepository $conteudoRepository
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function solucoesEmTecnologiaEinovacao(ConteudoRepository $conteudoRepository) {

        return view($this->path.'.solucoes-em-tecnologia-e-inovacao',
            [
                'objConteudo'=>$conteudoRepository->getConteudosPorCategoria(['1176'],131,null,false),
                'menuprincipal'=>$this->menuprincipal
            ]);
    }

    /**
     * para servicos como unidades moveis
     * @param Request $request
     * @return string
     */
    public function sendQueroContratar(Request $request)
    {
        $data = $request->all();
        $msg = null;
        $queroContratar =
            [
                'contato' => $data['nome'],
                'empresa' => $data['empresa'],
                'departamento' => $data['departamento'],
                'cnpj' => $data['cnpj'],
                'telefone' => $data['telefone'],
                'email' => $data['email'],
                'mensagem' => $data['mensagem'],
                'site' => 'SENAI-CE',
                'site_id' => 131,
                'servico_solicitado' => $data['pag_contratar'],
                'email_copia' => !empty($data['email_copia']) ? 1 : 0,
                'data_cadastro' => date('Y-m-d H:i:s')
            ];

        $ok = QueroContratar::create($queroContratar);

        if ($ok) {

                $config_mail = [
                    'fale_conosco_mail_from' =>'portaldafiec@sfiec.org.br',
                    'fale_conosco_mail_nome_from' => 'SITE - SENAI',
                    'fale_conosco_mail_to' => 'vendas@sfiec.org.br',
                    'fale_conosco_mail_nome_to' => 'Central de Relacionamento',
                    'fale_conosco_mail_subject' => ' Quero Contratar - Página:' . $data['pag_contratar'],
                    'fale_conosco_mail_replayTo' => 'vendas@sfiec.org.br'
                ];

            Mail::send("template.emails.servico", ["input" => $data], function ($mail) use ($data, $config_mail) {

                $mail->from($config_mail['fale_conosco_mail_from'], $config_mail['fale_conosco_mail_nome_from']);
                $mail->to($config_mail['fale_conosco_mail_to'], $config_mail['fale_conosco_mail_nome_to']);
                $mail->subject($config_mail['fale_conosco_mail_subject']);
                $mail->replyTo($config_mail['fale_conosco_mail_replayTo'], $data['nome']);

                if (array_key_exists('email_copia', $data)) {
                    $mail->bcc($data['email'], $config_mail['fale_conosco_mail_nome_to']);
                    $mail->subject($config_mail['fale_conosco_mail_subject']);
                }
            });


            if (Mail::failures()) {

                return 'Não foi possível enviar a mensagem';
            }

         }
        return "Enviado com sucesso!";

        /*
        return redirect()->route('obrigado',
            [
                'idEvento' => $data['eventoid'],
                'slugModalidade' => $data['slugModalidade'],
                'slugNomeCurso' => str_slug($data['curso'])
            ])->withSuccess('Pré-Inscrição realizada com sucesso');
        */
    }

}
