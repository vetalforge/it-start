<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * @var string
     */
    protected $table = 'articles';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'title_ua',
        'title_en',
        'title_ru',
        'description_ua',
        'description_en',
        'description_ru',
    ];
}
