<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;

class GeneralController extends Controller
{
    public function welcome(){
        $user = auth()->user()->id;
        $projects = Project::all();
        return view('vendor.jetstream.components.welcome', compact('user','projects'));
    }
    public function index ()
    {

        $projects = Project::all();
        return view('dashboard', compact('projects'));
    }
}
