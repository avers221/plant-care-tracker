<?php

namespace App\PlantsRequirements\Repositories;

use App\Core\Shared\Entities\PlantRequirementEntity;

interface PlantsRequirementsRepositoryInterface
{
    public function getRequirementsByPlantId(string $plantId): ?PlantRequirementEntity;
}
