<?php

namespace App\PlantsRequirements\Entities\Requirements;

use \App\Core\Entities\AbstractEntity;

class HumidityRequirementEntity extends AbstractEntity
{
    public int $min_humidity_percent;
    public bool $spraying_required;
    public bool $use_humidifier;
    public ?string $notes;
}
