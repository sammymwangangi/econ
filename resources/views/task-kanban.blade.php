<x-task-layout>
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <livewire:task-status-board
                :sortable="true"
                :sortable-between-statuses="true"
                :record-click-enabled="true"
            />
        </div>
    </div>
</x-task-layout>
