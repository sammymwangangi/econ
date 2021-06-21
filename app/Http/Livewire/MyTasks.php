<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;
use Auth;
use Livewire\WithPagination;

class MyTasks extends Component
{
    use WithPagination;
    // public $tasks;

    public $search = '';

    public function render()
    {
        return view('livewire.my-tasks', [
            'tasks' => Task::search('status', $this->search)
            ->where('user_id', '=', Auth::user()->id)->paginate(5)
        ]);
    }
}
