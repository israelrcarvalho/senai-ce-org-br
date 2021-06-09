<?php

namespace App\IRC\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $connection = 'sqlsrv';
    protected $table = 'vw_sades_inscricoes_abertas_sem_servico';
    public $timestamps = false;


    public function cursosPorArea(){

        return $this->hasMany(Curso::class, 'idarea');
    }
}
