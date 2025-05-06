<?php

namespace App\Core\Shared\Contracts;

use App\Core\Shared\Entities\PlantRequirementEntity;

interface GetRequirementsByPlantIdDataProviderInterface
{
    public function provide(string $id): PlantRequirementEntity;
}
