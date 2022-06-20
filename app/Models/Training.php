<?php

namespace App\Models;

use Corcel\Model\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Post
{
    use HasFactory;
    protected $connection = 'wordpress';
    protected $postType = 'trainings';

    public static function getPublished()
    {
        return self::published()->orderBy('menu_order')->get();
    }
}
