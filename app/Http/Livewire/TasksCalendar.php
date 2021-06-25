<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Asantibanez\LivewireCalendar\LivewireCalendar;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use App\Models\Task;
use App\Models\Project;
use App\Models\User;
use Auth;

class TasksCalendar extends LivewireCalendar
{
    public $isModalOpen = false;

    public $selectedTask = null;

    public $newTask;

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

    public function unscheduledEvents() : Collection
    {
        return Task::query()
            ->whereNull('start_at')
            ->get();
    }

    public function onDayClick($year, $month, $day)
    {
        $this->isModalOpen = true;

        $this->resetNewTask();

        $this->newTask['start_at'] = Carbon::today()
            ->setDate($year, $month, $day)
            ->format('Y-m-d');
    }

    public function saveTask()
    {
        Task::create($this->newTask);

        $this->isModalOpen = false;
    }

    public function onEventDropped($eventId, $year, $month, $day)
    {
        $task = Task::find($eventId);
        $task->start_at = Carbon::today()->setDate($year, $month, $day);
        $task->save();
    }

    private function resetNewTask()
    {
        $this->newTask = [
            'title' => '',
            'notes' => '',
            'start_at' => '',
            'end_at' => '',
            'status' => '',
            'assigned_to' => '',
            'priority' => '',
        ];
    }

    public function onEventClick($eventId)
    {
        $this->selectedTask = Task::find($eventId);
    }

    public function unscheduleTask()
    {
        $task = Task::find($this->selectedTask['id']);
        $task->start_at = null;
        $task->save();

        $this->selectedTask = null;
    }

    public function closeTaskDetailsModal()
    {
        $this->selectedTask = null;
    }

    public function deleteEvent($eventId)
    {
        $task = Task::find($eventId);
        $task->delete();
    }

    public function render()
    {
        return parent::render()->with([
            'unscheduledEvents' => $this->unscheduledEvents(),
            'projects' => Project::all(),
            'users' => User::all(),
        ]);
    }
}
