<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Asantibanez\LivewireCalendar\LivewireCalendar;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use App\Models\Task;

class TasksCalendar extends LivewireCalendar
{
    public function events(): Collection
    {
        return Task::query()
            ->whereDate('start_at', '>=', $this->gridStartsAt)
            ->whereDate('start_at', '<=', $this->gridEndsAt)
            ->get()
            ->map(function (Task $task) {
                return [
                    'id' => $task->id,
                    'title' => $task->name,
                    'description' => $task->description,
                    'date' => $task->start_at,
                ];
            });
    }
}
