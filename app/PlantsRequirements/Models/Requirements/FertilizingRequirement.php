<?php

namespace App\PlantsRequirements\Models\Requirements;

use App\PlantsRequirements\Models\CareRequirement;
use App\PlantsRequirements\Models\Directories\ApplicationMethod;
use App\PlantsRequirements\Models\Directories\FertilizerType;
use Illuminate\Database\Eloquent\Model;

class FertilizingRequirement extends Model
{
    protected $fillable = ['frequency_days', 'fertilizer_type_id', 'application_method_id'];
    public $timestamps = false;

    public function careRequirement(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(CareRequirement::class, 'care_requirement_id');
    }

    public function fertilizerType(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(FertilizerType::class, 'fertilizer_type_id');
    }

    public function applicationMethod(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ApplicationMethod::class, 'application_method_id');
    }
}
