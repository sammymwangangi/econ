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
                <a href="{{route('projects.create')}}" class="flex items-center px-4 py-1 text-sm text-red-600 font-semibold rounded-full border border-red-200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    New Project
                </a>

            </div>
        </div>
    </x-slot>

    @foreach($teams as $team)
    {{-- @if($team->projects->count() > 0) --}}
	<div class="px-4 py-4 font-extrabold text-xl">{{$team->name}}</div>
	<div class="lg:grid lg:grid-cols-4 gap-4 px-4 py-4">
        @forelse($team->projects as $project)
            <div>
                
        		<div class="h-80 shadow rounded bg-white p-4 mb-4">
                    <div class="flex flex-col space-y-10">
                        <div>
                            <div class="flex items-center">
                                <a href="{{route('projects.show', $project->id)}}" class="font-semibold">{{$project->name}}</a>
                            </div>
                            <div class="text-gray-500 text-sm">{!! Str::limit($project->description, 36, ' (...)') !!}</div>
                        </div>
                        <div class="flex gap-1">
                            <a href="{{route('tasks.index')}}" class="p-2 bg-gray-50">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </a>
                            <a href="#" class="p-2 bg-gray-50">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path></svg>
                            </a>
                            <a href="#" class="p-2 bg-gray-50">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </a>
                            <a href="#" class="p-2 bg-gray-50">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z"></path></svg>
                            </a>
                        </div>
                        <div>
                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ $project->user->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            @empty
            <div class="text-red-500 text-xl font-bold leading-tight">No Projects Found!</div>
        @endforelse
	</div>
    {{-- @endif --}}
    @endforeach
</x-task-layout>