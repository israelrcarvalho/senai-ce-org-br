<?php
/**
 * Created by PhpStorm.
 * User: ircarvalho
 * Date: 20/02/2017
 * Time: 13:37
 */

namespace App\IRC\Repositories;
use App\IRC\Models\TransMembros;

class TransMembrosRepository extends BaseRepository
{

    protected $modelClass = TransMembros::class;

    public function listaMembros($siteId)
    {
        $query = $this->newQuery();
        $query->where('site_id', $siteId);
        return $this->doQuery($query,80,true);
    }

}
