<?php

namespace App\IRC\Models;
use Illuminate\Database\Eloquent\Model;


class ConhecimentoCurso extends Model
{
    protected $connection = 'sroom';
    protected $table = 'vw_sades_inscricoes_abertas_sem_servico';
    public $timestamps = false;
    protected $primaryKey = 'id';

}
