<?php

namespace App\Plant\Factories;

use App\Plant\Models\PlantType;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlantTypeFactory extends Factory
{
    protected $model = PlantType::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->title(),
            'description' => fake()->title(),
        ];
    }
}
