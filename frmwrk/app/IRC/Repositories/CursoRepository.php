<?php

namespace App\IRC\Repositories;
use App\IRC\Models\Curso;
use Exception;
use DB;

class CursoRepository extends BaseRepository
{
    protected $modelClass = Curso::class;

    public function getCursosIndex()
	{
		try {

        	$query = $this->newQuery();
        	$query->distinct();
        	$query->select(
					'idcurso','curso','area','dt_inicio_curso','dt_termino_curso','cidade','id_unidade_executora',
					'unidade_id','valor_total','evento','ead','gratuito','h_inicio','h_fim', 'modalidade',
					'dt_inicio_mat','dt_termino_mat','id_modalidade'
			);

        	//echo $query->toSql();
        	//exit;

			return $this->doQuery($query,null,false);
        } catch(Exception $e) {
			return [''=>$e->getMessage()];
		}
	}

	public function getCursoPorModalidade($idModalidade = ['1','16']){

		try{

			$query = $this->newQuery();
			$query->distinct();
			$query->select(
					'idcurso','curso','area','dt_inicio_curso','dt_termino_curso','cidade','id_unidade_executora',
					'unidade_id','valor_total','evento','ead','gratuito','h_inicio','h_fim', 'modalidade',
					'dt_inicio_mat','dt_termino_mat','id_modalidade','unidade_nome'
			);
			$query->whereIn('id_modalidade',$idModalidade);
			$query->orderBy('curso','asc');

			//echo $query->toSql();

			return $this->doQuery($query,null,false);

		} catch(Exception $e) {
			//return [''=>$e->getMessage()];
			echo $e->getMessage();
		}

	}

	public function getCursosEad()
	{
		try {

			$query = $this->newQuery();
			$query->distinct();
			$query->select(
					'idcurso','curso','area','dt_inicio_curso','dt_termino_curso','cidade','id_unidade_executora',
					'unidade_id','valor_total','evento','ead','gratuito','h_inicio','h_fim', 'modalidade',
					'dt_inicio_mat','dt_termino_mat','id_modalidade'
			);

			$query->where('ead','S');

			return $this->doQuery($query,null,false);
		} catch(Exception $e) {
			return [''=>$e->getMessage()];
		}
	}

    public function getCursosSabado()
    {
        try {

            $query = $this->newQuery();
            $query->distinct();
            $query->select(
                'idcurso','curso','area','dt_inicio_curso','dt_termino_curso','cidade','id_unidade_executora',
                'unidade_id','valor_total','evento','ead','gratuito','h_inicio','h_fim', 'modalidade',
                'dt_inicio_mat','dt_termino_mat','id_modalidade'
            );

            /*
                idcurso, curso,area, dt_inicio_curso, dt_termino_curso, cidade, id_unidade_executora,
                unidade_id, valor_total, evento, '0' idServico, ead, gratuito, h_inicio, h_fim, modalidade,
                dt_inicio_mat,dt_termino_mat,id_modalidade
            */
            $query->where('ead','N');

            return $this->doQuery($query,null,false);
        } catch(Exception $e) {
            return [''=>$e->getMessage()];
        }
    }

	/**
	 * @param int $idArea
	 * @return mixed
	 */
	public function getCursosPorArea($idArea = 0)
	{
		try {

			$query = $this->newQuery();
			$query->distinct();
			$query->select(
					'idcurso','curso','area','dt_inicio_curso','dt_termino_curso','cidade','id_unidade_executora',
					'unidade_id','valor_total','evento','ead','gratuito','h_inicio','h_fim','dt_inicio_mat',
					'dt_termino_mat','id_modalidade','modalidade as nomeModalidade'
			);

			if($idArea >0){
				$query->where('idarea',$idArea);
			}

			$query->where('ead','N');

			// echo $query->toSql();
			// exit;

			$grouped = $this->doQuery($query,null,false);
			return  $grouped->groupBy('area');

		} catch(Exception $e) {
			echo $e->getMessage();
		}
	}

	/**
	 * @param int $idUnidade
	 * @return mixed
	 */
	public function getCursosPorUnidade($idUnidade = 0)
	{
		try {

			$query = $this->newQuery();
			$query->distinct();
			$query->select(
					'idcurso','curso','area','dt_inicio_curso','dt_termino_curso','cidade','id_unidade_executora',
					'unidade_id','valor_total','evento','ead','gratuito','h_inicio','h_fim','dt_inicio_mat',
					'dt_termino_mat','id_modalidade','modalidade as nomeModalidade'
			);

			if($idUnidade >0){
				$query->where('unidade_id',$idUnidade);
			}

			$query->where('ead','N');

			//echo $query->toSql();
			//exit;

			$grouped = $this->doQuery($query,null,false);
			return  $grouped->groupBy('unidade_id');

		} catch(Exception $e) {
			echo $e->getMessage();
		}
	}

	/**
	 * @return Paginator|\Illuminate\Database\Eloquent\Collection
	 */
	public function getHtmlSelect(){

		try {
			$query = $this->newQuery();
			$query->distinct();
			$query->select('idarea','area');
			$query->where('ead','N');
			return  $this->doQuery($query,null,false);
		} catch(Exception $e) {
			echo $e->getMessage();
		}

	}


	public function getTurmasPorCurso($idCurso)
	{
		try {

			$query = $this->newQuery();
			$query->distinct();
			$query->select(
					'idcurso','curso','area','dt_inicio_curso','dt_termino_curso','cidade','id_unidade_executora',
					'unidade_id','valor_total','evento','ead','gratuito','h_inicio','h_fim','dt_inicio_mat',
					'dt_termino_mat','id_modalidade','modalidade as nomeModalidade'
			);

			if($idCurso >0){
			   $query->where('idcurso',$idCurso);
			}
			  // $query->where('ead','N');
			   $grouped = $this->doQuery($query,null,false);

			return  $grouped->groupBy('curso');

		} catch(Exception $e) {
			echo $e->getMessage();
		}
	}


/*	public function arquivosDaTurmabooooo($idEvento){

		try {
			$query = $this->newQuery();
			$query->distinct();
			$query->join('tbl_sades_evento_anexo as ane', 'ane.id_evento', '=', 'evento');
			$query->select('ane.nome_exibivel_portal','ane.anexo', 'ane.id_evento');
			$query->where('ane.id_evento',$idEvento);

			return $this->doQuery($query,null,false);

		} catch(Exception $e) {
			echo $e->getMessage();
		}

	}*/

	/**
	 * @param $idCurso
	 * @return Paginator|\Illuminate\Database\Eloquent\Collection
	 */
	public function conteudoProgramatico($idCurso){

		try {
			$query = $this->newQuery();
			$query->distinct();
			$query->select('idconhecimento', 'listaconhecimentos', 'nome_conhecimento', 'idcurso');
			$query->where('idcurso',$idCurso);

//			$auxCont = $this->doQuery($query,null,false);
//			$showCont =
//			if(count($cont) > 1){
//			}

			return $this->doQuery($query,null,false);

		} catch(Exception $e) {
			echo $e->getMessage();
		}
	}

	public function cargaHorariaTotalDoCursoPorEvento($idCurso) {

		$query = DB::connection('sqlsrv')->table('tbl_sades_unidade_curricular as un');
		$query->select(DB::raw('SUM(un.carga_horaria) as valor_carga')) ;
		$query->join('tbl_sades_plano_curso as pc', 'pc.id', '=', 'un.id_plano_curso');
		$query->where('pc.id',$idCurso);
		return $this->doQuery($query,null,false);

	}

	public function preInscricaoEvento($idEvento){

		try {
			$query = $this->newQuery();
			$query->distinct();
			$query->select(
					'idcurso','curso','area','dt_inicio_curso','dt_termino_curso','cidade','id_unidade_executora',
					'unidade_id','valor_total','evento','ead','gratuito','h_inicio','h_fim','dt_inicio_mat',
					'dt_termino_mat','id_modalidade','modalidade as nomeModalidade','unidade_nome'
			);
			$query->where('evento',$idEvento);

			return $this->doQuery($query,null,false);

		} catch(Exception $e) {
			echo $e->getMessage();
		}
	}

}