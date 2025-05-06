<?php

namespace App\Plant\Controllers\Web;

use App\Core\Controllers\Controller;
use App\Plant\Actions\GetPlantByIdAction;
use Inertia\Inertia;
use Inertia\Response;

class PlantController extends Controller
{
    public function show(string $plantId, GetPlantByIdAction $action): Response
    {
        $pageDTO = $action->handle($plantId);
        return Inertia::render('plants/Show', [
            'plant' => $pageDTO->plant,
            'plantTypes' => $pageDTO->plantTypes->items,
            'requirements' => $pageDTO->requirements,
            'directories' => $pageDTO->directories,
        ]);
    }
}
