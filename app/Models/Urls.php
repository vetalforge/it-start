<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Urls extends Model
{
    const CREATED_AT = null;
    const UPDATED_AT = null;

    /**
     * @var string
     */
    protected $table = 'urls';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function metaInfo()
    {
        return $this->hasMany(Meta::class);
    }

    public function metaOgInfo()
    {
        return $this->hasMany(MetaOg::class);
    }
}
