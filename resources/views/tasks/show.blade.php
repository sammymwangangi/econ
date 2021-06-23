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
        <div class="flex items-center text-xl text-gray-500 font-bold px-8">
            {{$task->name}}
            @if(Auth::id() == $task->user->id)
                <a href="{{route('tasks.edit', $task->id)}}" class="flex items-center gap-2 rounded-full bg-white px-3 py-1 my-2 mx-4 text-blue-600 text-sm focus:outline-none">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                    Edit
                </a>
                @role('super-admin')
                <form action="{{ route('tasks.destroy', $task->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                    <button type="submit" class="flex items-center gap-2 rounded-full bg-white px-3 py-1 my-2 mx-4 text-red-600 text-sm focus:outline-none">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        Delete
                    </button>
                </form>
                @endrole
            @endif
        </div>
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
                <div class="text-gray-500 font-semibold">Start Date: </div>
                <div class="text-gray-800 font-bold">{{\Carbon\Carbon::parse($task->start_at)->format('M d')}}</div>
            </div>
            <div class="flex gap-2 items-center">
                <div class="text-gray-500 font-semibold">Due Date: </div>
                <div class="text-gray-800 font-bold">{{\Carbon\Carbon::parse($task->ends_at)->format('M d')}}</div>
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
        <div class="bg-white shadow-lg rounded px-8 py-4 my-4 text-gray-600">{!! $task->description !!}</div>

        <div class="flex gap-2 py-4">
            <div class="text-gray-400 font-semibold uppercase text-lg">Attachments</div>
            <div class="text-gray-500 cursor-pointer">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path></svg>
            </div>
        </div>
        <div class="px-8 py-1 bg-white text-base">
            {{-- <img src="{{url('/task_files/'.$task->taskfile)}}" width="100" height="100" alt="task-file"> --}}
            {{$task->taskfile}}
        </div>
        <div class="text-gray-500 font-bold">
            <h1 id="comments" class="py-4 text-xl">Comments</h1>
            <hr>
  
            @include('layouts.commentsDisplay', ['comments' => $task->comments, 'task_id' => $task->id])

            <hr />
            <h4 class="py-4 font-semibold">Add comment</h4>
            <form method="post" action="{{ route('comments.store'   ) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    {{-- <textarea class="form-control" name="body"></textarea> --}}
                     <textarea id="body" rows="3" class="ckeditor w-full rounded border-gray-200 @error('body') border-red-500 @enderror" name="body" value="{{ old('body') }}" required></textarea>
                    <input type="hidden" name="task_id" value="{{ $task->id }}" />
                </div>
                <div class="my-2">
                    <input type="submit" class="flex items-center px-4 py-1 text-sm text-red-600 font-semibold rounded-full bg-white border border-red-200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2 cursor-pointer" value="Comment" />
                </div>
            </form>
        </div>
    </div>
    <div class="mb-4"></div>

</x-task-layout>