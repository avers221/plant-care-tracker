<?php

namespace App\PlantsRequirements\Actions;

use App\Core\Shared\Entities\PlantRequirementEntity;
use App\PlantsRequirements\Repositories\Eloquent\PlantsRequirementsRepository;

class GetRequirementsByPlantIdAction
{
    public function __construct(
        protected PlantsRequirementsRepository $repository
    )
    {
    }

    public function handle(string $platId): PlantRequirementEntity
    {
        return $this->repository->getRequirementsByPlantId($platId);
    }
}
