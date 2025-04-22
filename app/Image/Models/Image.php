<?php

namespace App\Image\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['path', 'category', 'imageable_id', 'imageable_type'];

    protected $keyType = 'string';
    public $incrementing = false;
}
