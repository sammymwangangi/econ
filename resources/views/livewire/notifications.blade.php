<div class="lg:flex justify-between">
    <div class="flex-1"></div>

    <div class="flex-1 divide-y divide-black divide-opacity-25 gap-2 bg-white px-4 py-4 my-4 rounded-lg">
        <div class="flex justify-between py-2">
            <div class="text-lg font-bold">Latest Tasks Created</div>
            @if ($notifications->count())
            <div wire:click="markAllAsRead" class="cursor-pointer text-sm text-green-500 font-semibold">Mark All as Read</div>
            @endif
        </div>
        @if ($notifications->count())
            @foreach($notifications as $notification)
            <div class="flex items-center py-2 hover:bg-red-200">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <div class="flex flex-1 justify-between text-gray-600">
                    {{$notification->data['task']['name']}}
                    <button wire:click="markAsRead('{{ $notification->id  }}')" class="text-green-500">
                        Mark as read
                    </button>
                </div>
            </div>
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
