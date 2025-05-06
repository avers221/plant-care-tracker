<?php

namespace App\Core\Shared\Entities;

use App\Core\Attributes\EntityType;
use App\Core\Entities\AbstractEntity;
use App\PlantsRequirements\Entities\Requirements\CompatibilityWithOtherPlantsRequirementEntity;
use App\PlantsRequirements\Entities\Requirements\FertilizingRequirementEntity;
use App\PlantsRequirements\Entities\Requirements\HumidityRequirementEntity;
use App\PlantsRequirements\Entities\Requirements\LightingRequirementEntity;
use App\PlantsRequirements\Entities\Requirements\PruningRequirementEntity;
use App\PlantsRequirements\Entities\Requirements\RepottingRequirementEntity;
use App\PlantsRequirements\Entities\Requirements\SeasonalCareRequirementEntity;
use App\PlantsRequirements\Entities\Requirements\TemperatureRequirementEntity;
use App\PlantsRequirements\Entities\Requirements\WateringRequirementEntity;

class PlantRequirementEntity extends AbstractEntity
{
    public string $id;
    public string $plant_id;

    #[EntityType(WateringRequirementEntity::class)]
    public ?WateringRequirementEntity $watering_requirement;

    #[EntityType(LightingRequirementEntity::class)]
    public ?LightingRequirementEntity $lighting_requirement;

    #[EntityType(TemperatureRequirementEntity::class)]
    public ?TemperatureRequirementEntity $temperature_requirement;

    #[EntityType(HumidityRequirementEntity::class)]
    public ?HumidityRequirementEntity $humidity_requirement;

    #[EntityType(FertilizingRequirementEntity::class)]
    public ?FertilizingRequirementEntity $fertilizing_requirement;

    #[EntityType(RepottingRequirementEntity::class)]
    public ?RepottingRequirementEntity $repotting_requirement;

    #[EntityType(PruningRequirementEntity::class)]
    public ?PruningRequirementEntity $pruning_requirement;

    #[EntityType(PruningRequirementEntity::class)]
    public ?PruningRequirementEntity $pests_and_diseases_requirement;

    #[EntityType(SeasonalCareRequirementEntity::class)]
    public ?SeasonalCareRequirementEntity $seasonal_care_requirement;

    #[EntityType(CompatibilityWithOtherPlantsRequirementEntity::class)]
    public ?CompatibilityWithOtherPlantsRequirementEntity $compatibility_with_other_plants_requirement;
}
