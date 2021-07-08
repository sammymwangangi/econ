<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;
use App\Models\Project;
use App\Models\User;

class Recap extends Component
{
    public function render()
    {
        return view('livewire.recap', [
            'overdueTasks' => Task::whereDate('end_at', '<', now())
                ->where('assigned_to', '=', auth()->user()->id)
                ->latest()
                ->paginate(5),
            'dueTodayTasks' => Task::where('end_at', '=', now())
                ->where('assigned_to', '=', auth()->user()->id)
        ])->layout('components.task-layout');
    }
}
