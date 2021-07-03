<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Notifications extends Component
{
    public function render()
    {
        return view('livewire.notifications', [
            'notifications' => auth()->user()->notifications
        ])->layout('components.task-layout');
    }
}
