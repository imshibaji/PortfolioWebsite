<?php

namespace App\Models;

use Corcel\Model\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Project extends Post
{
    use HasFactory;
    protected $connection = 'wordpress';
    protected $postType = 'projects';

    public static function getPublished()
    {
        return self::published()->orderBy('menu_order')->get();
    }
    public static function getPublishedLimited(){
        return self::published()->orderBy('id', 'DESC')->paginate(6);
    }
}
