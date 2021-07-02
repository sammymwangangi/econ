
<div class="font-bold">Latest Tasks Created</div>
@foreach($notifications as $notification)
    @if($notification->type === 'App\Notifications\TaskAdded')    
        <div>
            {{$notification->data['task']['name']}}
        </div>
            
    @endif
@endforeach