<x-task-layout>
	<x-slot name="header">
        <div class="flex justify-between">
            <a href="{{route('projects.index')}}" class="flex items-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <h1 class="font-bold text-xl text-gray-800 leading-tight">Back to Projects Board</h1>
            </a>
            <div>
                <a href="{{route('projects.create')}}" class="flex items-center px-4 py-1 text-xs text-red-600 font-semibold rounded-full border border-red-300 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    New Project
                </a>

            </div>
        </div>
    </x-slot>
    
    <div class="px-8 py-6 m-4 bg-gray-50 h-auto rounded">
        <div class="flex items-center text-xl text-gray-500 font-bold px-8">
            {{$project->name}}
            @if(Auth::id() == $project->user->id)
                <a href="{{route('projects.edit', $project->id)}}" class="flex items-center gap-2 rounded-full bg-white px-3 py-1 my-2 mx-4 text-blue-600 text-sm focus:outline-none">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                    Edit
                </a>
                <form action="{{ route('projects.destroy', $project->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                    <button type="submit" class="flex items-center gap-2 rounded-full bg-white px-3 py-1 my-2 mx-4 text-red-600 text-sm focus:outline-none">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        Delete
                    </button>
                </form>
            @endif
        </div>
        <hr class="my-4">
        <div class="grid grid-flow-col grid-cols-2 grid-rows-3 gap-4 text-left text-sm px-8">
            <div class="flex gap-2 items-center">
                <div class="text-gray-500 font-semibold">Created By: </div>
                <div class="">
                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                        <img class="h-6 w-6 rounded-full object-cover" src="{{ $project->user->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </button>
                </div>
                <div class="text-gray-800 font-bold">
                    {{$project->user->name}}
                </div>
                <div class="text-gray-800 font-bold">on {{\Carbon\Carbon::parse($project->created_at)->format('M d')}}</div>
            </div>
        </div>
        <div class="bg-white shadow-lg rounded px-8 py-4 my-4 text-gray-600">{!! $project->description !!}</div>
    </div>
    <div class="mb-4"></div>

</x-task-layout>