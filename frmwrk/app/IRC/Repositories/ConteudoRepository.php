<?php
/**
 * Created by PhpStorm.
 * User: ircarvalho
 * Date: 20/02/2017
 * Time: 14:21
 */

namespace App\IRC\Repositories;
use App\IRC\Models\Conteudo;

class ConteudoRepository extends BaseRepository
{
    protected $modelClass = Conteudo::class;

    /**
     * @param array $categoriaId
     * @param int $site
     * @param int $limit
     * @param bool|true $paginate
     * @return Paginator|\Illuminate\Database\Eloquent\Collection
     */
    public function getConteudosPorCategoria($categoriaId = ['776'], $site = 131, $limit = 4, $paginate = true)
    {
        $query = $this->newQuery();
        $query->distinct();
        $query->select('conteudos.*');
        $query->join('conteudo_categorias as cc', 'conteudos.conteudo_id', '=', 'cc.conteudo_id');
        $query->join('categorias as cat', 'cat.categoria_id', '=', 'cc.categoria_id');
        $query->where('cat.categoria_site', $site);
        $query->where('conteudo_publico', 1);
        $query->whereIn('cat.categoria_id', $categoriaId);
        $query->where('cat.categoria_ativo', 1);
        $query->whereRaw('(CURDATE() BETWEEN DATE(conteudo_data_inicio) AND DATE(conteudo_data_fim) OR conteudo_nao_expira =1)');
        $query->orderBy('conteudo_id', 'desc');

        // echo $query->toSql();
        // exit;

        return $this->doQuery($query,$limit,$paginate);
    }

    public function resultadoBusca($string)
    {
        $idSite = env('SITE_ID');
       // $string = 'cotema';

        try {
            $orWhere = ("(conteudos.conteudo_nome LIKE '%$string%' OR conteudos.conteudo_completo LIKE '%$string%' OR conteudos.conteudo_resumo LIKE '%$string%')");
            $query = $this->newQuery();
            $query->distinct();
            $query->whereRaw($orWhere);
            $query->leftJoin('conteudo_categorias as tcc', 'tcc.conteudo_id','=', 'conteudos.conteudo_id');
            $query->leftJoin('categorias as tcat', 'tcat.categoria_id','=', 'tcc.categoria_id');
            $query->leftJoin('conteudo_secaos as cs', 'cs.conteudo_id','=', 'conteudos.conteudo_id');
            $query->leftJoin('secaos as se', 'se.secao_id','=', 'cs.secao_id');
            $query->where("conteudos.conteudo_publico", 1);
            $query->whereIn("tcat.categoria_id", [774,805,807,1186]);
            $query->orderBy("conteudos.conteudo_data_inicio", "DESC");
            $query->orderBy("conteudos.conteudo_id", "DESC");

            $query->select(
                "conteudos.conteudo_id",
                "conteudos.conteudo_nome",
                   "conteudos.conteudo_completo",
                    "conteudos.conteudo_resumo",
                    "conteudos.conteudo_subtitulo"
            ) ;

            $query->groupBy("conteudos.conteudo_id",
                "conteudos.conteudo_nome",
                            "conteudos.conteudo_completo",
                            "conteudos.conteudo_resumo",
                            "conteudos.conteudo_subtitulo"
                            );


           // echo $query->toSql();
          // exit;

            return $this->doQuery($query,10,true);
        } catch (\Illuminate\Database\QueryException $e) {
            echo $e->getMessage();
        }
    }

}