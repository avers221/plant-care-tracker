<?php

namespace App\Plant\Actions;

use App\Core\Shared\Contracts\DirectoriesDataProviderInterface;
use App\Core\Shared\Contracts\GetRequirementsByPlantIdDataProviderInterface;
use App\Plant\DTO\PlantPageDTO;
use App\Plant\Repositories\PlantRepositoryInterface;
use App\Plant\Repositories\PlantTypeRepositoryInterface;

class GetPlantByIdAction
{
    public function __construct(
        protected PlantRepositoryInterface $plantRepository,
        protected PlantTypeRepositoryInterface $plantTypesRepository,
        protected GetRequirementsByPlantIdDataProviderInterface $requirements,
        protected DirectoriesDataProviderInterface $directoriesDataProvider,
    )
    {
    }

    public function handle(string $plantId): PlantPageDTO
    {
        return new PlantPageDTO(
            $this->plantRepository->getPlantById($plantId),
            $this->plantTypesRepository->getPlantTypes(),
            $this->requirements->provide($plantId),
            $this->directoriesDataProvider->provide(),
        );
    }
}
