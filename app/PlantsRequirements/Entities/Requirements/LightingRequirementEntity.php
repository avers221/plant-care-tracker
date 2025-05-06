<?php

namespace App\PlantsRequirements\Entities\Requirements;

use \App\Core\Entities\AbstractEntity;

class LightingRequirementEntity extends AbstractEntity
{
    public int $light_type_id;
    public int $hours_per_day;
    public int $placement_id;
    public ?string $notes;
}
