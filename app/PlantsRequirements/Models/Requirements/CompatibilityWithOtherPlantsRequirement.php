<?php

namespace App\PlantsRequirements\Models\Requirements;

use App\Plant\Models\Plant;
use App\PlantsRequirements\Models\CareRequirement;
use Illuminate\Database\Eloquent\Model;

class CompatibilityWithOtherPlantsRequirement extends Model
{
    protected $fillable = ['compatible_with_others', 'allelopathy', 'notes'];
    public $timestamps = false;

    public function careRequirement(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(CareRequirement::class, 'care_requirement_id');
    }
}
