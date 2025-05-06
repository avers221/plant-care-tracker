<?php

namespace App\Plant\Entities;

class PlantTypeEntity extends \App\Core\Entities\AbstractEntity
{
    public int $id;
    public string $name;
    public string $description;
}
