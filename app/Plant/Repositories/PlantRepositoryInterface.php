<?php

namespace App\Plant\Repositories;

use App\Plant\Models\Plant;

interface PlantRepositoryInterface
{
    public function getPlantById(string $id): ?Plant;

    public function getUserPlants(int $user_id): array;
}
