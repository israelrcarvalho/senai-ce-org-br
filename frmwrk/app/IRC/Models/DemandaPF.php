<?php

namespace App\IRC\Models;

use Illuminate\Database\Eloquent\Model;

class DemandaPF extends Model
{

    protected $connection = 'sqlsrv';
    protected $table = 'tbl_demanda_pf';
    //const CREATED_AT = 'data_cadastro';
    //const UPDATED_AT = 'data_alteracao';
     public $timestamps = false;
    // protected $primaryKey = 'idcurso';

    //protected $fillable = ['outros_servicos','data_cadastro','data_alteracao','data_demanda', 'id_forma_captacao','nome_contato','fone','email','cpf','id_forma_recebimento','id_unidade'];
    protected $guarded = [];

}
