<?php

namespace App\IRC\Models;

use Illuminate\Database\Eloquent\Model;


class Evento extends Model
{
    protected $connection = 'sqlsrv';
    protected $table = 'vw_sades_inscricoes_abertas_sem_servico';
    public $timestamps = false;
    protected $primaryKey = 'idcurso';


}
