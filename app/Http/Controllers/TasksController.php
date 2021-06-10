<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Project;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Validator;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tasks = Task::all();
        $projects = Project::with('tasks')->get();

        return view('tasks.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::all();
        $users = User::all()->except([1]);
        return view('tasks.create', compact('projects','users'));
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
            'name' => 'required|unique:tasks|max:255',
            'description' => 'required',
            'status' => 'required',
            'priority' => 'required',
            'start_at' => 'required',
            'assigned_to' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $task = new task();
        $task->name = $request->name;
        $task->description = $request->description;
        $task->status = $request->status;
        $task->priority = $request->priority;
        $task->start_at = $request->start_at;
        $task->end_at = $request->end_at;
        $task->assigned_to = $request->assigned_to;
        $task->project_id = $request->project_id;
        $task->user_id = Auth::id();
        $task->save();

        return redirect()->route('tasks.index')
            ->withSuccessMessage('Task added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        $projects = Project::all();
        $users = User::all()->except([1]);
        return view('tasks.edit', compact('task','projects','users'));
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
            'name' => 'required|unique:tasks|max:255',
            'description' => 'required',
            'status' => 'required',
            'priority' => 'required',
            'start_at' => 'date',
            'end_at' => 'date',
            'assigned_to' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect('taskmanager/tasks')
                        ->withErrors($validator)
                        ->withInput();
        }

        $task = Task::findOrFail($id);
        $task->name = $request->name;
        $task->description = $request->description;
        $task->status = $request->status;
        $task->priority = $request->priority;
        $task->start_at = $request->start_at;
        $task->end_at = $request->end_at;
        $task->assigned_to = $request->assigned_to;
        $task->project_id = $request->project_id;
        $task->user_id = Auth::id();
        $task->save();

        return redirect('taskmanager/tasks')
            ->withSuccessMessage('Task Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect('taskmanager/tasks')->withSuccessMessage('Task was DELETED SUCCESSFULLY!');
    }
}
