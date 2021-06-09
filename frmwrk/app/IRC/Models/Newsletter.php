<?php

namespace App\IRC\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $primaryKey = 'newsletter_id';
    public $timestamps = false;
    protected $fillable = ['newsletter_nome', 'newsletter_email', 'newsletter_grupo','newsletter_data','newsletter_hora'];

}