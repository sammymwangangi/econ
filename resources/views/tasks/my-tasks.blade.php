<x-task-layout>
	<x-slot name="header">
        <div class="flex justify-between">
            <div class="flex items-center">
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
    <div class="justify-content-center px-4">
        
        <button class="w-48 items-center text-center uppercase px-4 py-2 bg-red-400 text-white">Not Started</button>
    </div>
    <div class="px-4 py-4 mx-4 my-4 shadow-md">
        <livewire:my-task-table />
    </div>
    <div class="justify-center px-4">
        <button class="w-48 items-center text-center uppercase px-4 py-2 bg-yellow-400 text-gray-800">In Progress</button>
    </div>
    <div class="px-4 py-4 mx-4 my-4 shadow-md">
        <livewire:progress-table />
    </div>

    <div class="justify-center px-4">
        <button class="w-48 items-center text-center uppercase px-4 py-2 bg-green-400 text-white">Completed</button>
    </div>
    <div class="px-4 py-4 mx-4 my-4 shadow-md">
        <livewire:complete-table />
    </div>
</x-task-layout>