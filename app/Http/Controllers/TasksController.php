<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;

class TasksController extends Controller
{
    public function index () {
        if (request('author')) {
            $author = User::where('name', request('author'))->firstOrFail();

            $tasks = $author->tasks;
        } else {
            $tasks = Task::latest()->get();
        }

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

    public function edit (Task $task) {
        return view('tasks.edit', ['task' => $task]);
    }

    public function update (Task $task) {
        $task->update($this->validateTask());

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
