<?php

namespace App\Http\Controllers;

use App\IRC\Repositories\BannerRepository;
use App\IRC\Repositories\CategoriaRepository;
use App\IRC\Repositories\ConteudoRepository;
use App\IRC\Repositories\LinkRepository;
use Illuminate\Support\Facades\View;

abstract class BaseController extends Controller
{

    protected $repositoryInstance;
    protected $rules = [];

    protected $bannerRepository;
    protected $conteudoRepository;
    protected $linkRepository;
    protected $categoriaRepository;

    public function __construct(
        BannerRepository $bannerRepository,
        ConteudoRepository $conteudoRepository,
        LinkRepository $linkRepository,
        CategoriaRepository $categoriaRepository
    ){
        $this->bannerRepository = $bannerRepository;
        $this->conteudoRepository = $conteudoRepository;
        $this->categoriaRepository = $categoriaRepository;

        $noticias = $this->conteudoRepository->getConteudosPorCategoria(['776'],60,false);

        $menuParaVoce      =  $linkRepository->listaPorGrupoAndCategoria(794,66,null,false);
        $menuParaIndustria =  $linkRepository->listaPorGrupoAndCategoria(793,66,null,false);
        $menuParaSindicato =  $linkRepository->listaPorGrupoAndCategoria(792,66,null,false);
        $menuSobreNos      =  $linkRepository->listaPorGrupoAndCategoria(830,66,null,false);

        $menuTransparencia =  $categoriaRepository->menuTransparencia(1222,null,false);

        //  public function listaItensPorGrupo($secaoId = 178,$catId = 1223,$limit = 25,$paginate = true)

        View::share(compact('noticias','menuParaVoce','menuParaIndustria','menuParaSindicato','menuSobreNos','menuTransparencia'));

    }

    protected function getRepository()
    {
        if ($this->repositoryInstance === null) {
            $this->repositoryInstance = new $this->repository;
        }

        return $this->repositoryInstance;
    }


    public function index()
    {
        $banners = $this->bannerRepository->getSlideBanners($this->bannerCategorias, $this->bannerQuantidade);
        $menuprincipal = $this->menuprincipal ;
        return view($this->path . '.index', compact('banners','menuprincipal'));
    }


    public function exibeConteudo($id)
    {
        $conteudo = $this->conteudoRepository->findByID($id);
        $menuprincipal = $this->menuprincipal ;
        return view($this->path . '.exibe-conteudo', compact('conteudo','menuprincipal'));
    }


}
