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
                <button class="flex items-center px-4 py-1 text-xs text-red-600 font-semibold rounded-full border border-red-300 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Add Task
            </button>

            </div>
        </div>
    </x-slot>
	<div class="px-4 py-4 font-extrabold text-xl">Project Name/ Task List</div>
	<div class="px-4 mb-4">
		<div class="h-auto items-center shadow rounded bg-white p-4 mb-4">
            <div class="flex flex-wrap items-center gap-2">
            	<div class="flex flex-wrap items-center gap-2">
            		<svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                	<h1 class="font-semibold">Task Name</h1>
            	</div>
                <div class="flex flex-wrap items-center gap-2">
	                <button class="flex flex-shrink-0 items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
	                    Completed May 31
	                </button>
	                <button class="flex flex-shrink-0 items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
	                    High
	                </button>
	                <button class="flex flex-shrink-0 items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">
	                    Sammy M.
	                </button>
	                <button class="flex flex-shrink-0 items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
	                    May 5 - June 1
	                </button>
                </div>
            </div>
        </div>

		<div class="h-auto items-center shadow rounded bg-white p-4 mb-4">
            <div class="flex items-center gap-2">
            	<svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h1 class="font-semibold">Task Name</h1>
                <button class="flex items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    In Progress
                </button>
                <button class="flex items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-yellow-400 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2">
                    Medium
                </button>
                <button class="flex items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">
                    Sammy M.
                </button>
                <button class="flex items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                    May 5 - June 1
                </button>
            </div>
        </div>

        <div class="h-auto items-center shadow rounded bg-white p-4 mb-4">
            <div class="flex items-center gap-2">
            	<svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h1 class="font-semibold">Task Name</h1>
                <button class="flex items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    No Progress
                </button>
                <button class="flex items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-indigo-300 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:ring-offset-2">
                    Low
                </button>
                <button class="flex items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">
                    Sammy M.
                </button>
                <button class="flex items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                    May 5 - June 1
                </button>
            </div>
        </div>
	</div>

	<div class="px-4 py-4 font-extrabold text-xl">Project Name/ Task List</div>
	<div class="px-4 mb-4">
		<div class="h-auto items-center shadow rounded bg-white p-4 mb-4">
            <div class="flex items-center gap-2">
            	<svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h1 class="font-semibold">Task Name</h1>
                <button class="flex items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">
                    Sammy M.
                </button>
                <button class="flex items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                    May 5 - June 1
                </button>
            </div>
        </div>

		<div class="h-auto items-center shadow rounded bg-white p-4 mb-4">
            <div class="flex items-center gap-2">
            	<svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h1 class="font-semibold">Task Name</h1>
                <button class="flex items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Completed May 31
                </button>
                <button class="flex items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                    High
                </button>
                <button class="flex items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">
                    Sammy M.
                </button>
                <button class="flex items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                    May 5 - June 1
                </button>
            </div>
        </div>

        <div class="h-auto items-center shadow rounded bg-white p-4 mb-4">
            <div class="flex items-center gap-2">
            	<svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h1 class="font-semibold">Task Name</h1>
                <button class="flex items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-yellow-400 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2">
                    Medium
                </button>
                <button class="flex items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">
                    Sammy M.
                </button>
                <button class="flex items-center px-4 py-1 text-xs text-white font-semibold rounded-full bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                    May 5 - June 1
                </button>
            </div>
        </div>
	</div>
</x-task-layout>