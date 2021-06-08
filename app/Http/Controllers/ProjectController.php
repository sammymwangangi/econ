<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Project;
use App\Models\User;
use App\Models\Team;
use Auth;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $teams = Team::all();
        $teams = Team::with('projects')->get();
        // $projects = Team::find(1)->projects;
        // $projects = Project::all();
        return view('projects.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();
        return view('projects.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:projects|max:255',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('taskmanager/projects')
                        ->withErrors($validator)
                        ->withInput();
        }

        $project = new Project();
        $project->name = $request->name;
        $project->description = $request->description;
        $project->team_id = $request->team_id;
        $project->user_id = Auth::id();
        $project->save();

        return redirect()->route('projects.index')
            ->with('success', 'Project created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        $tasks = Project::find($id)->tasks;
        return view('projects.show', compact('project','tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teams = Team::all();
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project','teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:projects|max:255',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('taskmanager/projects')
                        ->withErrors($validator)
                        ->withInput();
        }

        $project = Project::findOrFail($id);
        $project->name = $request->name;
        $project->description = $request->description;
        $project->team_id = $request->team_id;
        $project->user_id = Auth::id();
        $project->update();

        return redirect('taskmanager/projects')
            ->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect('taskmanager/projects')->with('success', 'Project Data is successfully deleted');
    }
}
