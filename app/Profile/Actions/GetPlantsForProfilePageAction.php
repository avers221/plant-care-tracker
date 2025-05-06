<?php

namespace App\Profile\Actions;

use App\Core\Shared\Collections\PlantEntitiesCollection;
use App\Plant\Repositories\PlantRepositoryInterface;

class GetPlantsForProfilePageAction
{
    public function __construct(protected PlantRepositoryInterface $plantRepositories)
    {
    }

    public function handle(int $userId): PlantEntitiesCollection
    {
        return $this->plantRepositories->getUserPlants($userId);
    }
}
