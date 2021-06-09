<?php

namespace App\IRC\Models;

use Illuminate\Database\Eloquent\Model;

class QueroContratar extends Model
{

    protected $table ='tbl_querocontratar';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['contato','empresa','departamento','cnpj','telefone','email','mensagem','site','site_id','servico_solicitado','email_copia','data_cadastro'];

}