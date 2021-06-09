<?php

namespace App\Http\Controllers;

class ParaSindicatoController extends BaseController
{

    protected $path = 'para-sindicato';
    protected $bannerCategorias = 31;
    protected $bannerQuantidade = 10;
    protected $menuprincipal = 3;

    public function associados()
    {
        return view($this->path . '.associados',['menuprincipal'=>$this->menuprincipal]);
    }


}
