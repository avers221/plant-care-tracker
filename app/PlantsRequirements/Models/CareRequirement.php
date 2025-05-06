<?php

namespace App\PlantsRequirements\Models;

use App\Plant\Models\Plant;
use App\PlantsRequirements\Models\Requirements\CompatibilityWithOtherPlantsRequirement;
use App\PlantsRequirements\Models\Requirements\FertilizingRequirement;
use App\PlantsRequirements\Models\Requirements\HumidityRequirement;
use App\PlantsRequirements\Models\Requirements\LightingRequirement;
use App\PlantsRequirements\Models\Requirements\PestsAndDiseasesRequirement;
use App\PlantsRequirements\Models\Requirements\PruningRequirement;
use App\PlantsRequirements\Models\Requirements\RepottingRequirement;
use App\PlantsRequirements\Models\Requirements\SeasonalCareRequirement;
use App\PlantsRequirements\Models\Requirements\TemperatureRequirement;
use App\PlantsRequirements\Models\Requirements\WateringRequirement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CareRequirement extends Model
{

    protected $fillable = ['plant_id'];

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

    public function wateringRequirement(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(WateringRequirement::class, 'care_requirement_id');
    }

    public function lightingRequirement(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(LightingRequirement::class, 'care_requirement_id');
    }

    public function temperatureRequirement(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(TemperatureRequirement::class, 'care_requirement_id');
    }

    public function humidityRequirement(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(HumidityRequirement::class, 'care_requirement_id');
    }

    public function fertilizingRequirement(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(FertilizingRequirement::class, 'care_requirement_id');
    }

    public function repottingRequirement(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(RepottingRequirement::class, 'care_requirement_id');
    }

    public function pruningRequirement(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(PruningRequirement::class, 'care_requirement_id');
    }

    public function pestsAndDiseasesRequirement(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(PestsAndDiseasesRequirement::class, 'care_requirement_id');
    }

    public function seasonalCareRequirement(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(SeasonalCareRequirement::class, 'care_requirement_id');
    }

    public function compatibilityWithOtherPlantsRequirement(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(CompatibilityWithOtherPlantsRequirement::class, 'care_requirement_id');
    }
}
