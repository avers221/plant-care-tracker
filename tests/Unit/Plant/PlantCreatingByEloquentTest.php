<?php

namespace Tests\Unit\Plant;

use App\Plant\Models\PlantType;
use App\PlantsRequirements\Models\Directories\ApplicationMethod;
use App\PlantsRequirements\Models\Directories\FertilizerType;
use App\PlantsRequirements\Models\Directories\LightType;
use App\PlantsRequirements\Models\Directories\Placement;
use App\PlantsRequirements\Models\Directories\RepottingFrequency;
use App\PlantsRequirements\Models\Directories\SpecialRepottingRequirements;
use App\PlantsRequirements\Models\Directories\WateringMethod;
use App\PlantsRequirements\Models\Directories\WhenToPrune;
use App\User\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PlantCreatingByEloquentTest extends TestCase
{
    use RefreshDatabase;

    protected PlantType $type;
    protected User $user;
    protected array $plantArray;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
        $this->type = PlantType::factory()->create();
        $this->plantArray = [
            'user_id'=>$this->user->id,
            'type_id' => $this->type->id,
            'name' => 'test plant',
            'description' => 'test plant',
            'planted_at' => '2025-04-21 19:57:06'
        ];
    }

    public function test_create_plant()
    {
        $created_plant = \App\Plant\Models\Plant::create($this->plantArray);
        $this->assertEquals($this->plantArray['name'], $created_plant->name);
    }

    public function test_create_plant_and_requirement()
    {
        $created_plant = \App\Plant\Models\Plant::create($this->plantArray);
        $this->assertEquals($this->plantArray['name'], $created_plant->name);

        $requirements = $created_plant->requiements()->create();

        $this->assertEquals($created_plant->id, $requirements->plant_id);
    }

    public function test_create_plant_and_watering_requirement()
    {
        $wateringMethod = WateringMethod::create(['name'=>'test', 'description'=>'test']);

        $created_plant = \App\Plant\Models\Plant::create($this->plantArray);
        $this->assertEquals($this->plantArray['name'], $created_plant->name);

        $requirements = $created_plant->requiements()->create();

        $this->assertEquals($created_plant->id, $requirements->plant_id);

        $wateringRequirement = $requirements->wateringRequirement()->create
        (
            [
                'watering_method_id' => $wateringMethod->id,
                'frequency_days' => rand(1, 12),
                'amount_ml' => rand(1, 12),
            ]
        );

        $this->assertEquals($wateringRequirement->id, $requirements->wateringRequirement()->first()->id);
        $this->assertEquals($wateringRequirement->watering_method_id, $wateringMethod->id);
    }

    public function test_create_plant_and_lighting_requirement()
    {
        $tightType = LightType::create(['name'=>'test', 'description'=>'test']);
        $placement = Placement::create(['name'=>'test', 'description'=>'test']);

        $created_plant = \App\Plant\Models\Plant::create($this->plantArray);
        $this->assertEquals($this->plantArray['name'], $created_plant->name);

        $requirements = $created_plant->requiements()->create();

        $this->assertEquals($created_plant->id, $requirements->plant_id);

        $lightingRequirement = $requirements->lightingRequirement()->create
        (
            [
                'light_type_id' => $tightType->id,
                'placement_id' => $placement->id,
                'hours_per_day' => rand(1, 12),
            ]
        );

        $this->assertEquals($lightingRequirement->id, $requirements->lightingRequirement()->first()->id);

        $this->assertEquals($lightingRequirement->light_type_id, $tightType->id);
        $this->assertEquals($lightingRequirement->placement_id, $placement->id);
    }

    public function test_create_plant_and_temperature_requirement()
    {
        $created_plant = \App\Plant\Models\Plant::create($this->plantArray);
        $this->assertEquals($this->plantArray['name'], $created_plant->name);

        $requirements = $created_plant->requiements()->create();

        $this->assertEquals($created_plant->id, $requirements->plant_id);

        $temperatureRequirement = $requirements->temperatureRequirement()->create
        (
            [
                'optimal_range_min' => rand(1, 12),
                'optimal_range_max' => rand(1, 12),
                'min_temp' => rand(1, 12),
                'max_temp' => rand(1, 12),
            ]
        );

        $this->assertEquals($temperatureRequirement->id, $requirements->temperatureRequirement()->first()->id);
    }

    public function test_create_plant_and_humidity_requirement()
    {
        $created_plant = \App\Plant\Models\Plant::create($this->plantArray);
        $this->assertEquals($this->plantArray['name'], $created_plant->name);

        $requirements = $created_plant->requiements()->create();

        $this->assertEquals($created_plant->id, $requirements->plant_id);

        $humidityRequirement = $requirements->humidityRequirement()->create
        (
            [
                'min_humidity_percent' => rand(1, 12),
                'notes' => 'test text',
            ]
        );

        $this->assertEquals($humidityRequirement->id, $requirements->humidityRequirement()->first()->id);
    }

    public function test_create_plant_and_fertilizing_requirement()
    {
        $fertilizerType = FertilizerType::create(['name'=>'test', 'description'=>'test']);
        $applicationMethod = ApplicationMethod::create(['name'=>'test', 'description'=>'test']);

        $created_plant = \App\Plant\Models\Plant::create($this->plantArray);
        $this->assertEquals($this->plantArray['name'], $created_plant->name);

        $requirements = $created_plant->requiements()->create();

        $this->assertEquals($created_plant->id, $requirements->plant_id);

        $fertilizingRequirement = $requirements->fertilizingRequirement()->create
        (
            [
                'fertilizer_type_id' => $fertilizerType->id,
                'application_method_id' => $applicationMethod->id,
                'frequency_days' => rand(1, 12),
            ]
        );

        $this->assertEquals($fertilizingRequirement->id, $requirements->fertilizingRequirement()->first()->id);

        $this->assertEquals($fertilizingRequirement->fertilizer_type_id, $fertilizerType->id);
        $this->assertEquals($fertilizingRequirement->application_method_id, $applicationMethod->id);
    }

    public function test_create_plant_and_repotting_requirement()
    {
        $repottingFrequency = RepottingFrequency::create(['name'=>'test', 'description'=>'test']);
        $specialRepottingRequirements = SpecialRepottingRequirements::create(['name'=>'test', 'description'=>'test']);

        $created_plant = \App\Plant\Models\Plant::create($this->plantArray);
        $this->assertEquals($this->plantArray['name'], $created_plant->name);

        $requirements = $created_plant->requiements()->create();

        $this->assertEquals($created_plant->id, $requirements->plant_id);

        $repottingRequirement = $requirements->repottingRequirement()->create
        (
            [
                'repotting_frequency_id' => $repottingFrequency->id,
                'special_requirements_id' => $specialRepottingRequirements->id,
                'notes' => rand(1, 12),
            ]
        );

        $this->assertEquals($repottingRequirement->id, $requirements->repottingRequirement()->first()->id);

        $this->assertEquals($repottingRequirement->repotting_frequency_id, $repottingFrequency->id);
        $this->assertEquals($repottingRequirement->special_requirements_id, $specialRepottingRequirements->id);
    }

    public function test_create_plant_and_pruning_requirement()
    {
        $whenToPrune = WhenToPrune::create(['name'=>'test', 'description'=>'test']);

        $created_plant = \App\Plant\Models\Plant::create($this->plantArray);
        $this->assertEquals($this->plantArray['name'], $created_plant->name);

        $requirements = $created_plant->requiements()->create();

        $this->assertEquals($created_plant->id, $requirements->plant_id);

        $pruningRequirement = $requirements->pruningRequirement()->create
        (
            [
                'when_to_prune_id' => $whenToPrune->id,
                'notes' => rand(1, 12),
            ]
        );

        $this->assertEquals($pruningRequirement->id, $requirements->pruningRequirement()->first()->id);
        $this->assertEquals($pruningRequirement->when_to_prune_id, $whenToPrune->id);
    }

    public function test_create_plant_and_pests_and_diseases_requirement()
    {
        $created_plant = \App\Plant\Models\Plant::create($this->plantArray);
        $this->assertEquals($this->plantArray['name'], $created_plant->name);

        $requirements = $created_plant->requiements()->create();

        $this->assertEquals($created_plant->id, $requirements->plant_id);

        $pestsAndDiseasesRequirement = $requirements->pestsAndDiseasesRequirement()->create
        (
            [
                'susceptible_to' => rand(1, 12),
                'prevention' => rand(1, 12),
                'notes' => rand(1, 12),
            ]
        );

        $this->assertEquals($pestsAndDiseasesRequirement->id, $requirements->pestsAndDiseasesRequirement()->first()->id);
    }

    public function test_create_plant_and_seasonal_care_requirement()
    {
        $created_plant = \App\Plant\Models\Plant::create($this->plantArray);
        $this->assertEquals($this->plantArray['name'], $created_plant->name);

        $requirements = $created_plant->requiements()->create();

        $this->assertEquals($created_plant->id, $requirements->plant_id);

        $seasonalCareRequirement = $requirements->seasonalCareRequirement()->create
        (
            [
                'growth_period' => rand(1, 12),
                'notes' => rand(1, 12),
            ]
        );

        $this->assertEquals($seasonalCareRequirement->id, $requirements->seasonalCareRequirement()->first()->id);
    }

    public function test_create_plant_and_compatibility_with_other_plants_requirement()
    {
        $created_plant = \App\Plant\Models\Plant::create($this->plantArray);
        $this->assertEquals($this->plantArray['name'], $created_plant->name);

        $requirements = $created_plant->requiements()->create();

        $this->assertEquals($created_plant->id, $requirements->plant_id);

        $compatibilityWithOtherPlantsRequirement = $requirements->compatibilityWithOtherPlantsRequirement()->create
        (
            [
                'compatible_with_others' => rand(1, 12),
                'allelopathy' => rand(1, 12),
                'notes' => rand(1, 12),
            ]
        );

        $this->assertEquals($compatibilityWithOtherPlantsRequirement->id, $requirements->compatibilityWithOtherPlantsRequirement()->first()->id);
    }
}
