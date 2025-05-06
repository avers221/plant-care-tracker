<?php

namespace App\Plant\DTO;

class CreatePlantDto
{
    public function __construct(
        public string $name,
        public string $description,
        public int $user_id,
        public int $type_id,
        public string $planted_at,
    )
    {
    }
}
