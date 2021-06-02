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
	<div class="px-4 py-4 font-extrabold text-xl">{{$team->name}}</div>
	<div class="grid grid-cols-4 gap-4 px-4 py-4">
        @forelse($team->projects as $project)
    		<div class="h-96 shadow rounded bg-white p-4 mb-4">
                <div class="flex items-center">
                    <h1 class="font-bold">{{$project->name}}</h1>
                </div>
            </div>
            @empty
            <div class="text-red-500 text-xl font-bold leading-tight">No Projects Found!</div>
        @endforelse
	</div>
    @endforeach
</x-task-layout>