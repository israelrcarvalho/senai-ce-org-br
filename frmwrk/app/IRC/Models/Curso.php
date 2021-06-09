<?php

namespace App\IRC\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Curso extends Model
{

 	protected $connection = 'sqlsrv';
    protected $table = 'vw_sades_inscricoes_abertas_sem_servico';
    public $timestamps = false;
    protected $primaryKey = 'idcurso';

    public function getRetornaNomeModalidade($idModalidade)
    {
        $modalidades = array(
            1  => 'Técnicos',
            3  => 'Qualificação Profissional',
            4  => 'Curta Duração',
            5  => 'Curta Duração',
            11  => 'EAD',
        );

        return $modalidades[$idModalidade];

    }


    public function getCursoAttribute($value)
    {
        return ($value);
    }

    public function getModalidadeAttribute($value)
    {
        return  $this->getRetornaNomeModalidade($this->id_modalidade) ;
    }

    public function getCidadeAttribute($value)
    {
        return ($value);
    }

    public function getDtInicioCursoAttribute($value)
    {
        return Carbon::parse($value)->format('d.m.Y');
    }

    public function getDtTerminoCursoAttribute($value)
    {
        return Carbon::parse($value)->format('d.m.Y');
    }

    public function getValorTotalAttribute($value)
    {
        return number_format($value, 2, ',', '.');
    }

    public function getUnidadeIdAttribute($idUnidade)
    {
        $r = new Unidade();
        return $r->getUnidadesNomeUsual($idUnidade);
    }

    public function files() {
        return $this->hasMany(Files::class, 'id_evento', 'evento');
    }


}
