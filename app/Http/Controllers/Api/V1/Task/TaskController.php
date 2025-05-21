<?php

namespace App\Http\Controllers\Api\V1\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Task\ApiTaskCreateRequest;
use App\Http\Requests\API\V1\Task\ApiTaskUpdateRequest;
use App\Http\Resources\V1\Task\TaskResource;
use App\Models\Task;
use App\Services\Task\TaskService;

class TaskController extends Controller
{
    protected $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function index()
    {
        return TaskResource::collection(Task::all());
    }

    public function create(ApiTaskCreateRequest $apiTaskCreateRequest)
    {
        $data = $apiTaskCreateRequest->validated();
        $task = $this->taskService->store($data);

        return new TaskResource($task);
    }

    public function show(Task $task)
    {
        return new TaskResource($task);
    }

    public function edit(Task $task, ApiTaskUpdateRequest $apiTaskUpdateRequest)
    {
        $data = $apiTaskUpdateRequest->validated();
        $task = $this->taskService->update($task, $data);

        return new TaskResource($task);
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json([
            "message" => "Task deleted"
        ]);
    }

}
