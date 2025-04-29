<?php

namespace Database\Seeders;

use App\Plant\Seeders\PlantTypeSeeder;
use App\PlantsRequirements\Seeders\Directories\ApplicationMethodSeeder;
use App\PlantsRequirements\Seeders\Directories\FertilizerTypeSeeder;
use App\PlantsRequirements\Seeders\Directories\LightTypeSeeder;
use App\PlantsRequirements\Seeders\Directories\PlacementsSeeder;
use App\PlantsRequirements\Seeders\Directories\RepottingFrequencySeeder;
use App\PlantsRequirements\Seeders\Directories\SpecialRepottingRequirementsSeeder;
use App\PlantsRequirements\Seeders\Directories\WateringMethodsSeeder;
use App\PlantsRequirements\Seeders\Directories\WhenToPruneSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PlantTypeSeeder::class,
            ApplicationMethodSeeder::class,
            FertilizerTypeSeeder::class,
            LightTypeSeeder::class,
            PlacementsSeeder::class,
            RepottingFrequencySeeder::class,
            SpecialRepottingRequirementsSeeder::class,
            WateringMethodsSeeder::class,
            WhenToPruneSeeder::class,
        ]);
    }
}
