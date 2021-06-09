<?php

namespace App\Http\Controllers;
use App\IRC\Repositories\UnidadeRepository;

class UnidadeController extends BaseController
{

    protected $path = 'unidades';
    protected $menuprincipal = 3;

    public function listaUnidades(UnidadeRepository $unidade)
    {

        return view($this->path.'.unidades',
            [
                'unidades'=>$unidade->getListaUnidades(),
                'menuprincipal'=>$this->menuprincipal
            ]);
    }

    public function unidadesPorCidade($idMunicipio,UnidadeRepository $unidade)
    {

        return view($this->path.'.unidades',
            [
                'unidades'=>$unidade->getListaUnidadesPorCidade($idMunicipio),
                'menuprincipal'=>$this->menuprincipal
            ]);
    }

    public function exibeConteudoUnidade($id, UnidadeRepository $unidadeRepository)
    {
        $unidade = $unidadeRepository->findByID($id);
        $menuprincipal = $this->menuprincipal ;
        return view($this->path . '.exibe-conteudo', compact('unidade','menuprincipal'));
    }
}
