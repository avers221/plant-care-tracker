<?php

namespace App\Core\Shared\Contracts;

use App\Core\Shared\DTO\DirectoriesListDTO;

interface DirectoriesDataProviderInterface
{
    public function provide(): DirectoriesListDTO;
}
