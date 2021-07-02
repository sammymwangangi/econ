<?php

namespace App\Http\Livewire;

use Asantibanez\LivewireCalendar\LivewireCalendar;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use App\Models\Task;
use App\Models\Project;
use App\Models\User;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class TasksCalendar extends LivewireCalendar
{
    use WithFileUploads;

    public $name,$description,$project_id,$start_at,$end_at,$status,$assigned_to,$priority,$taskfile;
    public $newTaskFile;

    public $selectedTask = null;
    public $isModalOpen = false;

    public $newTask;

    public function events(): Collection
    {
        return Task::query()
        ->whereDate('start_at', '>=', $this->gridStartsAt)
        ->whereDate('end_at', '<=', $this->gridEndsAt)
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

    // public function unscheduledEvents() : Collection
    // {
    //     return Task::query()
    //         ->whereNull('start_at')
    //         ->get();
    // }

    public function onDayClick($year, $month, $day)
    {
        $this->isModalOpen = true;

        $this->resetNewTask();
        $image_name = $this->taskfile->store('task_files', 'public');

        $this->newTask['start_at'] = Carbon::today()->setDate($year, $month, $day)->format('Y-m-d');
        $this->newTask['end_at'] = Carbon::today()->setDate($year, $month, $day)->format('Y-m-d');
        $this->newTask['name'] = $this->name;
        $this->newTask['user_id'] = auth()->user()->id;
        $this->newTask['description'] = $this->description;
        $this->newTask['status'] = $this->status;
        $this->newTask['priority'] = $this->priority;
        $this->newTask['assigned_to'] = $this->assigned_to;
        $this->newTask['project_id'] = $this->project_id;
        $this->newTask['taskfile'] = $image_name;
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
            // 'unscheduledEvents' => $this->unscheduledEvents(),
            'projects' => Project::all(),
            'users' => User::all(),
        ]);
    }
}
