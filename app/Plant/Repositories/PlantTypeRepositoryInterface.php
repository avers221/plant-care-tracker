<?php

namespace App\Plant\Repositories;

use App\Core\Shared\Collections\PlantTypeEntitiesCollection;

interface PlantTypeRepositoryInterface
{
    public function getPlantTypes(): PlantTypeEntitiesCollection;
}
