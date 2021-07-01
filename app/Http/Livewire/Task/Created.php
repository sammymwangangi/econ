<?php

namespace App\Http\Livewire\Task;

use Livewire\Component;
use App\Models\Task;
use App\Models\User;
use App\Models\Project;

class Created extends Component
{
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
