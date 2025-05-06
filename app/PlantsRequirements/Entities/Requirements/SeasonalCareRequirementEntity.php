<?php

namespace App\PlantsRequirements\Entities\Requirements;

use \App\Core\Entities\AbstractEntity;

class SeasonalCareRequirementEntity extends AbstractEntity
{
    public ?string $growth_period;
    public ?string $notes;
}
