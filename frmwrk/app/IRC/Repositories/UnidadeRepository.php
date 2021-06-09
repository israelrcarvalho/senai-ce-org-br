<?php

namespace App\IRC\Repositories;
use App\IRC\Models\Unidade;
use Exception;
use Illuminate\Support\Facades\DB;

class UnidadeRepository extends BaseRepository
{
    protected $modelClass = Unidade::class;

    public function getListaUnidades()
	{
		try {
        	$query = $this->newQuery();
        	$query->distinct();
        	$query->where('casa','308');
            $query->limit(26);
        	$query->orderBy('nome_cidade','ASC');

        	return $query->get();


        } catch(Exception $e) {
			return [''=>$e->getMessage()];
		}
	}

    public function getListaUnidadesPorCidade($idMunicipio)
    {
        try {
            $query = $this->newQuery();
            $query->distinct();
            $query->where('casa','308');
            $query->where('municipio',$idMunicipio);
            // $query->whereRaw("ead = 'N'");
            $query->limit(26);
            $query->orderBy('nome_cidade','ASC');
            return $query->get();
        } catch(Exception $e) {
            //	echo $e->getMessage();
            return [''=>$e->getMessage()];
        }
    }


    public function getListaUnidadesApi()
    {

        try {

            $query = DB::table('wv_api_unidades');
          //  $query->select(DB::raw('SUM(un.carga_horaria) as valor_carga')) ;
           // $query->join('tbl_sades_plano_curso as pc', 'pc.id', '=', 'un.id_plano_curso');
            $query->where('casa',208);
            return $this->doQuery($query,null,false);

        } catch(Exception $e) {
            return [''=>$e->getMessage()];
        }
    }

}