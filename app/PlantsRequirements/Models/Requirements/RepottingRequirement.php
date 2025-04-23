<?php

namespace App\PlantsRequirements\Models\Requirements;

use App\PlantsRequirements\Models\CareRequirement;
use App\PlantsRequirements\Models\Directories\RepottingFrequency;
use App\PlantsRequirements\Models\Directories\SpecialRepottingRequirements;
use App\PlantsRequirements\Models\Directories\WateringMethod;
use Illuminate\Database\Eloquent\Model;

class RepottingRequirement extends Model
{
    protected $fillable = ['repotting_frequency_id', 'special_requirements_id', 'notes'];
    public $timestamps = false;

    public function careRequirement(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(CareRequirement::class, 'care_requirement_id');
    }

    public function repottingFrequency(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(RepottingFrequency::class, 'repotting_frequency_id');
    }

    public function specialRepottingRequirements(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(SpecialRepottingRequirements::class, 'special_requirements_id');
    }
}
