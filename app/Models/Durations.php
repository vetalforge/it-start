<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Durations extends Model
{
    const CREATED_AT = null;
    const UPDATED_AT = null;

    /**
     * @var string
     */
    protected $table = 'durations';

    /**
     * @var array
     */
    protected $fillable = [
        'duration',
    ];

    public function courses()
    {
        return $this->hasMany('App\Models\Courses');
    }
}
