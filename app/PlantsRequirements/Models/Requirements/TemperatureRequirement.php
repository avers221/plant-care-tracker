<?php

namespace App\PlantsRequirements\Models\Requirements;

use App\PlantsRequirements\Models\CareRequirement;
use Illuminate\Database\Eloquent\Model;

class TemperatureRequirement extends Model
{
    protected $fillable = ['optimal_range_min', 'optimal_range_max', 'min_temp', 'max_temp', 'draft_protection', 'notes'];
    public $timestamps = false;

    public function careRequirement(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(CareRequirement::class, 'care_requirement_id');
    }
}
