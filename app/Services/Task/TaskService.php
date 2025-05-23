<?php

namespace App\Services\Task;

use App\Models\Task;

class TaskService 
{
    public function store($data)
    {
        $task = Task::create($data);
        return $task;
    }

    public function update($task, $data)
    {
        $task->update($data);
        return $task;
    }
}