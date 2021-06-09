<?php
/**
 * Created by PhpStorm.
 * User: ircarvalho
 * Date: 20/02/2017
 * Time: 14:21
 */

namespace App\IRC\Repositories;
use App\IRC\Models\Download;

class DownloadRepository extends BaseRepository
{
    protected $modelClass = Download::class;

    /**
     * @param array $grupoId
     * @param int $limit
     * @param bool|true $paginate
     * @return Paginator|\Illuminate\Database\Eloquent\Collection
     */
    public function getDownloadsPorGrupo($grupoId = [73], $limit = 10, $paginate = true)
    {
        $query = $this->newQuery();
        $query->distinct();
        $query->select('downloads.*');
        $query->join('grupodownloads as gd', 'gd.grupodownload_id', '=', 'download_grupodownload');
        $query->where('gd.grupodownload_site',env('SITE_ID'));
        $query->where('download_publico', 1);
        $query->whereIn('download_grupodownload', $grupoId);
        $query->orderBy('download_id', 'desc');

       // echo $query->toSql();
        //exit;

        return $this->doQuery($query,$limit,$paginate);
    }
}