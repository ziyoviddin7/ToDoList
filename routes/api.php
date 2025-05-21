<?php

use App\Http\Controllers\Api\V1\Task\TaskController;
use Illuminate\Support\Facades\Route;


Route::prefix('/v1')->group(function () {
    Route::post('/tasks', [TaskController::class, 'create'])->name('task.create');
});
