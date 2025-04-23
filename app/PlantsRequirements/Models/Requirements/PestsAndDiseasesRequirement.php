<?php

namespace App\PlantsRequirements\Models\Requirements;

use App\PlantsRequirements\Models\CareRequirement;
use Illuminate\Database\Eloquent\Model;

class PestsAndDiseasesRequirement extends Model
{
    protected $fillable = ['susceptible_to', 'prevention', 'notes'];
    public $timestamps = false;

    public function careRequirement(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(CareRequirement::class, 'care_requirement_id');
    }
}
