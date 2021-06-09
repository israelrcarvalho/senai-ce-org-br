<?php

namespace App\IRC\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $primaryKey = 'categoria_id';
    public $timestamps = false;

    public function conteudos() {
        return $this->belongsToMany(Conteudo::class, 'conteudo_categorias', 'categoria_id', 'conteudo_id');
    }

}
