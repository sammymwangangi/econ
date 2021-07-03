<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Notifications\ProjectCreated;
use Livewire\WithPagination;

class Projects extends Component
{
    use WithPagination;

    public $name;
    public $description;
    public $team_id;
    public $projectId = null;

    public $showModalForm = false;

    public function refreshChildren()
    {

    }

    public function showCreateProjectModal()
    {
        $this->showModalForm = true;
    }

    public function updatedShowModalForm()
    {
        $this->reset();
    }

    public function storeProject(Request $request)
    {
        $this->validate([
          'name' =>'required',
          'description'  => 'required',
      ]);

        $project =new Project();
        $project->user_id = auth()->user()->id;
        $project->name = $this->name;
        $project->description = $this->description;
        $project->team_id = $this->team_id;
        $project->save();
        // request()->user()->notify(new ProjectCreated($project));
        $this->reset();
        // session()->flash('message', 'Project created Successfully');
        $this->alert('success', 'Project created Successfully!', [
            'position' =>  'top-end', 
            'timer' =>  3000,  
            'toast' =>  true, 
            
            'text' =>  '', 
            'confirmButtonText' =>  '', 
            'cancelButtonText' =>  '', 
            'showCancelButton' =>  false, 
            'showConfirmButton' =>  false, 
        ]);
    }
    public function showEditProjectModal($id)
    {
        $this->reset();
        $this->showModalForm = true;
        $this->projectId = $id;
        $this->loadEditForm();
    }

    public function loadEditForm()
    {
        $project = Project::findOrFail($this->projectId);
        $this->name = $project->name;
        $this->description = $project->description;
    }

    public function updateProject()
    {
        $this->validate([
          'name' =>'required',
          'description'  => 'required',
      ]);

        Project::find($this->projectId)->update([
             'name' => $this->name,
             'description'  => $this->description
        ]);
        $this->reset();
        // flash('message', 'Project Updated Successfully');
        $this->alert('success', 'Project Updated Successfully!', [
            'position' =>  'top-end', 
            'timer' =>  3000,  
            'toast' =>  true, 
            
            'text' =>  '', 
            'confirmButtonText' =>  '', 
            'cancelButtonText' =>  '', 
            'showCancelButton' =>  false, 
            'showConfirmButton' =>  false, 
        ]);
    }

    public function deleteProject($id)
    {
        $project = Project::find($id);
        $project->delete();
        // flash('message', 'Project Deleted Successfully');
        $this->alert('success', 'Project Deleted Successfully!', [
            'position' =>  'top-end', 
            'timer' =>  3000,  
            'toast' =>  true, 
            
            'text' =>  '', 
            'confirmButtonText' =>  '', 
            'cancelButtonText' =>  '', 
            'showCancelButton' =>  false, 
            'showConfirmButton' =>  false, 
        ]);
    }

    public function render()
    {
        return view('livewire.projects', [
            'projects' => Project::orderBy('created_at', 'DESC')->paginate(5),
            'teams' => Team::all()
        ]);
    }
}
