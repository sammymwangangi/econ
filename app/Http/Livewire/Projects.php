<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use App\Models\Team;
use Livewire\WithPagination;
use Auth;

class Projects extends Component
{
    use WithPagination;

    public $sortBy = 'id';
    public $sortAsc = true;
    public $project;
    public Team $team;
    public $confirmingProjectDeletion = false;
    public $confirmingProjectAdd = false;

    
    // public function mount($id)
    // {
    //     $this->team = Team::findOrFail($id);
    // }

    protected $rules = [
        'project.name' => 'required|string|min:4',
        'project.description' => 'required',
    ];

    public function render()
    {
        $teams = Team::all();
        $projects = Project::orderBy( $this->sortBy, $this->sortAsc ? 'ASC' : 'DESC');
 
        $projects = $projects->paginate(10);
 
        return view('livewire.projects', [
            'projects' => $projects,
            'teams' => $teams,
        ]);
    }

    public function confirmProjectDeletion( $id) 
    {
        $this->confirmingProjectDeletion = $id;
    }
 
    public function deleteProject( Project $project) 
    {
        $project->delete();
        $this->confirmingProjectDeletion = false;
        session()->flash('message', 'Project Deleted Successfully');
    }
 
    public function confirmProjectAdd() 
    {
        $this->reset(['project']);
        $this->confirmingProjectAdd = true;
    }
 
    public function confirmProjectEdit(Project $project) 
    {
        $this->resetErrorBag();
        $this->project = $project;
        $this->confirmingProjectAdd = true;
    }
 
    public function saveProject() 
    {
        $this->validate();
 
        if( isset( $this->project->id)) {
            $this->project->save();
            session()->flash('message', 'Project Saved Successfully');
        } else {
            auth()->user()->projects()->create([
                'name' => $this->project['name'],
                'description' => $this->project['description'],
                'team_id' => $this->project['team_id'],
            ]);
            $this->project->save();
            session()->flash('message', 'Project Added Successfully');
        }
 
        $this->confirmingProjectAdd = false;
 
    }
}
