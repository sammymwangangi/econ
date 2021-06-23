<div class="flex-1 flex flex-col justify-between shadow rounded bg-white p-4 mb-4" style="height: 28rem;">
    <div>
        <div class="flex justify-between items-center py-4">
            <h1 class="font-bold text-gray-700">My Work</h1>
            {{-- <button wire:click="refreshChildren">Refresh</button> --}}
            <svg wire:click="refreshChildren" class="w-6 h-6 cursor-pointer text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
        </div>
        <div class="flex flex-col divide-y py-2">
            <div class="flex justify-between py-2 mb-2">
                <div class="flex">
                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h1 class="font-bold text-gray-500">Tasks</h1>
                </div>
                <div>
                    <a data-title='Add Task' data-placement="top" href="{{route('tasks.create')}}">
                        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </a>
                </div>
            </div>
            @foreach($tasks as $task)
                <div class="flex-col hover:bg-red-50">
                    <div class="flex items-center gap-2 px-2 pt-2">
                        @include('layouts.status')
                        <a href="{{route('tasks.show', $task->id)}}">{{$task->name}}</a>
                        @include('layouts.priority')
                        <button class="flex flex-shrink-0 items-center px-4 py-1 text-white rounded-full bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 capitalize text-xs">
                            {{\Carbon\Carbon::parse($task->start_at)->format('M d')}} - {{\Carbon\Carbon::parse($task->ends_at)->format('M d')}}
                        </button>
                    </div>
                    <div class="flex flex-wrap items-center gap-2 px-4 py-2">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="{{route('my-tasks')}}" class="text-gray-500 font-semibold">Full Recap</a>
    </div>
</div>