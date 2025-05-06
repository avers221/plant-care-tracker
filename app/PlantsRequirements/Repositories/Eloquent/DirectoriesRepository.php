<?php

namespace App\PlantsRequirements\Repositories\Eloquent;

use App\PlantsRequirements\Models\Directories\ApplicationMethod;
use App\PlantsRequirements\Models\Directories\FertilizerType;
use App\PlantsRequirements\Models\Directories\LightType;
use App\PlantsRequirements\Models\Directories\Placement;
use App\PlantsRequirements\Models\Directories\RepottingFrequency;
use App\PlantsRequirements\Models\Directories\SpecialRepottingRequirement;
use App\PlantsRequirements\Models\Directories\WateringMethod;
use App\PlantsRequirements\Models\Directories\WhenToPrune;
use \App\PlantsRequirements\Repositories\DirectoriesRepositoryInterface;

class DirectoriesRepository implements DirectoriesRepositoryInterface
{

    public function getApplicationMethods(): array
    {
        return ApplicationMethod::all()->toArray();
    }

    public function getFertilizerTypes(): array
    {
        return FertilizerType::all()->toArray();
    }

    public function getLightTypes(): array
    {
        return LightType::all()->toArray();
    }

    public function getPlacements(): array
    {
        return Placement::all()->toArray();
    }

    public function getRepottingFrequencies(): array
    {
        return RepottingFrequency::all()->toArray();
    }

    public function getSpecialRepottingRequirements(): array
    {
        return SpecialRepottingRequirement::all()->toArray();
    }

    public function getWateringMethods(): array
    {
        return WateringMethod::all()->toArray();
    }

    public function getWhenToPrunes(): array
    {
        return WhenToPrune::all()->toArray();
    }
}
