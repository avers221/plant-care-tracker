<?php

namespace Database\Seeders;

use App\User\Models\User;
use Database\Seeders\PlantsRequirements\Directories\ApplicationMethodSeeder;
use Database\Seeders\PlantsRequirements\Directories\FertilizerTypeSeeder;
use Database\Seeders\PlantsRequirements\Directories\LightTypeSeeder;
use Database\Seeders\PlantsRequirements\Directories\PlacementsSeeder;
use Database\Seeders\PlantsRequirements\Directories\RepottingFrequencySeeder;
use Database\Seeders\PlantsRequirements\Directories\SpecialRepottingRequirementsSeeder;
use Database\Seeders\PlantsRequirements\Directories\WateringMethodsSeeder;
use Database\Seeders\PlantsRequirements\Directories\WhenToPruneSeeder;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
