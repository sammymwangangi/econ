
<div class="font-bold text-sm">Notifications</div>
@if ($notifications->count())
    @foreach($notifications as $notification)

        @if($notification->type == 'App\Notifications\TaskAdded')
            <div class="flex text-xs">
                <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                You have been assigned a task.
            </div>
        @elseif($notification->type == 'App\Notifications\CommentAdded')
            <div class="flex text-xs">
                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                {{$notification->data['comment']['user_id']}}A new comment has been created.
            </div>
        @endif

    @endforeach
    <div class="text-center px-1 py-1 text-green-500 font-bold my-2">
        <a href="{{url('taskmanager/notifications')}}" class="">View all</a>
    </div>
@else
    <p class="text-gray-600 text-xs">
        You have no unread notifications
    </p>
@endif

