
<div class="font-bold">Latest Tasks Created</div>
@if ($notifications->count())
    @foreach($notifications as $notification)
        <div>
            {{$notification->data['task']['name']}}
        </div>

    @endforeach
    <div class="text-center px-1 py-1 text-green-500 font-bold my-2">
        <a href="{{url('taskmanager/notifications')}}" class="">View all</a>
    </div>
@else
    <p class="text-gray-600 text-xs">
        You have no unread notifications
    </p>
@endif

