<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Task;
class TaskFile extends Component
{
    use WithFileUploads;

    public $taskfile;

    public function save()
    {
        $this->validate([
            'taskfile' => 'image|max:1024', // 1MB Max
        ]);

        // $this->taskfile->store('task-files');
        $filename = $this->taskfile->store('/', 'task-files');
    }

    public function render()
    {
        return view('livewire.tasks');
    }
}
