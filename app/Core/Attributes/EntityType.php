<?php

namespace App\Core\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class EntityType
{
    public function __construct(
        public string $dtoClass
    ) {}
}
