<div class="flex justify-between">
    <div class="flex-1"></div>
    <div class="flex-1 bg-white">
        <div class="font-bold">Latest Tasks Created</div>
        @foreach($notifications as $notification)
        @if($notification->type === 'App\Notifications\TaskAdded')    
        <div>
            {{$notification->data['task']['name']}}
        </div>
        
        @endif
        @endforeach
    </div>
    <div class="flex-1"></div>
</div>
