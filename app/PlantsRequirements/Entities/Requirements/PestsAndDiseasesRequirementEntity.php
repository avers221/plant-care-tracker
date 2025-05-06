<?php

namespace App\PlantsRequirements\Entities\Requirements;

use \App\Core\Entities\AbstractEntity;

class PestsAndDiseasesRequirementEntity extends AbstractEntity
{
    public ?string $susceptible_to;
    public ?string $prevention;
    public ?string $notes;
}
