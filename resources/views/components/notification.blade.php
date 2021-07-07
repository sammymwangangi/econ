
<div class="font-bold">Notifications</div>
@if ($notifications->count())
    @foreach($notifications as $notification)
        @if($notification->data['task']['assigned_to'] == 1)
            <div>
                You have been assigned a <a href="{{route('tasks.show', $notification->data['task']['id'])}}">task</a>.
            </div>
        @else
            <div>
                A new <a href="{{route('tasks.show', $notification->data['task']['id'])}}" class="text-blue-500">task</a> has been created.
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

