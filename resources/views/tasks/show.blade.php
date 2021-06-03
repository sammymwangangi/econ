<x-task-layout>
	<x-slot name="header">
        <div class="flex justify-between">
            <a href="{{route('tasks.index')}}" class="flex items-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <h1 class="font-bold text-xl text-gray-800 leading-tight">Back to Tasks Board</h1>
            </a>
            <div>
                <a href="{{route('tasks.create')}}" class="flex items-center px-4 py-1 text-xs text-red-600 font-semibold rounded-full border border-red-300 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    Add Task
                </a>

            </div>
        </div>
    </x-slot>
    
    <div class="px-8 py-6 m-4 bg-gray-50 h-auto rounded">
        <div class="text-xl text-gray-500 font-bold px-8">{{$task->name}}</div>
        <hr class="my-4">
        <div class="grid grid-flow-col grid-cols-2 grid-rows-3 gap-4 text-left text-sm px-8">
            <div class="flex gap-2 items-center">
                <div class="text-gray-500 font-semibold">Created By: </div>
                <div class="">
                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                        <img class="h-6 w-6 rounded-full object-cover" src="{{ $task->user->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </button>
                </div>
                <div class="text-gray-800 font-bold">{{$task->user->name}}</div>
                <div class="text-gray-800 font-bold">on {{\Carbon\Carbon::parse($task->created_at)->format('M d')}}</div>
            </div>
            <div class="flex gap-2 items-center">
                <div class="text-gray-500 font-semibold">Start / Due Date: </div>
                <div class="text-gray-800 font-bold">{{\Carbon\Carbon::parse($task->start_at)->format('M d')}} - {{\Carbon\Carbon::parse($task->ends_at)->format('M d')}}</div>
            </div>
            <div class="flex gap-2 items-center">
                <div class="text-gray-500 font-semibold">Status: </div>
                <div class="text-gray-800 font-bold">
                    @include('layouts.status-points')
                </div>
            </div>
            <div class="flex gap-2 items-center">
                <div class="text-gray-500 font-semibold">Assigned to: </div>
                @if($task->assigned_to === null)
                <div class="text-green-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                </div>
                <div class="text-gray-800 font-bold">Unassigned</div>
                @else
                <div class="text-gray-800 font-bold">{{$task->assigned_to}}</div>
                @endif
            </div>
            <div class="flex gap-2 items-center">
                <div class="text-gray-500 font-semibold">Priority: </div>
                <div class="text-gray-800 font-bold">
                    @include('layouts.priority-icon')
                </div>
            </div>
        </div>
        <div class="bg-white shadow-lg rounded px-8 py-4 my-4 text-gray-600">{{$task->description}}</div>

        <div class="text-gray-500 font-bold">Comments</div>
    </div>

</x-task-layout>