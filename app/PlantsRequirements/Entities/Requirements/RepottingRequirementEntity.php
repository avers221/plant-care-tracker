<?php

namespace App\PlantsRequirements\Entities\Requirements;

use \App\Core\Entities\AbstractEntity;

class RepottingRequirementEntity extends AbstractEntity
{
    public int $repotting_frequency_id;
    public int $special_requirements_id;
    public ?string $notes;
}
