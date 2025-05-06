<?php

namespace App\Plant\Repositories\Eloquent;

use App\Core\Shared\Collections\PlantTypeEntitiesCollection;
use App\Plant\Models\PlantType;

class PlantTypeRepository implements \App\Plant\Repositories\PlantTypeRepositoryInterface
{

    /**
     * @throws \ReflectionException
     */
    public function getPlantTypes(): PlantTypeEntitiesCollection
    {
        return new PlantTypeEntitiesCollection(['items' => PlantType::all()->toArray()]);

    }
}
