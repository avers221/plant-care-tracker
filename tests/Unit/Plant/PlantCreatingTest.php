<?php

namespace Tests\Unit\Plant;

use App\Plant\Models\PlantType;
use App\User\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PlantCreatingTest extends TestCase
{
    use RefreshDatabase;

    protected PlantType $plantType;
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

    public function test_create_plant_and_some_requirement()
    {
        $created_plant = \App\Plant\Models\Plant::create($this->plantArray);
        $this->assertEquals($this->plantArray['name'], $created_plant->name);

        $requirements = $created_plant->requiements()->create();

        $this->assertEquals($created_plant->id, $requirements->plant_id);
    }
}
