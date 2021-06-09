<?php

namespace App\IRC\Models;
use Illuminate\Database\Eloquent\Model;


class Files extends Model
{
    protected $connection = 'sqlsrv';
    protected $table = 'tbl_sades_evento_anexo';
    public $timestamps = false;
    protected $primaryKey = 'id';

}
