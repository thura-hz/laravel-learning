<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return $tasks;
    }


    public function store(StoreTaskRequest $request) {
        $data = $request->validated();
        $task = Task::create($data);
        return response()->json($task, 201);
    }

    public function show(Task $task) {
        return $task;
    }

    public function update(UpdateTaskRequest $request, Task $task) {
        $task->update($request->validated());

        return $task;

    }

    public function destroy(Task $task) {
        $task->delete();
        return response()->noContent();
    }
}
