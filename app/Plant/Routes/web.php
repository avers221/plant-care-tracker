<?php


use App\Profile\Controllers\Web\PasswordController;
use App\Profile\Controllers\Web\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware('auth')->group(function () {
    Route::get('plant/{plantId}', [\App\Plant\Controllers\Web\PlantController::class, 'show'])->name('plant.show');
});
