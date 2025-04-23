<?php

namespace App\PlantsRequirements\Models\Requirements;

use App\PlantsRequirements\Models\CareRequirement;
use App\PlantsRequirements\Models\Directories\WhenToPrune;
use Illuminate\Database\Eloquent\Model;

class PruningRequirement extends Model
{
    protected $fillable = ['needs_pruning', 'when_to_prune_id', 'notes'];
    public $timestamps = false;

    public function careRequirement(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(CareRequirement::class, 'care_requirement_id');
    }

    public function whenToPrune(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(WhenToPrune::class, 'when_to_prune_id');
    }
}
