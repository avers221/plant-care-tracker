<?php

namespace App\PlantsRequirements\DataProviders;

use App\Core\Shared\DTO\DirectoriesListDTO;
use App\PlantsRequirements\Repositories\DirectoriesRepositoryInterface;

class DirectoriesDataProvider
{
    public function __construct(protected DirectoriesRepositoryInterface $repository)
    {
    }

    /**
     * @throws \ReflectionException
     */
    public function provide(): DirectoriesListDTO
    {
        $data = [
            'applicationMethod' => $this->repository->getApplicationMethods(),
            'fertilizerType' => $this->repository->getFertilizerTypes(),
            'lightType' => $this->repository->getLightTypes(),
            'placement' => $this->repository->getPlacements(),
            'repottingFrequency' => $this->repository->getRepottingFrequencies(),
            'specialRepottingRequirements' => $this->repository->getSpecialRepottingRequirements(),
            'wateringMethod' => $this->repository->getWateringMethods(),
            'whenToPrune' => $this->repository->getWhenToPrunes(),
        ];
        return new DirectoriesListDTO($data);
    }
}
