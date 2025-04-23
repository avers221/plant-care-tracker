<?php

namespace App\PlantsRequirements\Models\Requirements;

use App\PlantsRequirements\Models\CareRequirement;
use App\PlantsRequirements\Models\Directories\LightType;
use App\PlantsRequirements\Models\Directories\Placement;
use Illuminate\Database\Eloquent\Model;

class LightingRequirement extends Model
{
    protected $fillable = ['light_type_id', 'hours_per_day', 'placement_id', 'notes'];
    public $timestamps = false;

    public function careRequirement(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(CareRequirement::class, 'care_requirement_id');
    }

    public function lightType(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(LightType::class, 'light_type_id');
    }

    public function placement(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Placement::class, 'placement_id');
    }
}
