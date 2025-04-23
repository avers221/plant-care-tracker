<?php

namespace App\Plant\Models;

use App\Plant\Factories\PlantTypeFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantType extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public $timestamps = false;

    protected static function newFactory(): PlantTypeFactory
    {
        return PlantTypeFactory::new();
    }
}
