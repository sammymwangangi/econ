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
    
    <div class="px-4 py-4 bg-white h-auto rounded">
        
    </div>

</x-task-layout>