<?php

namespace App\PlantsRequirements\Adapters;

use App\Core\Shared\Contracts\DirectoriesDataProviderInterface;
use App\Core\Shared\DTO\DirectoriesListDTO;
use App\PlantsRequirements\DataProviders\DirectoriesDataProvider;

class DirectoriesDataProviderFetcher implements DirectoriesDataProviderInterface
{
    public function __construct(protected DirectoriesDataProvider $dataProvider) {}

    public function provide(): DirectoriesListDTO
    {
        return $this->dataProvider->provide();
    }
}
