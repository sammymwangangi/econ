<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Project;
use App\Models\User;
use App\Models\Team;
use Auth;
use Illuminate\Support\Facades\DB;

class ManagerController extends Controller
{
    public function index()
    {
        $tasks = Task::where('user_id', '=', Auth::user()->id)->paginate(5);
        // $teams = Team::with('projects')->get();
        $projects = Project::paginate(4);
        return view('manager.index', compact('tasks','projects'));
    }
}
