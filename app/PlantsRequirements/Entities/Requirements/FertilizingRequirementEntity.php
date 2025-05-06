<?php

namespace App\PlantsRequirements\Entities\Requirements;

use \App\Core\Entities\AbstractEntity;

class FertilizingRequirementEntity extends AbstractEntity
{
    public int $frequency_days;
    public int $fertilizer_type_id;
    public int $application_method_id;
    public ?string $notes;
}
