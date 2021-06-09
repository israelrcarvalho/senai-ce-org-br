<?php

namespace App\IRC\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $primaryKey = 'banner_id';
    public $timestamps = false;


    /**
     * Relacionamento com o model grupoBanner
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function grupoBanner()
    {
        return $this->belongsTo(GrupoBanner::class, 'banner_grupobanner');
    }


}
