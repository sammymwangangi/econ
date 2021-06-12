<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Project;
use App\Models\Task;

class Card extends Component
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
        return view('components.card', ['projects' => Project::all(), 'tasks' => Task::all(), 'tasksCompleted' => Task::where('status', '=', 'Complete'), 'tasksInProgress' => Task::where('status', '=', 'In Progress')]);
    }
}
