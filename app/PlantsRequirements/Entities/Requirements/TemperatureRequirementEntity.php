<?php

namespace App\PlantsRequirements\Entities\Requirements;

use \App\Core\Entities\AbstractEntity;

class TemperatureRequirementEntity extends AbstractEntity
{
    public float $optimal_range_min;
    public float $optimal_range_max;
    public float $min_temp;
    public float $max_temp;
    public bool $draft_protection;
    public ?string $notes;
}
