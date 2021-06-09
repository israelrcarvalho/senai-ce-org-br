<?php
/**
 * Created by PhpStorm.
 * User: ircarvalho
 * Date: 20/02/2017
 * Time: 13:37
 */

namespace App\IRC\Repositories;

use App\IRC\models\Faq;

class FaqRepository extends BaseRepository
{

    protected $modelClass = Faq::class;

    public function listaFaq($siteId)
    {
        $query = $this->newQuery();
        $query->where('site', $siteId);
        return $this->doQuery($query,15,true);
    }

}
