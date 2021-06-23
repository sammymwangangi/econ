<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;
use Auth;
use Livewire\WithPagination;

class Tasks extends Component
{
    use WithPagination;
    public $showEditModal = false;
    public Task $editing;
    // public $tasks;

    public function rules()
    {
        return [
            'editing.name' => 'required|min:3',
        ];
    }

    public function mount()
    {
        // $this->editing = Task::make(['date' => now()]);
    }

    public function edit(Task $task)
    {
        $this->editing = $task;

        $this->showEditModal = true;
    }

    public function save()
    {
        $this->validate();

        $this->editing->save();

        $this->showEditModal = false;
    }

    public function refreshChildren()
    {
       
    }
     public function render()
    {
        return view('livewire.tasks', [
            'tasks' => Task::where('user_id', '=', Auth::user()->id)->paginate(5)
        ]);

        // $tasks = Task::where('user_id', '=', Auth::user()->id)->paginate(5);
        // return view('livewire.tasks', [
        //     'tasks' => $tasks
        // ]);
    }
}
