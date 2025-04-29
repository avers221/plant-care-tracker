<?php

namespace App\Plant\Repositories\Eloquent;

use App\Plant\Models\Plant;
use App\Plant\Repositories\PlantRepositoryInterface;

class PlantRepository implements PlantRepositoryInterface
{
    public function getPlantById(string $id): ?Plant
    {
        return Plant::query()->where('id', $id)->first();
    }

    public function getUserPlants(int $user_id): array
    {
        return Plant::query()->where('user_id', $user_id)->get()->toArray();
    }
}
