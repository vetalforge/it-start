<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetaOg extends Model
{
    const CREATED_AT = null;
    const UPDATED_AT = null;

    /**
     * @var string
     */
    protected $table = 'url_meta_og';

    /**
     * @var array
     */
    protected $fillable = [
        'url_id',
        'title',
        'description',
        'image',
    ];

    public function url()
    {
        return $this->belongsTo(Urls::class);
    }
}
