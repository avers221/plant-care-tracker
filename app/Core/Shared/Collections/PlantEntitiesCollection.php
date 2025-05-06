<?php

namespace App\Core\Shared\Collections;

use App\Core\Attributes\EntityArrayType;
use App\Core\Entities\AbstractEntity;
use App\Plant\Entities\PlantEntity;

class PlantEntitiesCollection extends AbstractEntity
{
    #[EntityArrayType(PlantEntity::class)]
    public array $items = [];
}
