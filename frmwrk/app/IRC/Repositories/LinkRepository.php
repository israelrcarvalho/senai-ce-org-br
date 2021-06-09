<?php
/**
 * Created by PhpStorm.
 * User: ircarvalho
 * Date: 20/02/2017
 * Time: 13:37
 */

namespace App\IRC\Repositories;
use App\IRC\Models\Link;

class LinkRepository extends BaseRepository
{

    protected $modelClass = Link::class;

    /**
     * @param int $idCategoria
     * @param int $idGrupo
     * @param null $limit
     * @param bool $paginate
     * @return Paginator|\Illuminate\Database\Eloquent\Collection
     */


    public function listaItensPorGrupoDb($idGrupo,$idCategoria){
        $query = $this->newQuery();
    }

    public function listaPorGrupoAndCategoria($idCategoria,$idGrupo, $limit = null ,$paginate = true)
    {

        $query = $this->newQuery();
        $query->join('grupolinks', 'grupolink_id', '=', 'link_secaos');
        $query->join('categorias', 'categoria_id', '=', 'link_categoria');
        $query->where('link_publico', 1);
        $query->where('categoria_id', $idCategoria);
        $query->where('grupolink_id', $idGrupo);
        $query->where('categoria_site', env('SITE_ID'));
        $query->orderBy('link_ordem','asc') ;
        return $this->doQuery($query,$limit,$paginate);
    }


    public function menuTransparencia_($idCategoria = 794,$idGrupo = 66, $idSite = 203, $limit = null ,$paginate = false)
    {

        $query = $this->newQuery();
        $query->join('grupolinks', 'grupolink_id', '=', 'link_secaos');
        $query->join('categorias', 'categoria_id', '=', 'link_categoria');
        $query->where('link_publico', 1);
        $query->where('categoria_id', $idCategoria);
        $query->where('grupolink_id', $idGrupo);
        $query->where('categoria_site', $idSite);
        $query->orderBy('link_id','asc') ;

        //echo $query->toSql();
        //exit;

        return $this->doQuery($query,$limit,$paginate);
    }
}
