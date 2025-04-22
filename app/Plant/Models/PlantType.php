<?php

namespace App\Plant\Models;

use Illuminate\Database\Eloquent\Model;

class PlantType extends Model
{
    protected $fillable = ['name', 'description'];

    public $timestamps = false;
}
