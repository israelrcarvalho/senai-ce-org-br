<?php

namespace App\IRC\Repositories;
use App\IRC\Models\Servico;
use Exception;

class ServicosRepository extends BaseRepository
{
    protected $modelClass = Servico::class;

    public function getListaUnidadesMoveis()
	{
		try {
        	$query = $this->newQuery();
        	$query->distinct();
        	$query->where('modalidade_id','59');
        	$query->where('site','131');

        	return $query->get();

        } catch(Exception $e) {
			//return [''=>$e->getMessage()];
			echo $e->getMessage();
		}
	}

}