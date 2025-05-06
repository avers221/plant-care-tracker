<?php

namespace App\Plant\Repositories;

use App\Core\Shared\Collections\PlantEntitiesCollection;
use App\Plant\Entities\PlantEntity;

interface PlantRepositoryInterface
{
    public function getPlantById(string $id): ?PlantEntity;

    public function getUserPlants(int $user_id): PlantEntitiesCollection;
}
