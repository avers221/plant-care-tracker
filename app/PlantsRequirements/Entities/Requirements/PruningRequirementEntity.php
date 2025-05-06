<?php

namespace App\PlantsRequirements\Entities\Requirements;

use App\Core\Entities\AbstractEntity;

class PruningRequirementEntity extends AbstractEntity
{
    public bool $needs_pruning;
    public int $when_to_prune_id;
    public ?string $notes;
}
