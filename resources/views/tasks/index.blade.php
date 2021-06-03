<x-task-layout>
	<x-slot name="header">
        <div class="flex justify-between">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                </svg>
                <h1 class="font-bold text-xl text-gray-800 leading-tight">Filter</h1>
            </div>
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
    @foreach($projects as $project)
    	<div class="px-4 py-4 font-extrabold text-xl">{{$project->name}}/ Task List</div>
        @forelse($project->tasks as $task)
        	<div class="px-4 mb-4">
        		<div class="h-auto items-center shadow rounded bg-white p-4 mb-4">
                    <div class="flex flex-wrap items-center gap-2">
                    	<div class="flex flex-wrap items-center gap-2">
                    		@include('layouts.status')
                        	<a href="{{route('tasks.show', $task->id)}}" class="font-semibold">{{$task->name}}</a>
                    	</div>
                        <div class="flex flex-wrap items-center gap-2" contenteditable="none">
                            @if($task->status === 'Completed')
            	                <button class="flex flex-shrink-0 items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            	                   {{$task->status}}
            	                </button>
                            @endif
        	                @include('layouts.priority')
                            @if($task->assigned_to === null)
        	                   <button class="hidden flex flex-shrink-0 items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">
                                    {{$task->assigned_to}}
                                </button>
                                @else
                                <button class="flex flex-shrink-0 items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">
                                    {{$task->assigned_to}}
                                </button>
                            @endif
        	                <button class="flex flex-shrink-0 items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
        	                    {{\Carbon\Carbon::parse($task->start_at)->format('M d')}} - {{\Carbon\Carbon::parse($task->ends_at)->format('M d')}}
        	                </button>
                        </div>
                    </div>
                </div>
        	</div>
            @empty
            <div class="pl-12 text-red-500 text-xl font-bold leading-tight">No Tasks Found!</div>
        @endforelse
    @endforeach

</x-task-layout>