<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Task;
use App\Models\Project;
use App\Models\User;

class Recap extends Component
{
    public function render()
    {
        $today = Carbon::now();
        return view('livewire.recap', [
            'overdueTasks' => Task::whereDate('end_at', '<', now())
                ->where('assigned_to', '=', auth()->user()->id)
                ->latest()
                ->paginate(5),
            'dueTodayTasks' => Task::whereDate('end_at', $today)
        ])->layout('components.task-layout');
    }
}
