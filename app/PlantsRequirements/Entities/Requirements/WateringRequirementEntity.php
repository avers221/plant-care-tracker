<?php

namespace App\PlantsRequirements\Entities\Requirements;

use App\Core\Entities\AbstractEntity;

class WateringRequirementEntity extends AbstractEntity
{
    public int $id;
    public int $frequency_days;
    public ?int $amount_ml;
    public int $watering_method_id;
    public ?string $notes;
}
