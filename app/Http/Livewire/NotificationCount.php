<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class NotificationCount extends Component
{
    public $count;

    protected $listeners = [
        'NotificationMarkedAsRead' => 'updateCount',
    ];

    public function render(): View
    {
        $this->count = Auth::user()->unreadNotifications()->count();

        return view('livewire.notification_count', [
            'count' => $this->count,
        ]);
    }

    public function updateCount(int $count): int
    {
        return $count;
    }
}
