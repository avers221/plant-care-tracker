<?php

namespace App\Plant\Providers;

use App\Core\Shared\Contracts\DirectoriesDataProviderInterface;
use App\Core\Shared\Contracts\GetRequirementsByPlantIdDataProviderInterface;
use App\Plant\Repositories\Eloquent\PlantRepository;
use App\Plant\Repositories\Eloquent\PlantTypeRepository;
use App\Plant\Repositories\PlantRepositoryInterface;
use App\Plant\Repositories\PlantTypeRepositoryInterface;
use App\PlantsRequirements\Adapters\DirectoriesDataProviderFetcher;
use App\PlantsRequirements\DataProviders\GetRequirementsByPlantIdDataProvider;
use Illuminate\Support\ServiceProvider;

class PlantServiceProvider extends ServiceProvider
{
    public $bindings = [
        PlantRepositoryInterface::class => PlantRepository::class,
        PlantTypeRepositoryInterface::class => PlantTypeRepository::class,
        GetRequirementsByPlantIdDataProviderInterface::class => GetRequirementsByPlantIdDataProvider::class,
        DirectoriesDataProviderInterface::class => DirectoriesDataProviderFetcher::class,
    ];
}
