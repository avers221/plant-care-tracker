<?php

namespace App\PlantsRequirements\Models\Requirements;

use App\PlantsRequirements\Models\CareRequirement;
use Illuminate\Database\Eloquent\Model;

class HumidityRequirement extends Model
{
    protected $fillable = ['min_humidity_percent', 'spraying_required', 'use_humidifier', 'notes'];
    public $timestamps = false;

    public function careRequirement(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(CareRequirement::class, 'care_requirement_id');
    }
}
