<?php

namespace App\Models;

use App\Shortcodes\PriceShortcode;
use Corcel\Concerns\Shortcodes;
use Corcel\Model\Post as ModelPost;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends ModelPost
{
    use HasFactory;

    protected $connection = 'wordpress';
    protected $postType = 'post';

    public static function getPublished(){
        return self::published()->orderBy('id', 'DESC')->get();
    }
    public static function getPublishedLimited(){
        return self::published()->orderBy('id', 'DESC')->paginate(6);
    }
}
