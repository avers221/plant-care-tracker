<?php

namespace App\PlantsRequirements\Entities\Requirements;

use \App\Core\Entities\AbstractEntity;

class CompatibilityWithOtherPlantsRequirementEntity extends AbstractEntity
{
    public bool $compatible_with_others;
    public ?string $allelopathy;
    public ?string $notes;
}
