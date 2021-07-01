<?php

namespace App\Http\Livewire\Task;

use Livewire\Component;
use App\Models\Task;
use App\Models\User;
use App\Models\Project;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Created extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $name,$description,$project_id,$start_at,$end_at,$status,$assigned_to,$priority,$taskfile;
    public $newTaskFile;
    public $taskId = null;
    public $saved = false;

    public $showModalForm = false;

    public function updated($field)
    {
        if ($field !== 'saved') {
            $this->saved = false;
        }
    }

    public function showCreateTaskModal()
    {
        $this->showModalForm = true;
    }

    public function updatedShowModalForm()
    {
        $this->reset();
    }

    public function storeTask()
    {
        $this->validate([
          'name' =>'required',
          'description'  => 'required',
          'start_at'  => 'required',
          'end_at'  => 'required',
          'status'  => 'required',
          'priority'  => 'required',
          'taskfile' => 'image|max:1024', // 1MB Max
        ]);

        $image_name = $this->taskfile->store('task_files', 'public');
        $task =new Task();
        $task->user_id = auth()->user()->id;
        $task->name = $this->name;
        $task->description = $this->description;
        $task->start_at = $this->start_at;
        $task->end_at = $this->end_at;
        $task->status = $this->status;
        $task->priority = $this->priority;
        $task->assigned_to = $this->assigned_to;
        $task->project_id = $this->project_id;
        $task->taskfile = $image_name;
        $task->save();
        $this->saved = true;
        $this->reset();
        session()->flash('message', 'Task created Successfully');
        // $this->emit('taskCreated');
    }
    public function showEditTaskModal($id)
    {
        $this->reset();
        $this->showModalForm = true;
        $this->taskId = $id;
        $this->loadEditForm();
    }

    public function loadEditForm()
    {
        $task = Task::findOrFail($this->taskId);
        $this->name = $task->name;
        $this->description = $task->description;
        $this->newTaskFile = $task->taskfile;
    }

    public function updateTask()
    {
        $this->validate([
          'name' =>'required',
          'description'  => 'required',
          'start_at'  => 'required',
          'end_at'  => 'required',
          'status'  => 'required',
          'priority'  => 'required'
      ]);

        Task::find($this->taskId)->update([
             'name' => $this->name,
             'description'  => $this->description,
             'start_at'  => $this->start_at,
             'end_at'  => $this->end_at,
             'status'  => $this->status,
             'priority'  => $this->priority,
             'assigned_to'  => $this->assigned_to,
             'project_id'  => $this->project_id,
             'taskfile' => $this->taskfile->store('task_files', 'public')
        ]);
        $this->reset();
        session()->flash('message', 'Task Updated Successfully');
    }

    public function deleteTask($id)
    {
        $task = Task::find($id);
        Storage::delete('public/task_files/', $task->taskfile);
        $task->delete();
        session()->flash('message', 'Task Deleted Successfully');
    }

    public function refreshChildren()
    {

    }

    public function render()
    {
        return view('livewire.task.created', [
            'tasks' => Task::where('user_id', '=', auth()->user()->id)
            ->latest()
            ->paginate(4),
            'projects' => Project::all(),
            'users' => User::all(),
        ]);
    }
}
