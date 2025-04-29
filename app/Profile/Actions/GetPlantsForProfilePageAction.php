<?php

namespace App\Profile\Actions;

use App\Plant\Repositories\PlantRepositoryInterface;

class GetPlantsForProfilePageAction
{
    public function __construct(protected PlantRepositoryInterface $plantRepositories)
    {
    }

    public function handle(int $userId): array
    {
        return $this->plantRepositories->getUserPlants($userId);
    }
}
