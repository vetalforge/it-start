<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ages extends Model
{
    const CREATED_AT = null;
    const UPDATED_AT = null;

    /**
     * @var string
     */
    protected $table = 'ages';

    /**
     * @var array
     */
    protected $fillable = [
        'age',
    ];

    public function courses()
    {
        return $this->hasMany(Courses::class);
    }
}
