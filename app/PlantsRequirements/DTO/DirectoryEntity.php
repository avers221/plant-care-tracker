<?php

namespace App\PlantsRequirements\DTO;

use \App\Core\Entities\AbstractEntity;

class DirectoryEntity extends AbstractEntity
{
    public int $id;
    public string $name;
    public string $description;
    public string $slug;
}
