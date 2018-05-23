<?php

namespace Modules\News\Entities;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    protected $table = 'news__news';
    public $translatedAttributes = [];
    protected $fillable = ['author_name','category','emergency_level','body'];
}
