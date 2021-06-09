<?php
/**
 * Created by PhpStorm.
 * User: ircarvalho
 * Date: 20/02/2017
 * Time: 14:21
 */

namespace App\IRC\Repositories;
use App\IRC\Models\Banner;
use Illuminate\Support\Facades\DB;

class BannerRepository extends BaseRepository
{
    protected $modelClass = Banner::class;

    public function getSlideBanners($grupoId = 36, $limit = 10, $paginate = true)
    {
        $query = $this->newQuery();
        $query->where('banner_publico', 1);
        $query->where('banner_grupobanner', $grupoId);
        $query->orderBy('banner_ordem','asc') ;
        $query->where('grupobanner_site', env('SITE_ID'));
        $query->whereRaw('(CURDATE() BETWEEN DATE(banner_data_inicio) AND DATE(banner_data_fim))');
        $query->join('grupobanners as gb', 'banner_grupobanner', '=', 'gb.grupobanner_id');

        return $this->doQuery($query,$limit,$paginate);
    }

    public function getListaRevistas($grupoId = 36, $limit = 10, $paginate = true)
    {
        $query = $this->newQuery();
        $query->where('banner_publico', 1);
        $query->where('banner_grupobanner', $grupoId);
        $query->orderBy(DB::raw('YEAR(banner_data_inicio)'),'desc');
        $query->orderBy(DB::raw('MONTH(banner_data_inicio)'),'desc');
        $query->where('grupobanner_site', env('SITE_ID'));
        $query->join('grupobanners as gb', 'banner_grupobanner', '=', 'gb.grupobanner_id');


        return $this->doQuery($query,$limit,$paginate);
    }
}