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
    public $isModalOpen = false;
    public $name,$description,$project_id,$start_at,$end_at,$status,$assigned_to,$priority,$taskfile;

    public $selectedTask = null;

    public $newTask;

    use WithFileUploads;

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
        // Task::create($this->newTask);

        $this->validate([
          'name' =>'required',
          'description'  => 'required',
          'start_at'  => 'required',
          'end_at'  => 'required',
          'status'  => 'required',
          'priority'  => 'required',
          'taskfile' => 'image|max:1024', // 1MB Max
        ]);

        $image_name = $this->taskfile->store('task_files', 'public');
        $task =new Task();
        $task->user_id = auth()->user()->id;
        $task->name = $this->name;
        $task->description = $this->description;
        $task->start_at = $this->start_at;
        $task->end_at = $this->end_at;
        $task->status = $this->status;
        $task->priority = $this->priority;
        $task->assigned_to = $this->assigned_to;
        $task->project_id = $this->project_id;
        $task->taskfile = $image_name;
        $task->save();
        $this->saved = true;
        $this->reset();
        session()->flash('message', 'Task created Successfully');

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
            'taskfile' => '',
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
