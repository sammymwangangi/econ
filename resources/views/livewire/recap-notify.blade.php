@if($overdueTasks == 1)
    <span class="absolute top-0 left-0 flex h-2 w-2">
        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-600 opacity-75"></span>
        <span class="relative inline-flex rounded-full h-2 w-2 bg-red-600 text-white">{{$overdueTasks}}</span>
    </span>
@endif
