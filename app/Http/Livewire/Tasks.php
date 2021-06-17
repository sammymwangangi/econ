<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;
use Auth;
use Livewire\WithPagination;

class Tasks extends Component
{
    use WithPagination;
    // public $tasks;


    public function refreshChildren()
    {
        $this->emit('refreshChildren');
    }
    public function render()
    {
        return view('livewire.tasks', [
            'tasks' => Task::where('user_id', '=', Auth::user()->id)->paginate(5)
        ]);
    }
}
