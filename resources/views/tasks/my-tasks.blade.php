<x-task-layout>
	<x-slot name="header">
        <div class="flex justify-between text-xs">
            <div class="flex items-center">
            </div>
            <div>
                <livewire:add-task />
            </div>
        </div>
    </x-slot>

    <div class="px-4 pb-2 mx-4 my-2 shadow-md bg-white rounded">
        <button class="w-48 items-center uppercase py-2 bg-red-400 text-white">Not Started</button>
        <livewire:my-task-table />
    </div>
    <div class="px-4 pb-2 mx-4 my-2 shadow-md bg-white rounded">
        <button class="w-48 items-center uppercase px-4 py-2 bg-yellow-400 text-gray-800">In Progress</button>
        <livewire:progress-table />
    </div>

    <div class="px-4 pb-2 mx-4 my-2 shadow-md bg-white rounded">
        <button class="w-48 items-center uppercase px-4 py-2 bg-green-400 text-white">Completed</button>
        <livewire:complete-table />
    </div>
</x-task-layout>
