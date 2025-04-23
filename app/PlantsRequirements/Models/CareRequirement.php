<?php

namespace App\PlantsRequirements\Models;

use App\Plant\Models\Plant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CareRequirement extends Model
{
    public $timestamps = false;
    protected $keyType = 'string';
    public $incrementing = false;

    protected static function boot ()
    {
        parent::boot();
        static::creating(function ($model) {
            if ($model->getKey() === null) {
                $model->setAttribute($model->getKeyName(), Str::uuid()->toString());
            }
        });
    }

    public function plant(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Plant::class, 'plant_id');
    }


}
