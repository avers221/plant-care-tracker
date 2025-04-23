<?php

namespace App\PlantsRequirements\Models\Requirements;

use App\PlantsRequirements\Models\CareRequirement;
use App\PlantsRequirements\Models\Directories\WateringMethod;
use Illuminate\Database\Eloquent\Model;

class WateringRequirement extends Model
{
    protected $fillable = ['frequency_days', 'watering_method_id', 'amount_ml', 'notes'];
    public $timestamps = false;


    public function careRequirement(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(CareRequirement::class, 'care_requirement_id');
    }

    public function wateringMethod(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(WateringMethod::class, 'watering_method_id');
    }
}
