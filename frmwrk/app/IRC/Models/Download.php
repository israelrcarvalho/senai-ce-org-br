<?php

namespace App\IRC\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $primaryKey = 'download_id';
    public $timestamps = false;

    public function getDownloadDataInicioAttribute($dtinicio)
    {

        return Carbon::parse($dtinicio)->format('Y');
    }
}
