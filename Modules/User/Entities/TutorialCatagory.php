<?php

namespace Modules\User\Entities;

use Corcel\Model\Taxonomy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TutorialCatagory extends Taxonomy
{
    use HasFactory;
    protected $connection = 'wordpress';
    protected $taxonomy = 'tutorial_catagory';

}
