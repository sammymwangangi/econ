<div class="flex-1 flex flex-col justify-between shadow rounded bg-white p-4 mb-4" style="height: 28rem;">
    <div>
        <div class="message">
            @if(session()->has('message'))
            <div class="bg-green-500 px-2 py-1 rounded-full">
                <div class="text-white font-bold text-xs">
                    {{session('message')}}!
                </div>
            </div>
            @endif
        </div>
        <div class="flex justify-between items-center py-4">
            <h1 class="font-bold text-gray-700">My Work</h1>
            <svg wire:click="refreshChildren" class="w-6 h-6 cursor-pointer text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
        </div>
        <div class="flex flex-col divide-y py-2">
            <div class="flex justify-between py-2 mb-2">
                <div class="flex">
                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h1 class="font-bold text-gray-500">Tasks</h1>
                </div>
                <div>
                    <svg wire:click="showCreateTaskModal" class="w-6 h-6 text-gray-500 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
            </div>
            @foreach($tasks as $task)
                <div class="flex-col hover:bg-red-50">
                    <div class="flex items-center gap-2 px-2 pt-2">
                        @include('layouts.status')
                        <a href="{{route('tasks.show', $task->id)}}"> {{ Str::limit(($task->name), 20) }}</a>
                        @include('layouts.priority')
                        <button class="flex flex-shrink-0 items-center px-4 py-1 text-white rounded-full bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 capitalize text-xs">
                            {{\Carbon\Carbon::parse($task->start_at)->format('M d')}} - {{\Carbon\Carbon::parse($task->ends_at)->format('M d')}}
                        </button>
                    </div>
                    <div class="flex flex-wrap items-center gap-2 px-4 py-2">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="{{route('my-tasks')}}" class="text-gray-500 font-semibold">Full Recap</a>
    </div>

    <x-jet-dialog-modal wire:model="showModalForm">
        <x-slot name="title">Create Task</x-slot>
        <x-slot name="content">
            <div class="space-y-8 divide-y divide-gray-200 w-full mt-10">
                <form wire:submit.prevent="save" enctype="multipart/form-data">
                    <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700"> Task Name </label>
                        <div class="mt-1">
                            <input type="text" id="name" wire:model.lazy="name" name="name"
                                class="caret-red-500 block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('name') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="sm:col-span-6 pt-5">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <div class="mt-1">
                            <textarea id="description" rows="3" wire:model.lazy="description" class="shadow-sm focus:ring-indigo-500 appearance-none border py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                        </div>
                        @error('description') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="flex flex-wrap mb-6">
                        <label for="project" class="block text-gray-700 dark:text-white text-sm font-bold mb-2">
                            {{ __('Project') }}:
                        </label>

                        <select class="form-select px-4 py-3 w-full rounded" wire:model="project_id" name="project_id">
                            <option>Select Project</option>
                            @foreach ($projects as $project)
                                <option value="{{ $project->id }}">{{ $project->name }}</option>
                            @endforeach
                        </select>
                        <p class="mt-2 text-sm text-gray-500">
                            Select the project your task is associated with.
                        </p>

                        @error('project_id')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="sm:col-span-3">
                        <label for="start_at" class="block text-sm font-medium leading-5 text-gray-700">
                            Start At
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input
                                type="date"
                                wire:model.lazy="start_at"
                                class="border rounded p-2 block w-full sm:text-sm sm:leading-5"
                                placeholder="What's the task about?"
                            />
                        </div>
                        @error('start_at')
                        <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="sm:col-span-3">
                        <label for="end_at" class="block text-sm font-medium leading-5 text-gray-700">
                            Due Date
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input
                                type="date"
                                wire:model.lazy="end_at"
                                class="border rounded p-2 block w-full sm:text-sm sm:leading-5"
                            />
                        </div>
                        @error('end_at')
                        <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="sm:col-span-3">
                        <label for="priority" class="block text-sm font-medium leading-5 text-gray-700">
                            Priority
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <select
                                wire:model.lazy="priority"
                                class="border appearance-none bg-white rounded p-2 block w-full sm:text-sm sm:leading-5">
                                <option>Select Task Priority</option>
                                <option value="High">High</option>
                                <option value="Medium">Medium</option>
                                <option value="Low">Low</option>
                                <option value="None">None</option>
                            </select>
                        </div>
                        @error('priority')
                        <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="sm:col-span-3">
                        <label for="status" class="block text-sm font-medium leading-5 text-gray-700">
                            Status
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <select
                                wire:model.lazy="status"
                                class="border appearance-none bg-white rounded p-2 block w-full sm:text-sm sm:leading-5">
                                <option>Status</option>
                                <option value="No Progress">No Progress</option>
                                <option value="In Progress">In Progress</option>
                                <option value="Complete">Complete</option>
                            </select>
                        </div>
                        @error('status')
                        <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
                            Assign to user
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <select
                                wire:model.lazy="assigned_to"
                                class="border appearance-none bg-white rounded p-2 block w-full sm:text-sm sm:leading-5">
                                <option>Select User</option>
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('assigned_to')
                        <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div
                        class="sm:col-span-6"
                        x-data="{ isUploading: false, progress: 0 }"
                        x-on:livewire-upload-start="isUploading = true"
                        x-on:livewire-upload-finish="isUploading = false"
                        x-on:livewire-upload-error="isUploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress"
                    >
                        <div class="w-full m-2 p-2">
                          @if ($taskfile)
                           Task File:
                          <img src="{{ asset('storage/'.$task->taskfile) }}">
                          @endif
                          @if ($taskfile)
                          File Preview:
                          <img src="{{ $taskfile->temporaryUrl() }}">
                          @endif
                        </div>
                        <label for="title" class="block text-sm font-medium text-gray-700"> Task File </label>
                        <div class="mt-1">
                          <input type="file" id="taskfile" wire:model="taskfile" name="taskfile" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5" />
                        </div>
                        <!-- Progress Bar -->
                        <div x-show="isUploading">
                            <progress max="100" x-bind:value="progress"></progress>
                        </div>
                        @error('taskfile') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </form>
            </div>
        </x-slot>
        <x-slot name="footer">
            @if ($taskId)
                <x-jet-button wire:click="updateTask">Update</x-jet-button>
            @else
                <x-jet-button wire:click="storeTask">Store</x-jet-button>
            @endif
        </x-slot>
    </x-jet-dialog-modal>

    <x-jet-dialog-modal wire:model="detailsModal">
        <x-slot name="title">Task Details</x-slot>
        <x-slot name="content">
            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                {{$task->name}}
                <p>
                    {!! $task->description !!}
                </p>
            </div>
        </x-slot>
        <x-slot name="footer">
            @if ($taskId)
            <a href="{{route('tasks.show', $task->id)}}">
                <x-jet-button>View full details</x-jet-button>
            </a>
            @else
                <x-jet-button>Close</x-jet-button>
            @endif
        </x-slot>
    </x-jet-dialog-modal>
</div>
