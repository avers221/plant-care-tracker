<?php

namespace App\Plant\Entities;

use App\Core\Entities\AbstractEntity;

class PlantEntity extends AbstractEntity
{
    public string $id;
    public string $name;
    public string $description;
    public int $type_id;
}
