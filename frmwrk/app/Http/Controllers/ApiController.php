<?php

namespace App\Http\Controllers;
use App\IRC\Repositories\UnidadeRepository;

class ApiController extends BaseController
{

    protected $path = 'api';
    protected $menuprincipal = 3;



    public function listaUnidades(UnidadeRepository $unidade)
    {

        return response()->json(['unidades' => $unidade->getListaUnidadesApi()]);
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
