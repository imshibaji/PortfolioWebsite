<?php

namespace App\Models;

use Corcel\Model\Page as ModelPage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends ModelPage
{
    use HasFactory;

    protected $connection = 'wordpress';

    public static function getPublished(){
        return self::published()->orderBy('id', 'DESC')->get();
    }
}
