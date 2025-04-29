<?php

namespace App\Profile\Providers;

use App\Plant\Repositories\Eloquent\PlantRepository;
use App\Plant\Repositories\PlantRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class ProfileServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }

    public $bindings = [
        PlantRepositoryInterface::class => PlantRepository::class
    ];
}
