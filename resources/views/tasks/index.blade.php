<x-task-layout>
	<x-slot name="header">
        <div class="flex justify-between">
            <div class="flex items-center">
            </div>
            <div>
                <livewire:add-task />

            </div>
        </div>
    </x-slot>

    <div class="px-4 py-4">
        <livewire:tasks-table />
    </div>
</x-task-layout>
