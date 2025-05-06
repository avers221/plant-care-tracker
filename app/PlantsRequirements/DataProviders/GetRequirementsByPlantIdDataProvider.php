<?php

namespace App\PlantsRequirements\DataProviders;

use App\Core\Shared\Contracts\GetRequirementsByPlantIdDataProviderInterface;
use App\Core\Shared\Entities\PlantRequirementEntity;
use App\PlantsRequirements\Actions\GetRequirementsByPlantIdAction;

class GetRequirementsByPlantIdDataProvider implements GetRequirementsByPlantIdDataProviderInterface
{

    public function __construct(protected GetRequirementsByPlantIdAction $action)
    {
    }

    public function provide(string $id): PlantRequirementEntity
    {
        return $this->action->handle($id);
    }
}
