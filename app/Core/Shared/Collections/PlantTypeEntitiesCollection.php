<?php

namespace App\Core\Shared\Collections;

use App\Core\Attributes\EntityArrayType;
use App\Core\Entities\AbstractEntity;
use App\Plant\Entities\PlantTypeEntity;

class PlantTypeEntitiesCollection extends AbstractEntity
{
    #[EntityArrayType(PlantTypeEntity::class)]
    public array $items = [];
}
