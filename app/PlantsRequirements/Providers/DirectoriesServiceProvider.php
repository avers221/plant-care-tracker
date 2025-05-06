<?php

namespace App\PlantsRequirements\Providers;

use App\PlantsRequirements\Repositories\DirectoriesRepositoryInterface;
use App\PlantsRequirements\Repositories\Eloquent\DirectoriesRepository;
use Illuminate\Support\ServiceProvider;

class DirectoriesServiceProvider extends ServiceProvider
{
    public $bindings = [
        DirectoriesRepositoryInterface::class => DirectoriesRepository::class
    ];
}
