<?php

use App\Http\Controllers\Api\V1\Task\TaskController;
use Illuminate\Support\Facades\Route;


Route::prefix('/v1')->group(function () {
    Route::get('/tasks', [TaskController::class, 'index'])->name('task.index');
    Route::post('/tasks', [TaskController::class, 'create'])->name('task.create');
    Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('task.show');
    Route::put('/tasks/{task}', [TaskController::class, 'edit'])->name('task.edit');
    Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('task.destroy');
});
