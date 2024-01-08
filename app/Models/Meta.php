<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    const CREATED_AT = null;
    const UPDATED_AT = null;

    /**
     * @var string
     */
    protected $table = 'url_meta';

    /**
     * @var array
     */
    protected $fillable = [
        'url_id',
        'description',
        'keywords',
    ];

    public function url()
    {
        return $this->belongsTo(Urls::class);
    }
}
