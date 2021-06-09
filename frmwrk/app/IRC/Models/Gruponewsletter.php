<?php

namespace App\IRC\Models;

use Illuminate\Database\Eloquent\Model;

class GrupoNewsletter extends Model
{
    protected $primaryKey = 'gruponewsletter_id';
    protected $table = 'gruponewsletters';
    public $timestamps = false;

    /*
     * gruponewsletters
    public function conteudos() {
        return $this->belongsToMany(Conteudo::class, 'conteudo_categorias', 'categoria_id', 'conteudo_id');
    }
    */
}
