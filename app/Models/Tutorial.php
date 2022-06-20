<?php

namespace App\Models;

use Corcel\Model\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutorial extends Post
{
    use HasFactory;
    protected $connection = 'wordpress';
    protected $postType = 'tutorials';

    public static function getPublished()
    {
        return self::published()->orderBy('menu_order')->get();
    }
}
