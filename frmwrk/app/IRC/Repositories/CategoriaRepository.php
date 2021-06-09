<?php
/**
 * Created by PhpStorm.
 * User: ircarvalho
 * Date: 20/02/2017
 * Time: 14:21
 */

namespace App\IRC\Repositories;


use App\IRC\Models\Categoria;

class CategoriaRepository extends BaseRepository
{
    protected $modelClass = Categoria::class;

    public function menuTransparencia($catIdPai = 1222,$limit = 25,$paginate = true)
    {

        $query = $this->newQuery();
        $query->where('categoria_pai',$catIdPai);
        $query->where('categoria_ativo',1);
        return $this->doQuery($query,$limit,$paginate);
    }
}