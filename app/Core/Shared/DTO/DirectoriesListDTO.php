<?php

namespace App\Core\Shared\DTO;

use App\Core\Attributes\EntityArrayType;
use App\Core\Entities\AbstractEntity;
use App\PlantsRequirements\DTO\DirectoryEntity;

class DirectoriesListDTO extends AbstractEntity
{
    #[EntityArrayType(DirectoryEntity::class)]
    public array $applicationMethod = [];
    #[EntityArrayType(DirectoryEntity::class)]
    public array $fertilizerType = [];
    #[EntityArrayType(DirectoryEntity::class)]
    public array $lightType = [];
    #[EntityArrayType(DirectoryEntity::class)]
    public array $placement = [];
    #[EntityArrayType(DirectoryEntity::class)]
    public array $repottingFrequency = [];
    #[EntityArrayType(DirectoryEntity::class)]
    public array $specialRepottingRequirements = [];
    #[EntityArrayType(DirectoryEntity::class)]
    public array $wateringMethod = [];
    #[EntityArrayType(DirectoryEntity::class)]
    public array $whenToPrune = [];
}
