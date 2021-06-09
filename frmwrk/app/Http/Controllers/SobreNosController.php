<?php

namespace App\Http\Controllers;

use App\IRC\Repositories\ConteudoRepository;
use App\IRC\Repositories\DownloadRepository;

class SobreNosController extends BaseController
{

    protected $path = 'sobre-nos';
    protected $menuprincipal = 4;



    public function listaNoticias(ConteudoRepository $objCont)
    {

        return view($this->path.'.noticias',
            [
                'conteudos'=>$objCont->getConteudosPorCategoria(['774'],130, 15,true),
                'menuprincipal'=>$this->menuprincipal
            ]);
    }


    public function publicacoes(DownloadRepository $down)
    {
        return view($this->path.'.publicacoes',
            [
                'downs'=>$down->getDownloadsPorGrupo([73],55),
                'conteudo'=>$this->conteudoRepository->findByID(86822),
                'menuprincipal'=>$this->menuprincipal
            ]
        );
    }

    public function downloads($idgrupo = 73, DownloadRepository $down)
    {
        return view($this->path.'.downloads',
            [
                'downs'=>$down->getDownloadsPorGrupo([$idgrupo],55),
              // 'conteudo'=>$this->conteudoRepository->findByID(86822),
                'menuprincipal'=>$this->menuprincipal
            ]
        );
    }
}
