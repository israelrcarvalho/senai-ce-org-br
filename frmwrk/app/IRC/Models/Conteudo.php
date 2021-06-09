<?php

namespace App\IRC\Models;

use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    protected $primaryKey = 'conteudo_id';
    public $timestamps = false;

    public function categoria() {

        return $this->belongsToMany(Categoria::class, 'conteudo_categorias', 'conteudo_id', 'categoria_id')
            ->where('categoria_site', env('SITE_ID'));
    }

}
