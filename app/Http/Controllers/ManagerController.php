<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Project;

class ManagerController extends Controller
{
    public function index()
    {
        $tasks = Task::where('user_id', '=', auth()->user()->id)->paginate(5);
        // $teams = Team::with('projects')->get();
        $projects = Project::paginate(4);
        return view('manager.index', compact('tasks','projects'));
    }
}
