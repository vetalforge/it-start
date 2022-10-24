<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    /**
     * @var string
     */
    protected $table = 'courses';

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
        'image',
        'age',
        'duration',
    ];
}
