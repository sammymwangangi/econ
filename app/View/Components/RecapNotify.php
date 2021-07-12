<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Task;

class RecapNotify extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $overDueTasks = Task::whereDate('end_at', '<', now())
            ->where('assigned_to', '=', auth()->user()->id)
            ->where('status', '!', 'Completed')
            ->count();
        return view('components.recap-notify', compact('overDueTasks'));
    }
}
