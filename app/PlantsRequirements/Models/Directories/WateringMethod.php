<?php

namespace App\PlantsRequirements\Models\Directories;

use App\Core\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;

class WateringMethod extends Model
{
    use HasSlug;

    protected $fillable = ['name', 'description', 'slug'];
    public $timestamps = false;
}
