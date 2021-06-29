<div class="container mx-auto mt-2">
    <div class="flex content-center">
        <button wire:click="showCreateTaskModal"
            class="flex items-center px-4 py-1 text-sm text-red-600 font-semibold rounded-full border border-red-200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            New Task
        </button>
    </div>
    <x-jet-dialog-modal wire:model="showModalForm">
        <x-slot name="title">Create Task</x-slot>
        <x-slot name="content">
            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                <form wire:submit.prevent="save" enctype="multipart/form-data">
                    <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700"> Task Name </label>
                        <div class="mt-1">
                            <input type="text" id="name" wire:model.lazy="name" name="name"
                                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('name') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="sm:col-span-6 pt-5">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <div class="mt-1">
                            <textarea rows="3" wire:model.lazy="description"
                                class="border rounded p-2 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                        </div>
                        @error('description') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex flex-wrap mb-6">
                        <label for="project" class="block text-gray-700 dark:text-white text-sm font-bold mb-2">
                            {{ __('Project') }}:
                        </label>

                        <select class="form-select px-4 py-3 w-full rounded" wire:model="project_id" name="project_id">
                            @foreach ($projects as $project)
                                <option>Select Project</option>
                                <option value="{{ $project->id }}">{{ $project->name }}</option>
                            @endforeach
                        </select>
                        <p class="mt-2 text-sm text-gray-500">
                            Select the projectyour task is associated with.
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
                          <img src="{{ asset('public/task_files/'. $taskfile ) }}">
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
</div>
