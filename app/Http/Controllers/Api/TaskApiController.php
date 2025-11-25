<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskApiController extends Controller
{
    public function index()
    {
        return Task::where('user_id', auth()->id())->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'       => 'required',
            'description' => 'nullable'
        ]);

        $task = Task::create([
            'user_id'     => auth()->id(),
            'title'       => $data['title'],
            'description' => $data['description'] ?? null,
            'status'      => 'pending'
        ]);

        return response()->json($task, 201);
    }

    public function show($id)
    {
        return Task::where('user_id', auth()->id())
                   ->where('id', $id)
                   ->firstOrFail();
    }

    public function update(Request $request, $id)
    {
        $task = Task::where('user_id', auth()->id())
                    ->where('id', $id)
                    ->firstOrFail();

        $task->update($request->only('title', 'description', 'status'));

        return response()->json($task);
    }

    public function destroy($id)
    {
        $task = Task::where('user_id', auth()->id())
                    ->where('id', $id)
                    ->firstOrFail();

        $task->delete();

        return response()->json(['message' => 'Task deleted']);
    }
}
