<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    public function index()
    {
        $tasks=Task::where('user_id', auth()->user()->id)->get();

        return view('task.index', compact('tasks'));
    }

    public function create()
    {
        return view('task.form'); 
    }

    public function store(TaskRequest $request)
    {
        Task::create($request->persist());

        return redirect()->route('tasks.index')->flashify('created');
    }

 
    public function show($id)
    {
        //
    }

    public function edit(Task $task)
    {
        return view('task.form',compact('task'));
    }

   
    public function update(TaskRequest $request, Task $task)
    {

        $task->update($request->persist());

        return redirect()->route('tasks.index')->flashify('updated');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')->flashify('deleted');
    }
}

