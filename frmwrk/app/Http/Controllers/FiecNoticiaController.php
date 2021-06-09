<?php

namespace App\Http\Controllers;

use App\IRC\Repositories\ConteudoRepository;
use Request;

class FiecNoticiaController extends BaseController
{

    protected $path = 'fiec-noticia';
    protected $menuprincipal = 4;


    public function pesquisa(ConteudoRepository $cont)
    {
       // $tt =  $this->conteudoRepository->resultadoBusca(Request::input("qs"));
       //    echo "<pre>"; print_r($tt);
     //  exit;
        return view($this->path.'.resultado-pesquisa', [
            'listaPesquisa' =>  $cont->resultadoBusca(Request::input("qs"))
        ])->with(['pesquisa' => Request::get('qs')]);
    }


}
