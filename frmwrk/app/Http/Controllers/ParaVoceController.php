<?php

namespace App\Http\Controllers;

use App\IRC\Models\DemandaPF;
use App\IRC\Repositories\BannerRepository;
use App\IRC\Repositories\ConteudoRepository;
use App\IRC\Repositories\CursoEmBreveRepository;
use App\IRC\Repositories\CursoRepository;
use App\IRC\Repositories\GrupoNewsletterRepository;
use Illuminate\Http\Request;
use Mail;


class ParaVoceController extends BaseController
{

    protected $path = 'para-voce';
    protected $bannerCategorias = 32;
    protected $bannerQuantidade = 10;

    protected $menuprincipal = 1;


    public function index_(CursoRepository $curso,  BannerRepository $bannerRepository,ConteudoRepository $conteudoRepository,GrupoNewsletterRepository $gnews)
    {

        return view($this->path . '.index',
            [
                'banners'=>$bannerRepository->getSlideBanners($this->bannerCategorias, $this->bannerQuantidade),
                'menuprincipal'=>$this->menuprincipal,
                'cursos'=>$curso->getCursosIndex(),
                'nomeDaModalidade'=>$this->cursosPorModalidade(['1','16'])->first()['modalidade'],
                'noticias'=>$conteudoRepository->getConteudosPorCategoria(['776'],130),
                'grupos' => $gnews->getGrupos('PF',3)
            ]);
    }


    public function cursosPorModalidade($idsModalidade = ['3']){
               $curso = new CursoRepository();
        return $curso->getCursoPorModalidade($idsModalidade);
    }

    public function cursosSabados_(){

        $curso = new CursoRepository();
        /*
        $sabado = 6;

        foreach ($curso->getCursosSabado() as $c) {
                 $dia = date("w", strtotime($c->dt_inicio_curso));
              if($dia==$sabado){

              }

        }
        */


        return $curso->getCursosSabado();
    }

    public function cursosPorModalidadeEmBreve($idsModalidade = ['3']){
        $curso = new CursoEmBreveRepository();
        return $curso->getCursoPorModalidade($idsModalidade);
    }

    public function cursosTecnicos(){

        $teste = $this->cursosPorModalidade(['1','16'])->first()['modalidade'];

        //print_r($teste);
       // exit;

        return view('cursos.cursos-por-modalidade',
            [
                'objCursos'=>$this->cursosPorModalidade(['1','16']),
                'objCursosEmBreve'=>$this->cursosPorModalidadeEmBreve(['1','16']),
                'nomeDaModalidade'=>$this->cursosPorModalidade(['1','16'])->first()['modalidade'],
                'nomeDaModalidade'=>$this->cursosPorModalidade(['1','16'])->first()['modalidade'],
                'menuprincipal'=>$this->menuprincipal
            ]
        );
    }


    public function cursosQualificacao(){

        return view('cursos.cursos-por-modalidade',
            [
                'objCursos'=>$this->cursosPorModalidade(['3']),
                'objCursosEmBreve'=>$this->cursosPorModalidadeEmBreve(['3']),
                'nomeDaModalidade'=>$this->cursosPorModalidade(['3'])->first()['modalidade'],
                'menuprincipal'=>$this->menuprincipal
            ]
        );
    }

    public function cursosCurtaDuracao(){

        return view('cursos.cursos-por-modalidade',
            [
                'objCursos'=>$this->cursosPorModalidade(['4','5']),
                'objCursosEmBreve'=>$this->cursosPorModalidadeEmBreve(['4','5']),
                'nomeDaModalidade'=>$this->cursosPorModalidade(['4'])->first()['modalidade'],
                'menuprincipal'=>$this->menuprincipal
            ]
        );
    }

    public function cursosEad(CursoRepository $curso, CursoEmBreveRepository $emBreve){

        return view('cursos.ead.index',
            [
                'objCursos'=>$curso->getCursosEad(),
              //  'objCursosEmBreve'=>$emBreve->getCursosEad(),
                'nomeDaModalidade'=>'EaD',
                'menuprincipal'=>$this->menuprincipal
            ]
        );
    }

    /**
     * @param CursoRepository $curso
     * @param int $idArea
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cursosPorArea(CursoRepository $curso,$idArea = 0){

        return view('cursos.cursos-por-area',
            [
                'objCursos'=>$curso->getCursosPorArea($idArea),
                // 'objCursosEmBreve'=>$this->cursosPorModalidadeEmBreve(['4','5']),
                'nomeDaModalidade'=>'cursos por area',
                'selectAreas'=>$this->selectHtmlArea(),
                'menuprincipal'=>$this->menuprincipal
            ]
        );
    }

    public function cursosPorUnidade(CursoRepository $curso,$idUnidade = 0){

        return view('cursos.cursos-por-unidade',
            [
                'objCursos'=>$curso->getCursosPorUnidade($idUnidade),
                'nomeDaModalidade'=>'cursos por Unidade',
                'selectAreas'=>$this->selectHtmlArea(),
                'menuprincipal'=>$this->menuprincipal
            ]
        );
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cursosSabados(){

        $curso = new CursoRepository();
        return view('cursos.sabado.index',
            [
                'objCursos'=>$curso->getCursosSabado(),
                'menuprincipal'=>$this->menuprincipal
            ]
        );
    }


    public function selectHtmlArea(){
        $curso = new CursoRepository();
        return $curso->getHtmlSelect();
    }

    public function detalhe($idCurso,CursoRepository $curso){

        $fileView = \Illuminate\Support\Facades\Request::segment(3) =='ead' ? 'ead.detalhe' :'detalhe-curso';

        return view('cursos.'.$fileView,

            [
                'curso'=>$curso->findByID($idCurso),
                'cursos'=>$curso->getCursosIndex(),
                'nomeDaModalidade'=>$this->cursosPorModalidade(['1','16'])->first()['modalidade'],
                'objTurmas'=>$curso->getTurmasPorCurso($idCurso),
                'conteudoProgramatico'=>$curso->conteudoProgramatico($idCurso),
                'cargaHorario'=>$curso->cargaHorariaTotalDoCursoPorEvento($idCurso)->first(),
                'menuprincipal'=>$this->menuprincipal
            ]);
    }

    /**
     * @param $idCurso
     * @param CursoEmBreveRepository $curso
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function detalheEmBreve($idCurso,CursoEmBreveRepository $curso){

        return view('cursos.detalhe-curso-em-breve',
            [
                'curso'=>$curso->findByID($idCurso),
                'objTurmas'=>$curso->getTurmasPorCurso($idCurso),
                'conteudoProgramatico'=>$curso->conteudoProgramatico($idCurso),
                'cargaHorario'=>$curso->cargaHorariaTotalDoCursoPorEvento($idCurso)->first(),
                'menuprincipal'=>$this->menuprincipal
            ]);
    }
// -----------------------------------------------------------------------------------------
    public function detalheSabado($idCurso,CursoRepository $curso){

        return view('cursos.sabado.detalhe',
            [
                'curso'=>$curso->findByID($idCurso),
                'objTurmas'=>$curso->getTurmasPorCurso($idCurso),
                'conteudoProgramatico'=>$curso->conteudoProgramatico($idCurso),
                'cargaHorario'=>$curso->cargaHorariaTotalDoCursoPorEvento($idCurso)->first(),
                'menuprincipal'=>$this->menuprincipal
            ]);
    }
// -----------------------------------------------------------------------------------------

    public function detalheEad($idCurso,CursoRepository $curso){

        return view('cursos.ead.detalhe',
            [
                'curso'=>$curso->findByID($idCurso),
                'objTurmas'=>$curso->getTurmasPorCurso($idCurso),
                'conteudoProgramatico'=>$curso->conteudoProgramatico($idCurso),
                'cargaHorario'=>$curso->cargaHorariaTotalDoCursoPorEvento($idCurso)->first(),
                'menuprincipal'=>$this->menuprincipal
            ]);
    }
// -----------------------------------------------------------------------------------------

//
    public function cancelarCompra(){

        return view('cursos.ead.form-cancelar');

    }

    public function preInscricao($idEvento,CursoRepository $curso){

        return view('cursos.form-inscricao',
            [
                'evento'=>$curso->preInscricaoEvento($idEvento)->first(),
                'menuprincipal'=>$this->menuprincipal
            ]);

    }

    /**
     * @param $idEvento
     * @param CursoEmBreveRepository $curso
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function aviseMe($idEvento,CursoEmBreveRepository $curso){

        return view('cursos.form-avise-me',
            [
                'evento'=>$curso->preInscricaoEvento($idEvento)->first(),
                'menuprincipal'=>$this->menuprincipal
            ]);

    }

//-----
    /**
     * Exibe os conteudos do menu da página EAD
     * http://www.senai-ce.org.br/cursos/a-distancia
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function exibeConteudoEad($id)
    {
        return view('cursos.exibe-conteudo',
            ['conteudo'=>$this->conteudoRepository->findByID($id)]
        );
    }

    /**
     * @param CursoRepository $curso
     * @param int $idCurso
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function turmasPorCurso(CursoRepository $curso,$idCurso = 0){

        return view('cursos.cursos-por-area',
            [
                'objCursos'=>$curso->getTurmasPorCurso($idCurso),
                'nomeDaModalidade'=>'cursos por area',
                'selectAreas'=>$this->selectHtmlArea(),
                'menuprincipal'=>$this->menuprincipal
            ]
        );
    }

    /**
     * @param Request $request
     * @return string
     */
    public function sendInscricao(Request $request)
    {
        $data = $request->all();
        $telefone = empty($data['telefone']) ? $data['celular'] : $data['telefone'] ;

        $cpf = !empty($data['cpf']) ? preg_replace( '/[^0-9]/', '', $data['cpf'] ) : '00000000000';
        $data['cpf'] = $cpf;
        $data['celular'] = !empty($data['celular']) ? $data['celular'] : $telefone;

        $demandaPF = [
            'data_demanda'=>date('Y-m-d H:i:s'),
            'id_forma_captacao'=>'10',
            'data_cadastro'=>date('Y-m-d H:i:s'),
            'data_alteracao'=>date('Y-m-d H:i:s'),
            'nome_contato'=>$data['nome'],
            'fone'=>preg_replace( '/[^0-9]/', '', $telefone ),
            'email'=>$data['email'],
            'cpf'=> $cpf,
            'id_forma_recebimento'=>$data['id_forma_recebimento'],
            'id_unidade'=>$data['idunidade'],
            'outros_servicos'=>'CURSO:'.$data['curso']
        ];


        $dpf = DemandaPF::create($demandaPF);

        $config_mail = [
            'fale_conosco_mail_from' => 'portaldafiec@sfiec.org.br',
            'fale_conosco_mail_nome_from'=>$data['nome'],
            'fale_conosco_mail_to'=>'centralderelacionamento@sfiec.org.br',
            'fale_conosco_mail_nome_to'=> 'Central de Relacionamento',
            'fale_conosco_mail_subject'=>'PRÉ-INSCRIÇÃO - Curso:'.$data['curso'],
            'fale_conosco_mail_replayTo'=>'centralderelacionamento@sfiec.org.br'
        ];

        Mail::send("cursos.pre-inscricao-template",  ["input" => $data], function ($mail) use ($data, $config_mail) {

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

        return redirect()->route('obrigado',
            [
                'idEvento' => $data['eventoid'],
                'slugModalidade' => $data['slugModalidade'],
                'slugNomeCurso' => str_slug($data['curso'])
            ])->withSuccess('Pré-Inscrição realizada com sucesso');
    }


    /**
     * @param Request $request
     * @return string
     */
    public function sendAviseMe(Request $request)
    {

        $data = $request->all();

        $demandaPF = [
            'data_demanda'=>date('Y-m-d H:i:s'),
            'id_forma_captacao'=>'10',
            'data_cadastro'=>date('Y-m-d H:i:s'),
            'data_alteracao'=>date('Y-m-d H:i:s'),
            'nome_contato'=>$data['nome'],
            'fone'=>preg_replace( '/[^0-9]/', '', $data['telefone'] ),
            'email'=>$data['email'],
            'id_forma_recebimento'=>'15',
            'id_unidade'=>$data['idunidade'],
            'outros_servicos'=>'CURSO:'.$data['curso']
        ];

        $dpf = DemandaPF::create($demandaPF);


        $config_mail = [
            'fale_conosco_mail_from' => 'portaldafiec@sfiec.org.br',
            'fale_conosco_mail_nome_from'=>$data['nome'],
            'fale_conosco_mail_to'=>'aviseme@sfiec.org.br',
            'fale_conosco_mail_nome_to'=> 'Central de Relacionamento',
            'fale_conosco_mail_subject'=>'Avise-me - Curso:'.$data['curso'],
            'fale_conosco_mail_replayTo'=>'aviseme@sfiec.org.br'
        ];

        Mail::send("cursos.avise-me-inscricao-template",  ["input" => $data], function ($mail) use ($data, $config_mail) {

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

        return redirect()->route('obrigadoAviseMe',
            [
                'idEvento' => $data['eventoid'],
                'slugModalidade' => $data['slugModalidade'],
                'slugNomeCurso' => str_slug($data['curso'])
            ])->withSuccess('Enviado com sucesso');

    }

}
