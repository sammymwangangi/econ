<?php

namespace App\Http\Livewire;

//use App\Policies\NotificationPolicy;
//use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Notifications extends Component
{
//    use AuthorizesRequests;
    use WithPagination;

//    public function mount(): void
//    {
//        abort_if(Auth::guest(), 403);
//    }

    public function markAsRead(string $notificationId)
    {
        $this->notificationId = $notificationId;

//        $this->authorize(NotificationPolicy::MARK_AS_READ, $this->notification);

        $this->notification->markAsRead();

        $this->emit('NotificationMarkedAsRead', Auth::user()->unreadNotifications()->count());
    }

    public function markAllAsRead()
    {
        $user = auth()->user();
        $user->unreadNotifications->markAsRead();
//        $this->notifications->markAsRead();
//        $this->emit('NotificationsMarkedAsRead', Auth::user()->unreadNotifications()->count());
    }

    public function getNotificationProperty(): DatabaseNotification
    {
        return DatabaseNotification::findOrFail($this->notificationId);
    }

    public function render(): View
    {
        return view('livewire.notifications', [
            'notifications' => auth()->user()->unreadNotifications()->paginate(10)
        ])->layout('components.task-layout');
    }
}
