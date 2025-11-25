<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tasks = Task::where('user_id', Auth::id())->orderBy('id', 'desc')->get();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|max:255',
            'description' => 'nullable',
        ]);

        Task::create([
            'user_id'     => Auth::id(),
            'title'       => $request->title,
            'description' => $request->description,
            'status'      => 'pending'
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task created!');
    }

    public function edit(Task $task)
    {
        if ($task->user_id != Auth::id()) {
            abort(403);
        }

        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        if ($task->user_id != Auth::id()) {
            abort(403);
        }

        $request->validate([
            'title'       => 'required|max:255',
            'description' => 'nullable',
            'status'      => 'required'
        ]);

        $task->update($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task updated!');
    }

    public function destroy(Task $task)
    {
        if ($task->user_id != Auth::id()) {
            abort(403);
        }

        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted!');
    }
}
