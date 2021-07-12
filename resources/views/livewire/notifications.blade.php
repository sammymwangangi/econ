<div class="lg:flex justify-between">
    <div class="flex-1"></div>

    <div class="flex-1 divide-y divide-black divide-opacity-25 gap-2 bg-white px-4 py-4 my-4 rounded-lg">
        <div class="flex justify-between py-2">
            <div class="text-lg font-bold">Notifications</div>
            @if ($notifications->count())
            <div wire:click="markAllAsRead" class="cursor-pointer text-sm text-green-500 font-semibold">Mark All as Read</div>
            @endif
        </div>
        @if ($notifications->count())
            @foreach($notifications as $notification)
                @if($notification->type == 'App\Notifications\TaskAdded')
                    <div class="flex items-center py-2 hover:bg-gray-50">
                        <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                        <div class="flex flex-1 justify-between text-gray-600">
                            <div>
                                You have been assigned a <a href="{{route('tasks.show', $notification->data['task']['id'])}}" class="text-blue-500">task</a>.
                            </div>
                            <button wire:click="markAsRead('{{ $notification->id  }}')" class="text-green-500 text-xs">
                                Mark as read
                            </button>
                        </div>
                    </div>
                @elseif($notification->type == 'App\Notifications\CommentAdded')
                    <div class="flex items-center py-2 hover:bg-gray-50">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                        <div class="flex flex-1 justify-between text-gray-600">
                            <div>
                                A new comment has been added on <a href="{{route('tasks.show', $notification->data['comment']['task_id'])}}/#comments" class="text-blue-500">this task</a>.
                            </div>
                            <button wire:click="markAsRead('{{ $notification->id  }}')" class="text-green-500 text-xs">
                                Mark as read
                            </button>
                        </div>
                    </div>
                @endif
            @endforeach
                {{ $notifications->links() }}
        @else
            <p class="text-gray-600 text-base">
                You have no unread notifications
            </p>
        @endif
    </div>

    <div class="flex-1"></div>
</div>
