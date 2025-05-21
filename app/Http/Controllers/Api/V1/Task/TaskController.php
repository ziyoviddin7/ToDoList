<?php

namespace App\Http\Controllers\Api\V1\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\TaskCreateRequest;
use App\Http\Resources\Task\TaskResource;
use App\Services\Task\TaskService;

class TaskController extends Controller
{
    protected $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function create(TaskCreateRequest $taskCreateRequest)
    {
        $data = $taskCreateRequest->validated();
        $task = $this->taskService->store($data);

        return new TaskResource($task);
    }
}
