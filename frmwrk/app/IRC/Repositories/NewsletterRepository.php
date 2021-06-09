<?php
/**
 * Created by PhpStorm.
 * User: ircarvalho
 * Date: 20/02/2017
 * Time: 13:37
 */

namespace App\IRC\Repositories;

use App\IRC\Models\Newsletter;

class NewsletterRepository extends BaseRepository
{

    protected $model =  Newsletter::class;

}
