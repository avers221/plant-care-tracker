<?php

namespace App\PlantsRequirements\Repositories\Eloquent;

use App\Core\Shared\Entities\PlantRequirementEntity;
use App\PlantsRequirements\Models\CareRequirement;
use App\PlantsRequirements\Repositories\PlantsRequirementsRepositoryInterface;

class PlantsRequirementsRepository implements PlantsRequirementsRepositoryInterface
{

    /**
     * @throws \ReflectionException
     */
    public function getRequirementsByPlantId(string $plantId): ?PlantRequirementEntity
    {
        $requirements = CareRequirement::query()->where('plant_id', $plantId)
            ->with([
                'wateringRequirement', 'lightingRequirement', 'temperatureRequirement',
                'humidityRequirement', 'fertilizingRequirement', 'repottingRequirement',
                'pruningRequirement', 'pestsAndDiseasesRequirement', 'seasonalCareRequirement',
                'compatibilityWithOtherPlantsRequirement',
            ])
            ->first();

        if (!$requirements) return null;

        return new PlantRequirementEntity($requirements->toArray());
    }
}
