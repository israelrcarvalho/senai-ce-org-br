<?php
/**
 * Created by PhpStorm.
 * User: ircarvalho
 * Date: 20/02/2017
 * Time: 13:37
 */

namespace App\IRC\Repositories;

use App\IRC\Models\GrupoNewsletter;

class GrupoNewsletterRepository extends BaseRepository
{

    protected $modelClass =  GrupoNewsletter::class;


    public function getGrupos($tipo = 'PF',$site)
    {

        $query = $this->newQuery();
        $query->select('gruponewsletter_id','gruponewsletter_nome');
        $query->where('gruponewsletter_site', $site);
        $query->where('gruponewsletter_publico', 1);
        $query->where('gruponewsletter_exibir_no_site', 1);
        $query->where('gruponewsletter_tipo', $tipo);
        $query->orderBy('gruponewsletter_nome','asc') ;
        return $this->doQuery($query,null,false);
    }

}
