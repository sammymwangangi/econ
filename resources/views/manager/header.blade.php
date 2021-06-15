<div>

    {{-- Controls --}}
    <div class="p-2">
        <div class="relative z-0 inline-flex shadow-sm">
            <button
                wire:click.stop="goToPreviousMonth"
                type="button"
                class="relative inline-flex items-center px-4 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                <
            </button>
            <button
                wire:click.stop="goToCurrentMonth"
                type="button"
                class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                Today
            </button>
            <button
                wire:click.stop="goToNextMonth"
                type="button"
                class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                >
            </button>
            <button
                type="button"
                class="bg-gray-700 text-white -ml-px relative inline-flex items-center px-4 py-2 rounded-r-md border border-gray-300 text-sm leading-5 font-medium focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 transition ease-in-out duration-150">
                {{ $startsAt->format('F Y') }}
            </button>
        </div>
    </div>

    {{-- Unscheduled Tasks --}}
    <div class="bg-orange-100 p-2">
        <h1 class="text-lg font-medium">
            Unscheduled Tasks
        </h1>
        <div class="flex py-2">
            @foreach($unscheduledEvents as $task)
                <div
                    class="shadow p-2 border rounded bg-white mr-2"
                    ondragstart="onLivewireCalendarEventDragStart(task, '{{ $task->id }}')"
                    draggable="true">
                    <p class="font-medium text-sm">
                        {{ $task->name }}
                    </p>
                    <p class="text-xs">
                        {{ $task->description }}
                    </p>
                    <button
                        wire:click.stop="deleteEvent({{ $task->id }})"
                        type="button"
                        class="mt-2 inline-flex items-center px-2 py-1 border border-transparent text-xs leading-4 font-medium rounded text-indigo-700 bg-indigo-100 hover:bg-indigo-50 focus:outline-none focus:border-indigo-300 focus:shadow-outline-indigo active:bg-indigo-200 transition ease-in-out duration-150">
                        Delete
                    </button>
                </div>
            @endforeach
            @if($unscheduledEvents->isEmpty())
                <p class="text-sm text-gray-700">
                    No tasks found
                </p>
            @endif
        </div>
    </div>

    {{-- Modals --}}
    <div>
        <div>
            @if($isModalOpen)
                @include('manager.create-task-modal')
            @endif
        </div>

        <div>
            @if($selectedTask)
                @include('manager.task-details-modal')
            @endif
        </div>
    </div>
</div>