<?php

namespace App\PlantsRequirements\Repositories;

interface DirectoriesRepositoryInterface
{
    public function getApplicationMethods(): array;
    public function getFertilizerTypes(): array;
    public function getLightTypes(): array;
    public function getPlacements(): array;
    public function getRepottingFrequencies(): array;
    public function getSpecialRepottingRequirements(): array;
    public function getWateringMethods(): array;
    public function getWhenToPrunes(): array;
}
