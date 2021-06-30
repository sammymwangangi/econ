<?php

namespace App\Http\Livewire\Task;

use Livewire\Component;
use App\Models\Task;
use App\Models\User;
use App\Models\Project;

class Assigned extends Component
{
    public function render()
    {
        return view('livewire.task.assigned', [
            'tasks' => Task::where('assigned_to', '=', auth()->user()->id)
            ->latest()
            ->paginate(4),
            'projects' => Project::all(),
            'users' => User::all(),
        ]);
    }
}
