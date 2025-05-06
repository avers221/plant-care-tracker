<?php

namespace App\Plant\DTO;

use App\Core\Shared\Collections\PlantTypeEntitiesCollection;
use App\Core\Shared\DTO\DirectoriesListDTO;
use App\Core\Shared\Entities\PlantRequirementEntity;
use App\Plant\Entities\PlantEntity;

class PlantPageDTO
{
    public function __construct(
        public PlantEntity $plant,
        public PlantTypeEntitiesCollection $plantTypes,
        public PlantRequirementEntity $requirements,
        public DirectoriesListDTO $directories
    )
    {
    }
}
