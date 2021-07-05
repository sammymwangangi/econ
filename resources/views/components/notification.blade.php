
<div class="font-bold">Latest Tasks Created</div>
@foreach($notifications as $notification)
    @if($notification->type === 'App\Notifications\TaskAdded')    
        <div>
            {{$notification->data['task']['name']}}
        </div>
            
    @endif
@endforeach
<div class="text-center px-1 py-1 text-green-500 font-bold my-2">
    <a href="{{url('taskmanager/notifications')}}" class="">View all</a>
</div>