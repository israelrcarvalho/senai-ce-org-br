<?php
/**
 * Created by PhpStorm.
 * User: ircarvalho
 * Date: 20/02/2017
 * Time: 13:37
 */

namespace App\IRC\Repositories;
use App\IRC\Models\TranspEstruturaRemuneratoria;

class TranspEstruturaRemuneratoriaRepository extends BaseRepository
{

    protected $modelClass = TranspEstruturaRemuneratoria::class;

    public function listaEst($siteId)
    {
        $query = $this->newQuery();
        $query->where('site_id', $siteId);
        return $this->doQuery($query,80,true);
    }

}
