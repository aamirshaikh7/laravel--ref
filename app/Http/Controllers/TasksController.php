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
}
