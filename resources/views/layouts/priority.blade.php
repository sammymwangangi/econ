@if($task->priority === 'None')
    <button class="flex flex-shrink-0 items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-gray-300 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
        {{$task->priority}}
    </button>
@endif

@if($task->priority === 'Low')
    <button class="flex flex-shrink-0 items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-blue-400 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
        {{$task->priority}}
    </button>
@endif

@if($task->priority === 'Medium')
    <button class="flex flex-shrink-0 items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-yellow-300 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
        {{$task->priority}}
    </button>
@endif

@if($task->priority === 'High')
    <button class="flex flex-shrink-0 items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-red-400 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
        {{$task->priority}}
    </button>
@endif