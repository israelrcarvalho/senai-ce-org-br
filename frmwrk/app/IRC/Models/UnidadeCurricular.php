<?php

namespace App\IRC\Models;
use Illuminate\Database\Eloquent\Model;


class UnidadeCurricular extends Model
{
    protected $connection = 'sqlsrv';
    protected $table = 'tbl_sades_unidade_curricular';
    public $timestamps = false;
    protected $primaryKey = 'id';

}
