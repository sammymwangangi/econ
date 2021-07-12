<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class RecapNotify extends Component
{
    public function render()
    {
        return view('livewire.recap-notify', [
            'overdueTasks' => Task::whereDate('end_at', '<', now())
                ->where('assigned_to', '=', auth()->user()->id)
                ->count()
        ]);
    }
}
