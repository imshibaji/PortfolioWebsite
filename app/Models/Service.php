<?php

namespace App\Models;

use Corcel\Model\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Post
{
    use HasFactory;
    protected $connection = 'wordpress';
    protected $postType = 'service';

    public static function getPublished()
    {
        return self::published()->orderBy('menu_order')->get();
    }
}
