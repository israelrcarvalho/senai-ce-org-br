<?php

namespace App\IRC\Models;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $table = 'vw_unidades';
    protected $primaryKey = 'unidade_id';
    public $timestamps = false;


    public function getUnidadesNomeUsual($id_sades) {
        $unidades = array(
            20  => 'SENAI Jacarecanga',
            21  => 'SENAI Barra do Ceará',
            22  => 'SENAI Parangaba',
            23  => 'SENAI Juazeiro do Norte',
            25  => 'SENAI Maracanaú',
            26  => 'SENAI Mucuripe',
            30  => 'SENAI Sobral',
            96  => 'SENAI Horizonte',
            100 => 'SENAI São Gonçalo do Amarante',
        );

        return $unidades[$id_sades];
    }
}

