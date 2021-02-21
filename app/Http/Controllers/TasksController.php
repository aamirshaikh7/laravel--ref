<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    public function index () {
        $tasks = Task::latest()->get();
        
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create () {
        return view('tasks.create');
    }

    public function store () {
        $task = new Task($this->validateTask());

        $task->user_id = 1;

        $task->save();

        return redirect(route('tasks.index'));
    }

    protected function validateTask () {
        return request()->validate([
            'title' => 'required | min:3 | max:255',
            'due' => 'required'
        ]);
    }
}
