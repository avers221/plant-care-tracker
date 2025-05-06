<?php

namespace App\Plant\Repositories\Eloquent;

use App\Core\Shared\Collections\PlantEntitiesCollection;
use App\Plant\Entities\PlantEntity;
use App\Plant\Models\Plant;
use App\Plant\Repositories\PlantRepositoryInterface;

class PlantRepository implements PlantRepositoryInterface
{
    /**
     * @throws \ReflectionException
     */
    public function getPlantById(string $id): ?PlantEntity
    {
        $model = Plant::query()->where('id', $id)->first();

        // todo: trow exception
        if(!$model) return null;

        return new PlantEntity($model->toArray());
    }

    /**
     * @throws \ReflectionException
     */
    public function getUserPlants(int $user_id): PlantEntitiesCollection
    {
        $entities = Plant::query()->where('user_id', $user_id)->get();

        return new PlantEntitiesCollection(['items' => $entities->toArray()]);
    }
}
