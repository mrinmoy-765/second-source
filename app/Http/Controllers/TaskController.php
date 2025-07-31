<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
      // Add a Task
    public function addTask(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'is_completed' => 'boolean'
        ]);

        $task = Task::create([
            'title' => $validated['title'],
            'is_completed' => $validated['is_completed'] ?? false,
        ]);

        return response()->json($task, 201);
    }

    // Mark Task as Completed
     public function markCompleted(Request $request, $id){

    $validated = $request->validate([
        'is_completed' => 'required|boolean',
    ]);

    $task = Task::find($id);

    if (!$task) {
        return response()->json([
            'status' => false,
            'message' => 'Task not found'
        ], 404);
    }

    $task->is_completed = $validated['is_completed'];
    $task->save();

     return response()->json($task, 201);
}

    // Get Pending Tasks
    public function getPendingTasks()
    {
        $pendingTasks = Task::where('is_completed', false)->get();

        return response()->json([
            'status' => true,
            'tasks' => $pendingTasks
        ]);
    }
}
